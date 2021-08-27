<header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                        </div>
						
                        <div class="top-menu d-flex align-items-center userDrops">
                             <div class="dropdown mr-20">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="{{asset('assets/lawyerDashboard/img/user.png')}}" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{route('admins.profile')}}"><i class="ik ik-user dropdown-icon"></i> الملف الشخصى</a>
                                    <a class="dropdown-item" href="{{route('admins.changePw')}}"><i class="ik ik-lock dropdown-icon"></i> تغيير كلمة السر</a>
                                    <a class="dropdown-item" href="{{route('admins.logOut')}}"><i class="ik ik-power dropdown-icon"></i> تسجيل خروج</a>
                                </div>
                            </div>
 
                             <div class="dropdown spDroplist">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="avatar" src="{{asset('assets/lawyerDashboard/img/egypt.png')}}" alt=""></a>
                            <div class="dropdown-menu dropdown-menu-left animated bounceInDown">
								<!--<a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> عربي<img src="img/saudi-arabia.png" alt=""></a>-->
								<a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> English<img src="../lawyerDashboard/img/united-states.png" alt=""></a>
							</div>
                            </div>
							
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-bell"></i><span class="badge bg-danger">3</span></a>
                                <div class="dropdown-menu dropdown-menu-left notification-dropdown" aria-labelledby="notiDropdown">
                                    <h4 class="header">التنبيهات</h4>
                                    <div class="notifications-wrap">
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-users"></i> 
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">تم تسجيل محامي</span> 
                                                <span class="media-content">2021-10-04 - 8 AM ...</span>
                                            </span>
                                        </a>
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-check"></i> 
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">تم تسجيل مستخدم</span> 
                                                <span class="media-content">2021-10-04 - 8 AM ...</span>
                                            </span>
                                        </a>
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-users"></i> 
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">تم تسجيل محامي</span> 
                                                <span class="media-content">2021-10-04 - 8 AM ...</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="footer"><a href="notfication.html">عرض كل التنبيهات</a></div>
                                </div>
                            </div>
							
                        </div>
                    </div>
                </div>
            </header>