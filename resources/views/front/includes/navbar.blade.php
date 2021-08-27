<!-- start NavBar-->
<div class="navBar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container">
                      <a class="navbar-brand" href="{{route('dashboard')}}"><img src="{{asset('assets/lawyerDashboard/src/img/logo.png')}}"></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span class="two"></span>
                        <span></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
                        <ul class="navbar-nav">
                            @if(session('userData') != null)
                            <div class="dropdown">
                                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          {{session('userData')[0]['name']}}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <span><a class="dropdown-item" href="{{route('users.userInformation')}}">بيانتي <i class="far fa-address-book"></i> </a></span>
                                    <span><a class="dropdown-item" href="{{route('users.dateForUser',session('userData')[0]['id'])}}">المواعيد <i class="fas fa-calendar-alt"></i> </a></span>
                                    <span><a class="dropdown-item" href="{{route('users.favouriteLawyers',session('userData')[0]['id'])}}">المحاميين المفضلين <i class="fas fa-calendar-alt"></i> </a></span>
                                    <span><a class="dropdown-item" href="{{route('users.logOut')}}">خروج <i class="fas fa-sign-out-alt"></i> </a></span>
                                </ul>
                            </div>
                            <li class="nav-item">
                               <a class="nav-link" href="{{route('users.getContact')}}">تواصل معنا</a>
                            </li>
                            @endif
                          @if(session('userData') == null)
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('users.getLogin')}}">دخول</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('users.getRegister')}}">سجل الأن</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('users.getContact')}}">تواصل معنا</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('lawyers.getLogin')}}">هل انت محامي</a>
                          </li>
                          @endif
                        </ul>
                      </div>
                    </div>
                </nav>
        </div>
        <!-- end NavBar-->