<header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                        </div>
						
                        <div class="top-menu d-flex align-items-center userDrops">
                             <div class="dropdown mr-10">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="/storage/photo/{{session('lawyerData')[0]['lawyerPhoto']}}" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{route('lawyers.getLawyerProfile')}}"><i class="ik ik-user dropdown-icon"></i> الملف الشخصى</a>
                                    <a class="dropdown-item" href="{{route('lawyers.changePassword')}}"><i class="ik ik-lock dropdown-icon"></i> تغيير كلمة السر</a>
                                    <a class="dropdown-item" href="{{route('lawyers.logOut')}}"><i class="ik ik-power dropdown-icon"></i> تسجيل خروج</a>
                                </div>
                            </div>
 
                             <div class="dropdown spDroplist">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="avatar" src="{{asset('assets/lawyerDashboard/img/egypt.png')}}" alt=""></a>
                            <div class="dropdown-menu dropdown-menu-left animated bounceInDown">
								<!--<a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> عربي<img src="img/saudi-arabia.png" alt=""></a>-->
								<a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> English<img src="{{asset('assets/lawyerDashboard/img/united-states.png')}}" alt=""></a>
							</div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>