<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getTaskList()
    {
        if (Auth::check()) {
            $user_email = Auth::user()->email;

            // Clickup API integration
            $space_id  = 14919313;      // https://api.clickup.com/api/v2/space/14919313
            
            // Get folder
            $folder_id = 108159194;     // https://api.clickup.com/api/v2/folder/14919313
            $response_folder = Http::withHeaders([
                'Authorization' => env('CLICKUP_API_KEY')
            ])->get(env('CLICKUP_API_BASE_URL').'/folder/'.$folder_id);
            if ( $response_folder->successful() ) {
                $lists = $response_folder['lists'];
                foreach ( $lists as $list ) {
                    $list_id = $list['id'];

                    // https://api.clickup.com/api/v2/list/186154924/field
                    // Get custom fields
                    $response_custom_fields = Http::withHeaders([
                        'Authorization' => env('CLICKUP_API_KEY'),
                        'Content-Type'  => 'application/json'
                    ])->get(env('CLICKUP_API_BASE_URL').'/list/'.$list_id.'/field');
                    if ( $response_custom_fields->successful() ) {
                        
                        $custom_fields = (isset($response_custom_fields['fields'])) ? $response_custom_fields['fields'] : "";
                        if ( $custom_fields != "" ) {
                            $field_id = $custom_fields[0]['id'];
                            $field_nm = $custom_fields[0]['name'];
                            $custom_fields_param = '[{"field_id":"'.$field_id.'","operator":"ANY","value":['.$list_id.']}]';
                            $response_task = Http::withHeaders([
                                'Authorization' => env('CLICKUP_API_KEY'),
                                'Content-Type'  => 'application/json'
                            ])->get(env('CLICKUP_API_BASE_URL').'/list/'.$list_id.'/task?archived=false&custom_fields='.$custom_fields_param);
                            if ( $response_task->successful() ) {
                                $tasks = $response_task['tasks'];
                                foreach ( $tasks as $task ) {
                                    $cfs = $task['custom_fields'];
                                    foreach ( $cfs as $cf ) {
                                        
                                    }
                                }

                                $data = array(
                                    'data' => $response_task['tasks']
                                );
                                return view('pages.task', compact('data'));
                            }
                        }

                        // https://api.clickup.com/api/v2/list/186154924/task?archived=false&custom_fields=[{"field_id":"bfc3cdcb-d649-4ac0-9476-847f4b5dba58","operator":"ANY","value":[186154924]}]
                        // Get tasks

                    }
                }
            }
        }
    }
}
