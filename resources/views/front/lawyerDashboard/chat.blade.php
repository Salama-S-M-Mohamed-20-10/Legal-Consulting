<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>clientInfo</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        
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

        <!--for chat and another -->
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/chatPlugin/css/app.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/dist/css/moreStyle.css')}}">
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">
		
        <script src="{{asset('assets/lawyerDashboard/src/js/vendor/modernizr-2.8.3.min.js')}}"></script>

        <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>

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
					

					
<div class="page-header">
	<div class="row align-items-end">
		<div class="col-lg-8">
			<div class="page-header-title">
                <i class="ik ik-message-circle "></i>
				<div class="d-inline">
					<h2> الرسائل</h2>
					<span>غرفة الرسائل</span>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<nav class="breadcrumb-container" aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.html"><i class="fas fa-calendar-alt"></i></a>
					</li>

					<li class="breadcrumb-item active" aria-current="page">غرفة الرسائل</li>
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
        <h3>معلومات العميل</h3>
    <div class="card-header-right">
		<ul class="list-unstyled card-option">
            <li><i class="ik ik-minus minimize-card"></i></li>
        </ul>
    </div>
</div>
<div class="card-body progress-task">
  <div class="dd" data-plugin="nestable">
    <div class="container-fluid">
        <div class="card my-3 shadow b-0">
            <div class="row no-gutters">
                <div class="col-md-3 d-none d-md-block text-truncate white b-r scrol">
                    <div class="card-header white">
                        <form>
                            <div class="form-group has-right-icon m-0">
                                <input class="form-control light r-30" placeholder="بحث" type="text" style="text-align:left">
                                <i class="icon-search"></i>
                            </div>
                        </form>
                    </div>
                    <div class="slimScroll"  data-height="600">
                        <ul class="list-unstyled">
                            @foreach($users as $user)
                            <a href="{{route('lawyers.selectUserForChat',[$user -> id,session('lawyerData')[0]['id']])}}">
                            <li class="media p-4 b-b list-group-item-action">
                                <div class="avatar avatar-md mr-3">
                                    <img src="{{asset('assets/lawyerDashboard/chatPlugin/img/dummy/u4.png')}}" alt="">
                                    <span class="avatar-badge has-indicator online">
                            
                          </span>
                                </div>
                                <div class="media-body text-truncate">
                                    <small class="float-right">
                                        <span>3 minute ago</span>
                                    </small>
                                    <h6>{{$user -> name}}</h6>
                                    <span class="badge badge-success pt-1 pb-1 r-3 float-right">10</span>
                                    @foreach($user -> messages as $message)
                                        <small>{{$message -> message}}</small>
                                    @endforeach
                                </div>
                            </li>
                            </a>
                            @endforeach
                            
                           
                        </ul>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- end of caht content -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            </div>
 


                            </div>

						
                    </div>
					
                </div>


                
            </div>
         
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
                                        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="showDangerToast()">حذف</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
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

        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js"></script>-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/intlTelInput.min.js"></script>

        <script src="{{asset('assets/lawyerDashboard/dist/js/theme.min.js')}}"></script>

        <script src="{{asset('assets/lawyerDashboard/js/alerts.js')}}"></script>

        <script>
        
        $(".scrol").niceScroll({
        cursorcolor:"#ddd",
        cursorwidth:"8px"
        });
        </script>



        <script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>

        
		 
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
