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
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/icon-kit/dist/css/iconkit.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/ionicons/dist/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">
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
				<i class="ik ik-user dropdown-icon bg-blue"></i>
				<div class="d-inline">
					<h2>الملف الشخصي</h2>
					<span>عرض وتعديل بيانات ملفي الشخصي</span>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<nav class="breadcrumb-container" aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="cpindex.html"><i class="ik ik-home"></i></a>
					</li>

					<li class="breadcrumb-item active" aria-current="page">الملف الشخصي</li>
				</ol>
			</nav>
		</div>
	</div>
</div>



<div class="row mt-40">
<div class="col-md-12">




	<div class="row">
      <!-- left column -->
      
      <!-- edit form column -->
      <div class="col-md-8 offset-md-1 personal-info">

        <h3 class="mb-40">تعديل الملف الشخصي</h3>
        @include('admin.includes.alerts.success')
        @include('admin.includes.alerts.errors')
        
        <form action="{{route('admins.updateAdminProfile', session('adminData')[0]['id'] )}}" method="POST" class="form-horizontal" role="form">
          @csrf
          <div class="form-group row">
            <label class="col-md-2 control-label">الاسم</label>
            <div class="col-md-8">
              <input name="name" class="form-control" type="text" value="{{ session('adminData')[0]['name'] }}">
              @error('name')
                  <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2 control-label">البريد الإلكتروني</label>
            <div class="col-md-8">
              <input name="email" class="form-control" type="email" value="{{ session('adminData')[0]['email'] }}">
              @error('email')
                  <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
          </div>

          <button type="submit" class="btn btn-primary btn-lg">حفظ</button>
          <button class="btn btn-dark btn-lg">اعادة</button>


          <!--<div class="form-group row">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary btn-lg" value="حفظ">
              <span></span>
              <input type="reset" class="btn btn-dark btn-lg" value="اعادة">
            </div>
          </div>-->
        </form>
      </div>
  </div>



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
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js",
  preferredCountries: ["sa"]

});
    </script>

    </body>
</html>
