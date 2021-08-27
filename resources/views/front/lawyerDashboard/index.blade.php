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
				<i class="fas fa-calendar-alt bg-blue"></i>
				<div class="d-inline">
					<h2>جدول المواعيد</h2>
					<span>انشاء جدول المواعيد الخاص بي</span>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<nav class="breadcrumb-container" aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.html"><i class="fas fa-calendar-alt"></i></a>
					</li>

					<li class="breadcrumb-item active" aria-current="page">جدول المواعيد</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

						
						
						
						
						
<div class="row mt-40">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>انشاء جدول المواعيد</h3>
                <div class="card-header-right">
					<ul class="list-unstyled card-option">
                        <li><i class="ik ik-minus minimize-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-body progress-task">
                <div class="dd" data-plugin="nestable">
                    <div id="app">

                    </div>


                </div>

            </div>

        </div>
    </div>
</div>







<!-- Start For Lawyer Time Available -->
<div class="row mt-40">
            <div class="col-md-12">




        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>اضافة مواعيد الاستشارات عبر الموقع</h3></div>
                    <div class="card-body">

<form action="{{route('lawyers.storeLawyerTimeAvailable',session('lawyerData')[0]['id'])}}" method="POST" class="form-categories">
@csrf

<div class="form-group">


<div class="row">
<div class="col-md-8 offset-md-2">

<h5 class="mb-20 mt-30">التحكم بالمواعيد واضافتها: </h5>

<div id="mainCategory" class="repeater">
<div class="row" data-repeater-list="group-a">

    

<div data-repeater-item class="col-md-12 d-flex mb-2" >
    <div class="row">

        <div class="form-group col-md-4 mb-2 mb-sm-0">
            <div class="input-group">
		  <div class="input-group-prepend">
		  </div>
 		  
            <input type="date" style="text-align: right" placeholder=""  name="date" class="form-control datetimepicker-input" required>

		</div> 
        </div>
        <div class="form-group col-md-4 mb-2 mb-sm-0">
            <input name="startTime" type="text" class="form-control" placeholder="startTime" required/>
        </div>
        <div class="form-group col-md-4 mb-2 mb-sm-0">
            <input name="endTime" type="text" class="form-control" placeholder="endTime" required/>
        </div>
    </div>
    <button data-toggle="modal" data-target="#deleteRow" type="button" class="btn btn-danger btn-icon mr-2 mt-1" ><i data-toggle="tooltip" data-placement="top" title="حذف" class="ik ik-trash-2"></i></button>
</div>


</div>


    <button data-repeater-create type="button" class="btn btn-success btn-addMoreField mt-10"><i class="ik ik-plus"></i>أضف قطاع</button>
    
<div class="text-center mt-20">
<button type="submit" class="btn btn-dark btn-lg">حفظ البيانات</button>
</div>
    
    
</div>
</div> 
</div> 



</div>

</form>
                    </div>
                </div>
            </div>
        </div>


            </div>
            </div>
<!-- End For Lawyer Time Available -->

    
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

        <!-- file script belong to clander plugin -->
        <script src="{{asset('assets/lawyerDashboard/js/script.js')}}"></script>
         <script src="{{asset('assets/lawyerDashboard/js/alerts.js')}}"></script>



         <!--<script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>-->

         <script src="{{asset('assets/lawyerDashboard/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>

         <script src="{{asset('assets/lawyerDashboard/plugins/jquery.repeater/jquery.repeater.js')}}"></script>


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
