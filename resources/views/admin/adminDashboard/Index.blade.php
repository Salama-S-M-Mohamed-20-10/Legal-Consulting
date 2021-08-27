<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>محاميك</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{asset('assets/lawyerDashboard/favicon.ico')}}" type="image/x-icon" />

        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/bootstrap/dist/css/bootstrap-rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/ionicons/dist/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/icon-kit/dist/css/iconkit.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/jquery-toast-plugin/dist/jquery.toast.min.css')}}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/css/intlTelInput.css">

		<link href="{{asset('assets/lawyerDashboard/plugins/wizard/steps-ar.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/dist/css/theme.css')}}">
        <script src="{{asset('assets/lawyerDashboard/src/js/vendor/modernizr-2.8.3.min.js')}}"></script>
		
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            @include('admin.includes.header')

            <div class="page-wrap">
                @include('admin.includes.sidebar')
                <div class="main-content">
                    <div class="container-fluid">
					
					
                        <div class="row mt-30 clearfix">
						
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h5>محامي</h5>
                                                <h2><a href="{{route('admins.listLawyers')}}">{{\App\Models\Lawyer::count()}}</a></h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-users"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h5>مستخدم</h5>
                                                <h2><a href="{{route('admins.listUsers')}}">{{\App\User::count()}}</a></h2>
                                                <!--<h2>315</h2>-->
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-users"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                    </div>
                                </div>
                            </div>
						
                        </div>
                        
                        
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="fas fa-file-signature dropdown-icon bg-blue"></i>
                                        <div class="d-inline">
                                            <h2>الاحصائيات</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="cpindex.html"><i class="ik ik-home"></i></a>
                                            </li>
                        
                                            <li class="breadcrumb-item active" aria-current="page">احصائيات</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
				<!-- gant chart -->
                        <div class="row mt-40">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>احصائيات المحامين</h3>
                                        <div class="card-header-right">
											<ul class="list-unstyled card-option">
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body progress-task">
                                        <div class="dd" data-plugin="nestable">

                                            <canvas id="lawyers_stats"></canvas>
   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-40">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>احصائيات المستخدمين</h3>
                                        <div class="card-header-right">
											<ul class="list-unstyled card-option">
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body progress-task">
                                        <div class="dd" data-plugin="nestable">

                                            <canvas id="users_stat"></canvas>
   
                                        </div>
                                    </div>
                                </div>
                            </div>
	                    </div>

			<!-- end gant chart-->

 


						
                    </div>
                </div>

		 <!--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <!--<script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>-->
        <script src="{{asset('assets/lawyerDashboard/plugins/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('assets/lawyerDashboard/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/lawyerDashboard/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('assets/lawyerDashboard/plugins/screenfull/dist/screenfull.js')}}"></script>
        <script src="{{asset('assets/lawyerDashboard/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/lawyerDashboard/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/lawyerDashboard/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('assets/lawyerDashboard/plugins/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script>

         <script src="{{asset('assets/lawyerDashboard/dist/js/theme.min.js')}}"></script>
		 
        <script src="{{asset('assets/lawyerDashboard/js/alerts.js')}}"></script>

		 
    <script>
        $(document).ready(function () {
            $('#advanced_table').DataTable({
                "language": {
                    "url": "http://cdn.datatables.net/plug-ins/1.10.20/i18n/Arabic.json"
                }
            });
        });
    </script>
	
    <script>
$(".telephone").intlTelInput({
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
});
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <script>
     var ctx = document.getElementById( 'lawyers_stats' ).getContext( '2d' );
        var chart = new Chart( ctx, {
            type: 'line',

            data: {
                labels: [ 'month_1', 'month_2', 'month_3', 'month_4', 'month_5', 'month_6', 'month_7', 'month_8', 'month_9', 'month_10', 'month_11', 'month_12' ],
                datasets: [ {
                    label: 'محامي',
                    backgroundColor: 'transparent',
                    borderColor: 'rgb(122, 127, 226)',
                    data: [ 50, 70, 40, 60, 90, 100, 30, 20, 110, 75, 130, 125 ]
                } ]
            },

            // Configuration options go here
            options: {
                title: {
                    display: true,
                    text: 'احصائية المحامين'
                },
                scales: {
                    yAxes: [ {
                        position: "left",
                        scaleLabel: {
                            display: true,
                            fontSize: 18,
                            labelString: "Degree in percentage"
                        }
                    } ],
                    xAxes: [ {
                        position: "bottom",
                        scaleLabel: {
                            display: true,
                            fontSize: 18,
                            labelString: "رقم الشهر"
                        },
                        ticks: {
                            display: true
                        }
                    } ]
                }
            }
        } );
        var ctx = document.getElementById( 'users_stat' ).getContext( '2d' );
        var chart = new Chart( ctx, {
            type: 'line',

            data: {
                labels: [ 'month_1', 'month_2', 'month_3', 'month_4', 'month_5', 'month_6', 'month_7', 'month_8', 'month_9', 'month_10', 'month_11', 'month_12' ],
                datasets: [ {
                    label: 'مستخدم',
                    backgroundColor: 'transparent',
                    borderColor: 'rgb(39, 216, 107)',
                    data: [ 50, 70, 50, 30, 65, 80, 35, 40, 110, 40, 120, 90 ]
                } ]
            },

            // Configuration options go here
            options: {
                title: {
                    display: true,
                    text: 'احصائية المستخدمين'
                },
                scales: {
                    yAxes: [ {
                        position: "left",
                        scaleLabel: {
                            display: true,
                            fontSize: 18,
                            labelString: "Degree in percentage"
                        }
                    } ],
                    xAxes: [ {
                        position: "bottom",
                        scaleLabel: {
                            display: true,
                            fontSize: 18,
                            labelString: "رقم الشهر"
                        },
                        ticks: {
                            display: true
                        }
                    } ]
                }
            }
        } );
    
    </script>
	
	
    </body>
</html>
