@extends('layouts.main') 
@section('title', 'Project')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/weather-icons/css/weather-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/chartist/dist/chartist.min.css') }}">
    @endpush

    <div class="container-fluid">
    	<div class="row">
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h3>Project Task List</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Regarding</th>
                                        <th>Activity Type</th>
                                        <th>Activity Status</th>
                                        <th>Owner</th>
                                        <th>Priority</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Building Marketing List</td>
                                        <td>Software pro</td>
                                        <td>Task</td>
                                        <td><label class="badge badge-danger">Open</label></td>
                                        <td>Ken Malit</td>
                                        <td>Normal</td>
                                        <td>7/8/2017</td>
                                        <td>8/9/2018</td>
                                    </tr>
                                    <tr>
                                        <td>Project Task List</td>
                                        <td>Software pro</td>
                                        <td>Task</td>
                                        <td><label class="badge badge-primary">New</label></td>
                                        <td>Ken Malit</td>
                                        <td>Normal</td>
                                        <td>7/8/2017</td>
                                        <td>8/9/2018</td>
                                    </tr>
                                    <tr>
                                        <td>Building Marketing List</td>
                                        <td>Software pro</td>
                                        <td>Task</td>
                                        <td><label class="badge badge-danger">Open</label></td>
                                        <td>Ken Malit</td>
                                        <td>Normal</td>
                                        <td>7/8/2017</td>
                                        <td>8/9/2018</td>
                                    </tr>
                                    <tr>
                                        <td>Project Task List</td>
                                        <td>Software pro</td>
                                        <td>Task</td>
                                        <td><label class="badge badge-success">Close</label></td>
                                        <td>Ken Malit</td>
                                        <td>Normal</td>
                                        <td>7/8/2017</td>
                                        <td>8/9/2018</td>
                                    </tr>
                                    <tr>
                                        <td>Building Marketing List</td>
                                        <td>Software pro</td>
                                        <td>Task</td>
                                        <td><label class="badge badge-primary">New</label></td>
                                        <td>Ken Malit</td>
                                        <td>Normal</td>
                                        <td>7/8/2017</td>
                                        <td>8/9/2018</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- push external js -->
    @push('script')   

        <script src="{{ asset('plugins/owl.carousel/dist/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('plugins/chartist/dist/chartist.min.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/curvedLines.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('plugins/jquery-knob/dist/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/amcharts.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/gauge.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/serial.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/themes/light.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/pie.js') }}"></script>
        <script src="{{ asset('plugins/ammap3/ammap/ammap.js') }}"></script>
        <script src="{{ asset('plugins/ammap3/ammap/maps/js/usaLow.js') }}"></script>


        <script src="{{ asset('js/widget-chart.js') }}"></script>
    @endpush
@endsection