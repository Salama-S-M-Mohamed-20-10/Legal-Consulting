<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>الاشعارات</title>
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

                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">حذف االتنبيه</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                    هل متأكد من عملية حذف هذا التنبيه ؟
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal" ="showDangerToast()">حذف</button>
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
