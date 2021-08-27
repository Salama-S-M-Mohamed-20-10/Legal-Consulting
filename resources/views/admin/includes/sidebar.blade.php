<div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="cpIndex.html">
                            <div class="logo-img">
                               <img src="{{asset('assets/lawyerDashboard/src/img/logo.png')}}" class="header-brand-img" alt="محاميك"> 
                            </div>
                            <span class="text">محاميك</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>

                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-item active">
                                    <a href="{{route('admins.index')}}"><i class="ik ik-home"></i><span>الرئيسية</span></a>
                                </div>

                                <div class="nav-item">
                                    <a href="{{route('admins.notifications')}}"><i class="ik ik-bell"></i><span>التنبيهات</span>
                                        <span class="badge bg-danger">3</span>
                                    </a>
                                    
                                </div>

                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-users"></i><span>عرض المستخدمين</span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('admins.listLawyers')}}" class="menu-item">المحامين</a>
                                        <a href="{{route('admins.listUsers')}}" class="menu-item">المستخدمين</a>
                                    </div>
                                </div>

                                <div class="nav-item">
                                    <a href="{{route('admins.userContacts')}}"><i class="ik ik-bell"></i><span>التساؤولات</span>
                                        <!--<span class="badge bg-danger">3</span>-->
                                    </a>
                                    
                                </div>
								
                            </nav>
                        </div>
                    </div>
 
					
                </div>