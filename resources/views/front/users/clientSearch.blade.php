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
    <style>
            section {
                margin-bottom: -30px;
            }
            span[id^="heart"] { 
              padding: 10px; font-size: 40px !important; cursor: pointer; 
              display: inline-block; transform: rotate(-90deg) ;position: relative; top: -86px;left: -141px;margin-bottom: -65px;}
            span[id^="heart"]:hover,
            span[id^="heart"].liked:hover { 
              color: white; background: #FC427B; border-radius: 50%; }
            span[id^="heart"].liked { 
              color: #FC427B; background: white; border-radius: 50%; }
            p { padding: 2em }
        </style>
    <body>
        <!-- start NavBar-->
        @include('front.includes.navbar')
        <!--end NavBar-->

        <!--start حجز-->
        
        <div class="container">
            <div class="title">
                <h3>نتيجة البحث <span>{{$lawyers -> count()}}</span> محامي</h3>
                @include('front.alerts.success')
                @include('front.alerts.errors')
            </div>
            <!-- Start Loop Of Lawyers -->
            @foreach($lawyers as $lawyer)
            <div class="resultSearch shadow-lg p-3 mb-5 bg-white rounded">
                <div class="row">
                    <!-- start left colum (احجز)-->
                    <div class="col-lg-5">
                          <!-- Swiper -->
                          <div class="swiper-container reversion">
                            <div class="swiper-wrapper">
                            <!-- Start Loop Of Appointment -->
                              @foreach($lawyer -> appointments as $appointment)
                              @if($date <= $appointment -> date)
                              <div class="swiper-slide">
                                            <div class="row">
                                              <div class="col-md-12">
                                                    <div class="day">
                                                      <h4>satrday</h4>
                                                      <h4>satrday</h4>
                                                    </div>
                                                    <form class=" secLabel">
                                                        <div class="myList dist">
                                                            <input id="a" type="radio" name="os" value="Android" data-radio-index="0">
                                                            <label class="line" for="a">1PM</label>
                                                            <input id="b" type="radio" name="os" value="Linux" data-radio-index="1">
                                                            <label for="b">2PM</label>
                                                            <input id="a" type="radio" name="os" value="Android" data-radio-index="0">
                                                            <label class="line" for="a">1PM</label>
                                                            <input id="b" type="radio" name="os" value="Linux" data-radio-index="1">
                                                            <label for="b">2PM</label>
                                                            <input id="a" type="radio" name="os" value="Android" data-radio-index="0">
                                                            <label class="line" for="a">1PM</label>
                                                            <input id="b" type="radio" name="os" value="Linux" data-radio-index="1">
                                                            <label for="b">2PM</label>
                                                            <input id="a" type="radio" name="os" value="Android" data-radio-index="0">
                                                            <label class="line" for="a">1PM</label>
                                                            <input id="b" type="radio" name="os" value="Linux" data-radio-index="1">
                                                            <label for="b">2PM</label>
                                                          
                                                        </div>
                                                        <button id="chng" onsubmit="myFunction()" class="btn rev">احجز</button>
                                                      </form>
                                              </div>
                                            </div>
                                          </div>
                              <div class="swiper-slide">
                                <div class="row">
                                  <div class="col-md-12">
                                        <div class="day">
                                          @if($appointment -> date != $date)
                                          <h4>{{$appointment -> date}}</h4>
                                          @endif
                                          @if($appointment -> date == $date)
                                          <h4>Today</h4>
                                          @endif
                                          <h4>{{$appointment -> day}}</h4>
                                        </div>
                                        <!--{{$lawyer -> id }}-->
                                        <form class="secLabel" action="{{route('users.storeReservation',$lawyer -> id)}}" method="POST">
                                          
                                        @csrf
                                        <div class="myList">
                                        <input type="hidden" name="date" value="{{$appointment -> date}}">
                                          <!--<li class="disabled"><a href="#">1 PM</a></li>
                                          <li class="disabled"><a href="#">1 PM</a></li>-->

                                          @foreach($appointmentsWithTimes as $time)
                                              <!--{{$time -> lawyer_id}}-->
                                              @if($lawyer -> id == $time -> lawyer_id)
                                              <!--{{$time -> times}}-->
                                                    @foreach($time -> times as $timeOnly)
                                                    <!--{{$appointment -> id}}-->
                                                    @if($appointment -> id == $timeOnly -> appointment_id)
                                                    
                                                    <!--{{$timeOnly -> appointment_id}}-->
                                                       <!--<li>{{$timeOnly -> time}}</li>-->
                                                       <!--<li>{{$timeOnly -> appointment_id}}</li>-->
                                                       <div>
                                                          <input class="form-check-input" type="radio" name="timeForReservation" id="{{$timeOnly -> id}}" value="{{$timeOnly -> time}}" data-radio-index="{{$timeOnly -> id}}">
                                                          <label class="form-check-label" for="{{$timeOnly -> id}}">{{$timeOnly -> time}}</label>
                                                       </div>
                                                       <!--<option value="{{$timeOnly -> time}}">{{$timeOnly -> time}}</option>-->
                                                    @endif
                                                    @endforeach
                                              @endif
                                        @endforeach
                                        @if(session('userData') != null)
                                        <input type="hidden" name="user_id" value="{{session('userData')[0]['id']}}">
                                        <input type="hidden" name="username" value="{{session('userData')[0]['name']}}">
                                        @endif
                                        </div>
                                        @if(session('userData') != null)
                                        <button type="submit" class="btn rev">احجز</button>
                                        <!--<button id="chng" onsubmit="myFunction()" class="btn rev" style="transform: translate(-341px, 192px); position: fixed;">احجز</button></div>-->
                                        @endif
                                        @if(session('userData') == null)
                                        <div><a href="{{route('users.getLogin')}}" style="font-size:10px;color:red">You Should Login For Reservation</a></div>
                                        @endif
                                        </form>
                                  </div>
                                </div>
                              </div>
                              @endif
                              @endforeach
                              <!-- End Loop Of Appointment -->
                              @if($lawyer -> appointments -> count() == null)
                                 <div class="alert alert-danger text-center" style="height:100px">
                                 There Is Not Any Appointment For This Lawyer
                                 </div>
                              @endif
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
                                  <h2><a class="cool-link" href="{{route('users.lawyerInfoSearch',$lawyer -> id)}}">
                                  {{$lawyer -> name}}
                                </a><span>المحامي</span></h2>
                                @if(session('userData') != null)
                                <form action="{{route('users.storeFavourite',$lawyer -> id)}}" method="POST">
                                      @csrf
                                      <input type="hidden" name="user_id" value="{{session('userData')[0]['id']}}">
                                      <div class="favourite">
                                           <button type="submit" style="visibility: collapse;"><section><span style="visibility: visible;" id="heart-{{$lawyer -> id}}{{session('userData')[0]['id']}}">&lt;3</span></section></button>
                                      </div>
                                </form>
                                @endif
                                @if(session('userData') != null)
                                <!--<div class="favourit">
                                      
                                    <section>
                                      <span id="heart-{{$lawyer -> id}}{{session('userData')[0]['id']}}">&lt;3</span>
                                    </section>
                                  </div>-->
                                <!--<section>
                                      <span id="heart-{{$lawyer -> id}}{{session('userData')[0]['id']}}">&lt;3</span>
                                </section>-->
                                  @endif
                                
                                
                                <!--This Is Date Of Today {{$date}}-->
                                  <div style="margin-top:-50px" class="row">
                                    <div class="col-lg-10 col-md-11 col-sm-11">
                                      <h5>{{$lawyer -> specialty}}</h5>
                                    </div>
                                    <div class="col-lg-2 col-md-1 col-sm-1">
                                      <i class="fas fa-balance-scale"></i>
                                    </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-lg-10 col-md-11 col-sm-11">
                                        <h5>Governorate: {{$lawyer -> governorate}} Region: {{$lawyer -> region}}</h5>
                                      </div>
                                      <div class="col-lg-2 col-md-1 col-sm-1">
                                        <i class="fas fa-map-marker-alt"></i>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-lg-10 col-md-11 col-sm-11">
                                        <h5>{{$lawyer -> address}}</h5>
                                      </div>
                                      <div class="col-lg-2 col-md-1 col-sm-1">
                                        <i class="fas fa-building"></i>
                                      </div>
                                  </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 lawyerImg">
                                    <img style="width:180px;height:180px;" src="/storage/photo/{{$lawyer->lawyerPhoto}}"
                                    src="{{asset('assets/lawyerDashboard/img/user.jpg')}}" alt="gg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Loop Of Lawyers -->
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
            const hearts = document.querySelectorAll('[id^="heart"]');
            hearts.forEach( heart => {
              let liked = localStorage.getItem(heart.id);
              // first load
              if ( liked === null ) {
                // console.log('nothing in storage yet');
                localStorage.setItem(heart.id, 'false');
              } else {
                // console.log('already in storage');
                if (liked === 'true') heart.classList.add('liked');
              }
              heart.addEventListener('click', () => {
                // get up-to-date value
                liked = localStorage.getItem(heart.id);
                if ( liked === 'true' ) {
                  // console.log('unliking');
                  heart.classList.remove('liked');
                  localStorage.setItem(heart.id, 'false');
                } else {
                  // console.log('liking');
                  heart.classList.add('liked');
                  localStorage.setItem(heart.id, 'true');
                }
              });
            });
          </script>
          <script>
        
              $(".scroll").niceScroll({
              cursorcolor:"#ddd",
              cursorwidth:"8px"
              });
        </script>
      </body>
  </html>