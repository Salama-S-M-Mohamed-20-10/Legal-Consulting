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

        <!-- for chat -->
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/chatPlugin/css/app.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/clientSearch.css')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- start NavBar-->
        @include('front.includes.navbar')
        <!--end NavBar-->

        <!--start sing-->
        
        <div class="container">
            <div class="resultSearch shadow-lg p-3 mb-5 bg-white rounded">
                <div class="row">
                @include('front.alerts.success')
                @include('front.alerts.errors')
                    <!-- start left colum (احجز)-->
                    <div class="col-lg-5">
                          <!-- Swiper -->
                          
                          <div class="swiper-container reversion">
                            <div class="swiper-wrapper">
                            @foreach($lawyer -> appointments as $appointment)
                            @if($date <= $appointment -> date)
                              <div class="swiper-slide ">
                                <div class="row">
                                  <div class="col-md-12">
                                        <div class="day">
                                        @if($appointment -> date != $date)
                                          <h4>{{$appointment -> date}}</h4>
                                          @endif
                                          @if($appointment -> date == $date)
                                          <h4>Today</h4>
                                          @endif
                                        </div>
                                        <form class="myList secLabel" action="{{route('users.storeReservation',$lawyer -> id)}}" method="POST">
                                        @csrf
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
                                                          <input class="form-check-input" type="radio" name="timeForReservation" id="{{$timeOnly -> id}}" value="{{$timeOnly -> time}}">
                                                          <label class="form-check-label" for="{{$timeOnly -> id}}">{{$timeOnly -> time}}</label>
                                                       </div>
                                                    @endif
                                                    @endforeach
                                              @endif
                                            @endforeach
                                            @if(session('userData') != null)
                                                <input type="hidden" name="user_id" value="{{session('userData')[0]['id']}}">
                                                <input type="hidden" name="username" value="{{session('userData')[0]['name']}}">
                                            @endif
                                            @if(session('userData') != null)
                                            <button type="submit" class="btn rev">احجز</button>
                                            @endif
                                            @if(session('userData') == null)
                                            <a href="{{route('users.getLogin')}}" style="font-size:10px;color:red">You Should Login For Reservation</a>
                                            @endif
                                            </form>
                                  </div>
                                </div>
                              </div>
                              @endif
                              @endforeach
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
                                    <h2><a class="cool-link" href=""> {{ $lawyer -> name }} </a><span>المحامي</span></h2>
  
                                    <div class="row">
                                      <div class="col-lg-10 col-md-11 col-sm-11">
                                        <h5>{{ $lawyer -> specialty }}</h5>
                                      </div>
                                      <div class="col-lg-2 col-md-1 col-sm-1">
                                        <i class="fas fa-balance-scale"></i>
                                      </div>
                                    </div>
  
                                    <div class="row">
                                        <div class="col-lg-10 col-md-11 col-sm-11">
                                          <h5>Governorate: {{ $lawyer -> governorate }} Region: {{ $lawyer -> region }}</h5>
                                        </div>
                                        <div class="col-lg-2 col-md-1 col-sm-1">
                                          <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                    </div>
  
                                    <div class="row">
                                        <div class="col-lg-10 col-md-11 col-sm-11">
                                          <h5>{{ $lawyer -> address }}</h5>
                                        </div>
                                        <div class="col-lg-2 col-md-1 col-sm-1">
                                          <i class="fas fa-building"></i>
                                        </div>
                                    </div>
  
                                  </div>
                              </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 lawyerImg">
                                    <img style="width:180px;height:180px;" src="/storage/photo/{{$lawyer->lawyerPhoto}}" alt="gg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                            <div class="col-lg-5">
                                      









                        <div class="swiper-container reversion">
                          <div class="swiper-wrapper">
                          @foreach($lawyer -> lawyerTimeAvailables as $timeAvailable)
                          @if($date <= $timeAvailable -> date)
                            <div class="swiper-slide ">
                              <div class="row">
                                <div class="col-md-12">
                                      <div class="day">
                                          @if($timeAvailable -> date != $date)
                                            <h4>{{$timeAvailable -> date}}</h4>
                                            @endif
                                            @if($timeAvailable -> date == $date)
                                            <h4>Today</h4>
                                            @endif
                                      </div>
                                      <form class="myList secLabel">
                                                    <div class="av">
                                                          <label for="">{{$timeAvailable -> from}}</label>
                                                          <label for="">{{$timeAvailable -> to}}</label>
                                                    </div>
                                                  
                                    
                                      </form>
                                      <!--<ul class="myList">
                                       
                                        <li><a href="#">{{$timeAvailable -> from}}</a></li> 
                                        <li><a href="#">.</a></li>            
                                        <li><a href="#">.</a></li>                                         
                                        <li><a href="#">{{$timeAvailable -> to}}</a></li>                                          
                                      </ul>-->
                                
                                      
                                </div>
                              </div>
                            </div>
                            @endif
                            @endforeach
                            <!--<div class="swiper-slide">
                                <div class="row">
                                  <div class="col-md-12">
                                        <div class="day">
                                          <h4>satrday</h4>
                                        </div>
                                        <ul class="myList ">
                                          <h3>لا يوجد مواعيد هذا اليوم</h3>
                                        </ul>
                                        
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

                            <div class="col-md-7 col-sm-12 white">
                                <div class="chat">
                                        <h2> 
                                            <a>
                                                    <figure class="avatar">
                                                        <span class="avatar-badge online"></span>
                                                    </figure>
                                            </a>
                                                يمكنك التواصل اونلاين مع مستشارك
                                        </h2>

                                    <div class="">
                                      @if(session('userData') != null)
                                        <div class="card-body  chat-widget p-3 scroll">
                                            <div class="w-body w-scroll">
                                                <ul class="list-unstyled">
                                                    <!-- Chat by us. Use the class "by-me". -->
                                                    @foreach($messages as $message)
                                                    @if($message -> user == 'fromUser')
                                                    
                                                    @if($message -> user_id == session('userData')[0]['id'])
                                                    <li class="by-me">
                                                        <!-- Use the class "float-left" in avatar -->
                                                        <div class="avatar float-left">
                                                            <!-- Online or offline -->
                                                            <b class="c-idle"></b>
                                                            <img src="{{asset('assets/lawyerDashboard/img/user.jpg')}}" alt="" class="img-responsive">
                                                            <!-- Name -->
                                                            <span>Ashok</span>
                                                        </div>
                            
                                                        <div class="chat-content">
                                                            <!-- In meta area, first include "name" and then "time" -->
                                                            <div class="chat-meta">Sent
                                                                <span class="float-right">{{$message -> created_at}}</span>
                                                            </div>
                                                            {{$message -> message}}
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </li>
                                                    @endif
                                                    @endif
                                                    
                                                    @if($message -> lawyer == 'fromLawyer')
                                                    @if($message -> user_id == session('userData')[0]['id'])
                                                    <!-- Chat by other. Use the class "by-other". -->
                                                    <li class="by-other">
                                                        <!-- Use the class "float-right" in avatar -->
                                                        <div class="avatar float-right">
                                                            <!-- Online or offline -->
                                                            <b class="c-off"></b>
                                                            <img src="/storage/photo/{{$lawyer->lawyerPhoto}}" alt="" class="img-responsive">
                                                            <!-- Name -->
                                                            <span>Ravi</span>
                                                        </div>
                            
                                                        <div class="chat-content">
                                                            <!-- In the chat meta, first include "time" then "name" -->
                                                            <div class="chat-meta">{{$message -> created_at}}
                                                                <span class="float-right">Received</span>
                                                            </div>
                                                            {{$message -> message}}
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </li>
                                                    @endif
                                                    @endif
                                                    @endforeach
                            
                                                </ul>
                                            </div>
                                        </div>
                                        @endif
                                        @if(session('userData') != null)
                                        <div class="card-footer bg-light">
                                            <!-- Chat button -->
                                            <form action="{{route('users.storeMessageFromUserInChat')}}" method="POST">
                                                @csrf
                                                <div class="input-group">
                                                    <input type="hidden" name="user_id" value="{{session('userData')[0]['id']}}">
                                                    <input type="hidden" name="lawyer_id" value="{{$lawyer -> id}}">
                                                    <input type="hidden" name="user" value="fromUser">
                                                    <input type="hidden" name="lawyer" value="toLawyer">
                                                    <button class="btn btn-outline-secondary b-0 mr-2"><i class="icon-image"></i></button>
                                                    <button class="btn btn-outline-secondary b-0 mr-2"><i class="icon-face-glasses"></i></button>
                                                    <input type="text" name="message" placeholder="Type Your Message" class="form-control">
                                                    <span class="input-group-btn ml-2">
                                                        <button type="submit" class="btn btn-primary">Send</button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                        @endif
                                        @if(session('userData') == null)
                                           <div class="alert alert-danger">You Should Login To Be Able For Making Chat With The Lawyer</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- start comment section -->       
                </div>   
                
            </div>

        </div>
        <!--end sing-->
        <!-- start comments community-->
        <div class="container">
            <div class="resultSearch shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card no-b my-3 shadow2">
                            <div class="card-header white p-3 d-flex justify-content-between ">
                                <h4 style="margin:auto">التعليقات</h4>
                            </div>
                    <!-- **************** Chat Widget Start **************** -->
                    <div class="col-md-12">
                            <div class="card my-3 no-b r-5">
                         
                                <div style="height:auto;" class="card-body chat-widget  p-3 r-5 scroll">
                                    <ul class="list-unstyled comment">
                                        <!-- Chat by other. Use the class "by-other". -->
                                        @if($comments -> count() == 0)
                                            <h1 style="color:red">There Is Not Any Comments To Be Shown</h1>
                                            <hr>
                                        @endif
                                        @foreach($comments as $comment)
                                        <li class="by-other">
                                                <!-- Use the class "float-right" in avatar -->
                                                <div class="avatar float-right">
                                                    <b class="c-off"></b>
                                                    <img src="{{asset('assets/images/user.png')}}" alt="" class="img-responsive">
                                                    <span class="avatar-badge has-indicator offline"></span>
                                                </div>
                                                <div class="chat-content">
                                                    <!-- In the chat meta, first include "time" then "name" -->
                                                    <div class="chat-meta">{{$comment -> created_at}}
                                                        <span class="float-right ml-3">{{$comment->username}}</span>
                                                    </div>
                                                    {{$comment->comment}}
                                                </div>
                                        </li>
                                        @endforeach
                                        
                                        
                                       

                                                
                                    </ul>
                                </div>
                                @if(session('userData') != null)
                                <div class="card-footer white">
                                    <!-- Chat button -->
                                    <form action="{{route('users.writeComment')}}" method="GET">
                                        <div class="input-group">
                                            <input name="comment" class="form-control s-12 bg-light r-30 mr-3"
                                                   placeholder="Type your comment..." type="text" required>
                                            <input name="lawyer_id" class="form-control s-12 bg-light r-30 mr-3"
                                            type="hidden" value="{{$lawyer -> id}}">
                                            <span class="input-group-btn">
                                                            <button type="submit" class="btn-fab btn-danger p-0 s-14"><i
                                                                    class="icon-subdirectory_arrow_left"></i></button>
                                                        </span>
                                        </div>
                                    </form>
                                </div>
                                @endif
                                @if(session('userData') == null)
                                   <h2>You Should Login To Be Able To Write Comment</h2>
                                @endif
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- start comments community-->
        <!--start footer-->
          @include('front.includes.footer')
          <!--start footer-->
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