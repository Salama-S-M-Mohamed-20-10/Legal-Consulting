<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>المحامين</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{asset('assets/lawyerDashboard/favicon.ico')}}" type="image/x-icon" />
        
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/bootstrap/dist/css/bootstrap-rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/icon-kit/dist/css/iconkit.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/ionicons/dist/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">

        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')}}">

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
            @include('admin.includes.header')

            <div class="page-wrap">
                @include('admin.includes.sidebar')
                <div class="main-content">
                    <div class="container-fluid">
						<div class="page-header">
							<div class="row align-items-end">
								<div class="col-lg-8">
									<div class="page-header-title">
										<i class="ik ik-briefcase bg-blue"></i>
										<div class="d-inline">
											<h2>عرض التساؤولات</h2>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<nav class="breadcrumb-container" aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item">
												<a href="cpIndex.html"><i class="ik ik-home"></i></a>
											</li>

											<li class="breadcrumb-item active" aria-current="page">التساؤولات</li>
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
                                        <h3>التساؤولات</h3>

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
                                                        <th>م</th>
                                                        <th>إسم المستخدم</th>
                                                        <th>ايميل المستخدم</th>
                                                        <th>تليفون المستخدم</th>
                                                        <th>كومنت المستخدم</th>
                                                        <th>تاريخ التسجيل</th>
                                                        <th>إدارة</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @include('admin.includes.alerts.success')
                                                @include('admin.includes.alerts.errors')
                                                    @foreach($contacts as $contact)
                                                    <tr>
                                                        <td class="text-center">{{ $contact -> id }}</td>
                                                        <td>{{ $contact -> name }}</td>
                                                        <td>{{ $contact -> email }}</td>
                                                        <td>{{ $contact -> phone }}</td>
                                                        <td>{{ $contact -> comment }}</td>
                                                        <td class="text-center">{{ $contact -> created_at }}</td>
                                                        
                                                        <td class="text-center">
															<div class="action-btns">
																<a href="{{route('admins.deleteContacts',$contact -> id)}}" data-target="#deleteModal" class="btn btn-icon btn-danger btn-add-Delete" href='#'><i class="ik ik-trash-2 f-16 mr-10" data-toggle="tooltip" data-placement="top" title="حذف" ></i></a>
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
                            <!-- Customer overview end -->


 


						
                    </div>
                </div>


                
            </div>
        </div>


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
		
        <script src="{{asset('assets/lawyerDashboard/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <script src="{{asset('assets/lawyerDashboard/plugins/datedropper/datedropper.min.js')}}"></script>
        <script src="{{asset('assets/lawyerDashboard/js/form-picker.js')}}"></script>

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
