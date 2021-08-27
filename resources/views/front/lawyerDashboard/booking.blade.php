<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>schedule</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/bootstrap/dist/css/bootstrap-rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/icon-kit/dist/css/iconkit.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/ionicons/dist/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
		
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/jquery-toast-plugin/dist/jquery.toast.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/dist/css/theme.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/css/intlTelInput.css">
		
        <script src="{{asset('assets/lawyerDashboard/src/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            @include('front.lawyerDashboard.includes.header')

            <div class="page-wrap">
            @include('front.lawyerDashboard.includes.sidebar')
                <div class="main-content">
                    <div class="container-fluid">
					

@include('front.alerts.success')
@include('front.alerts.errors')					
<div class="page-header">
	<div class="row align-items-end">
		<div class="col-lg-8">
			<div class="page-header-title">
				<i class="fas fa-calendar-check bg-blue"></i>
				<div class="d-inline">
					<h2> حجوزاتي</h2>
					<span> الحجوزات الخاصة بي</span>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<nav class="breadcrumb-container" aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.html"><i class="fas fa-calendar-alt"></i></a>
					</li>

					<li class="breadcrumb-item active" aria-current="page">جدول الحجوزات</li>
				</ol>
			</nav>
		</div>
	</div>
</div>
                            <!-- Customer overview start -->

                            <div class="row mt-40">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>جدول الحجوزات الخاصة بى</h3>
                                        <button><a href="{{route('lawyer.generatePDF')}}">Store Lawyer Reservation That Today As Pdf</a></button>
                                        <div class="card-header-right">
											<ul class="list-unstyled card-option">
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body progress-task">
                                        <div class="dd" data-plugin="nestable">


                                        <div class="table-responsive">
                                            @if($reservations -> count() != 0)
                                            <table id="advanced_table" class="table table-striped table-bordered table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>رقم العميل</th>
                                                        <th>إسم العميل</th>
                                                        <th>تاريخ الحجز</th>
                                                        <th>وقت الحجز</th>
                                                        <th>إدارة</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($reservations as $reservation)
                                                    <tr>
                                                        <td>{{$reservation -> id}}</td>
                                                        <td>{{$reservation -> username}}</td>
                                                        <td>{{$reservation -> date}}</td>
                                                        <td class="text-center">{{$reservation -> time}}</td>
														
                                                        <td class="text-center">
															<div class="action-btns">
																<a data-toggle="tooltip" data-placement="top" title="عرض بيانات العميل" class="btn btn-icon btn-info btn-add-Details" href="{{route('lawyers.clientInformation',$reservation -> id)}}"><i class="ik ik-eye f-16 mr-10"></i></a>
																<a data-target="#deleteModal" class="btn btn-icon btn-danger btn-add-Delete" href="{{route('lawyers.deleteReservation',$reservation -> id)}}"><i class="ik ik-trash-2 f-16 mr-10" data-placement="top" title="الغاء الموعد" ></i></a><!--from a data-toggle="modal"   from li data-toggle="tooltip"-->
															</div>
														</td>
                                                    </tr>
                                                    @endforeach
 
                                                </tbody>
                                            </table>
                                            @endif

                                            @if($reservations -> count() == 0)
                                               <h1>There Is Not Any Reservations</h1>
                                            @endif
                                            
                                            
                                        </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                            </div>
 



<!-- Start Lawyer Time Available -->
<div class="row mt-40">

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3>جدول مواعيد الاستشارات عبر الموقع</h3>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="ik ik-minus minimize-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-body progress-task">
            <div class="dd" data-plugin="nestable">

            <div class="table-responsive">
                <table id="advanced_table" class="table table-striped table-bordered table-hover mb-0">
                    <thead>
                        <tr>
                            <th>تاريخ الميعاد</th>
                            <th>وقت الاستشارات</th>
                            <th>إدارة</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($lawyerTimeAvailables as $lawyerTimeAvailable)
                        <tr>
                            <td>{{$lawyerTimeAvailable -> date}}</td>
                            <td class="text-center">from {{$lawyerTimeAvailable -> from}} to {{$lawyerTimeAvailable -> to}}</td>
                            
                            <td class="text-center">
                                <div class="action-btns">
                                    <a data-target="#deleteModal" class="btn btn-icon btn-danger btn-add-Delete" href="{{route('lawyers.deleteAppointmentFromLawyerTimeAvailable',$lawyerTimeAvailable -> id)}}"><i class="ik ik-trash-2 f-16 mr-10" data-toggle="tooltip" data-placement="top" title="الغاء الموعد" ></i></a><!--data-toggle="modal"-->
                                </div>
                            </td>
                        </tr>





                

                        @endforeach



                        



                        

                    </tbody>
                </table>
            </div>


            </div>

        </div>
    </div>
</div>
</div>
<!-- End Lawyer Time Available -->





                            </div>

						
                    </div>
					
                </div>


                
            </div>





         
                        





            <!--<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">الغاء معاد</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                    هل متأكد من الغاء هذا المعاد؟
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"><a style="color:white" href="">الغاء</a></button>--><!--onclick="showDangerToast()" data-dismiss="modal"-->
                                        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                    </div>
                                </div>-->
                            </div>
                        </div>-->












                        

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!--<script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>-->
    <script src="{{asset('assets/lawyerDashboard/plugins/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/lawyerDashboard/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/lawyerDashboard/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/lawyerDashboard/plugins/screenfull/dist/screenfull.js')}}"></script>
    <script src="{{asset('assets/lawyerDashboard/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/lawyerDashboard/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/lawyerDashboard/plugins/moment/moment.js')}}"></script>
    <script src="{{asset('assets/lawyerDashboard/plugins/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>

    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js"></script>-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/intlTelInput.min.js"></script>

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
	
	
    </body>
</html>
