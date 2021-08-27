<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- belong to responsive-->
        <title>محاميك</title>
        <!-- icon -->
        <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/icon.png')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/SuccessfulReserv.css')}}">
        
    </head>
    <body>
        <!-- start NavBar-->
        @include('front.includes.navbar')
        <!--end NavBar-->

        <!--start date-->
        <div class="container">
              <div class="content" dir="rtl">
                <div class="success text-center">
                    <i class="fas fa-check-circle"></i>
                    <h2>تم حجز معادك بنجاح</h2>
                </div>
                <div class="info shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="mess">   
                            <i class="far fa-envelope"></i>
                            <span>تم اخبار المحامي بمعادك</span>
                    </div>
                    <div class="mess">   
                            <i class="fas fa-phone-alt"></i>
                            <span>رقم تليفون المكتب : <span class="num">{{$lawyer[0] -> phone}}</span></span>
                    </div>
                    <div class="mess">   
                            <i class="far fa-calendar"></i>
                            <span>تفاصيل حجزك</span>
                    </div>
                    <hr>
                    <div class="row detail">
                        <div class="col-md-3">
                            <h3>اسم العميل</h3>
                        </div>
                        <div class="col-md-9">
                            <p>{{session('userData')[0]['name']}}</p>
                        </div>
                    </div>
                    <hr>  
                    <div class="row detail">
                            <div class="col-md-3">
                                <h3>اسم المحامي</h3>
                            </div>
                            <div class="col-md-9">
                                <p>{{$lawyer[0] -> name}}</p>
                            </div>
                    </div>
                    <hr>  
                    <div class="row detail">
                            <div class="col-md-3">
                                <h3>تاريخ الحجز</h3>
                            </div>
                            <div class="col-md-9">
                                <p>Date:{{$dateOfReservation}} Time:{{$timeForReservation}}</p>
                            </div>
                    </div>    
                    <hr>
                    <div class="row detail">
                            <div class="col-md-3">
                                <h3>عنوان المكتب</h3>
                            </div>
                            <div class="col-md-9">
                                <p>{{$lawyer[0] -> address}}</p>
                            </div>
                    </div>    
                    <hr>     
                </div>
            </div>
        </div>
        </div>       
        <!--end date-->
        <!--start footer-->
        @include('front.includes.footer')
          <!--end footer-->
          <!-- JavaScript Bundle with Popper -->
          <script src="{{asset('assets/javascript/jquery.min.js')}}"></script>
          <script src="{{asset('assets/javascript/bootstrap.bundle.min.js')}}"></script>
          <script src="{{asset('assets/lawyerDashboard/js/jquery.nicescroll.min.js')}}"></script>
          <script src="{{asset('assets/lawyerDashboard/dist/js/theme.min.js')}}"></script>
          <script src="{{asset('assets/javascript/js.js')}}"></script>
          <script>
        
              $(".scroll").niceScroll({
              cursorcolor:"#ddd",
              cursorwidth:"8px"
              });
        </script>
      </body>
  </html>