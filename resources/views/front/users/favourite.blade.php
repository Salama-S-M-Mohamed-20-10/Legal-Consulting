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
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/clientSearch.css')}}">
    </head>
    <body>
        <!-- start NavBar-->
        @include('front.includes.navbar')
        <!--end NavBar-->

        <!--start حجز-->
        
        <div class="container">
            <div class="title">
                <h3>نتيجة البحث <span>{{$favourites -> count()}}</span> محامي</h3>
            </div>
            @foreach($favourites as $favourite)
            <div class="resultSearch shadow-lg p-3 mb-5 bg-white rounded">
            <!--{{$favourite}}-->
                <div class="row">
                @include('front.alerts.success')
                @include('front.alerts.errors')
                    <!-- start left colum (احجز)-->
                    <div class="col-lg-5">
                          <!-- Swiper -->
                          <div class="swiper-container reversion">
                            <div class="swiper-wrapper">
                              <!--<div class="swiper-slide">
                                <div class="row">
                                  <div class="col-md-12">
                                        <div class="day">
                                          <h4>satrday</h4>
                                        </div>
                                        
                                        <ul class="myList ">
                                          <li class="disabled"><a href="#">1 PM</a></li>
                                          <li class="disabled"><a href="#">1 PM</a></li>                                         
                                          <li><a href="#">1 PM</a></li> 
                                          <li><a href="#">1 PM</a></li>            
                                          <li><a href="#">1 PM</a></li>                                         
                                          <li><a href="#">1 PM</a></li>                                          
                                          <li><a href="#">1 PM</a></li>
                                          <li><a href="#">1 PM</a></li>
                                          <li><a href="#">1 PM</a></li>
                                          <li><a href="#">1 PM</a></li>
                                          <li><a href="#">1 PM</a></li>
                                        </ul>
                                        <button class="btn rev">احجز</button>
                                  </div>
                                </div>
                              </div>-->
                              <!--<div class="swiper-slide">
                                  <div class="row">
                                    <div class="col-md-12">
                                          <div class="day">
                                            <h4>satrday</h4>
                                          </div>
                                          <ul class="myList ">
                                            <h3>لا يوجد مواعيد هذا اليوم</h3>
                                          </ul>
                                          <button disabled class="btn rev">احجز</button>
                                    </div>
                                  </div>
                                </div>-->
                                
                            </div>
                            <!-- Add Pagination -->
                      
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                          </div>

                          <!-- Swiper JS -->
                    </div>
                    <!-- start rigt colum-lawyer info-->
                    <div class="col-lg-7">
                        <div class="row">

                            <div class="col-lg-8">
                              <div class="lawyerinfo">
                                  <h2><a href="{{route('users.deleteFavourite',$favourite -> lawyer -> id)}}">Delete Favourite Lawyer</a> <a class="cool-link" href="{{route('users.lawyerInfoSearch',$favourite -> lawyer -> id)}}">{{$favourite -> lawyer -> name}}</a><span>المحامي</span></h2>

                                  <div class="row">
                                    <div class="col-lg-10 col-md-11 col-sm-11">
                                      <h5>{{$favourite -> lawyer -> specialty}}</h5>
                                    </div>
                                    <div class="col-lg-2 col-md-1 col-sm-1">
                                      <i class="fas fa-balance-scale"></i>
                                    </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-lg-10 col-md-11 col-sm-11">
                                        <h5>Governorate: {{$favourite -> lawyer -> governorate}} Region: {{$favourite -> lawyer -> region}}</h5>
                                      </div>
                                      <div class="col-lg-2 col-md-1 col-sm-1">
                                        <i class="fas fa-map-marker-alt"></i>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-lg-10 col-md-11 col-sm-11">
                                        <h5>{{$favourite -> lawyer -> address}}</h5>
                                      </div>
                                      <div class="col-lg-2 col-md-1 col-sm-1">
                                        <i class="fas fa-building"></i>
                                      </div>
                                  </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 lawyerImg">
                                    <img style="width:180px;height:180px;" src="/storage/photo/{{$favourite -> lawyer -> lawyerPhoto}}"
                                    src="{{asset('assets/lawyerDashboard/img/user.jpg')}}" alt="gg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!--end sing-->
        <!--start footer-->
          @include('front.includes.footer')
          <!--end footer-->
          <!-- JavaScript Bundle with Popper -->
          <script src="{{asset('assets/javascript/jquery.min.js')}}"></script>
          <script src="{{asset('assets/javascript/bootstrap.bundle.min.js')}}"></script>
          <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
          <script src="{{asset('assets/lawyerDashboard/js/jquery.nicescroll.min.js')}}"></script>
          <script src="{{asset('assets/javascript/js.js')}}"></script>
          <script>
        
              $(".scroll").niceScroll({
              cursorcolor:"#ddd",
              cursorwidth:"8px"
              });
        </script>
      </body>
  </html>