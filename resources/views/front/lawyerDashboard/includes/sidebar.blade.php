<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="index.html">
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
                    <a href="{{route('lawyers.lawyerDashboardIndex')}}"><i class="fas fa-calendar-alt"></i><span>جدول المواعيد</span></a>
                </div>
                <div class="nav-item">
                    <a href="{{route('lawyers.booking',session('lawyerData')[0]['id'])}}"><i class="fas fa-calendar-check"></i><span>الحجوزات</span></a>
                </div>
                <div class="nav-item">
                    <a href="{{route('lawyers.getChat',session('lawyerData')[0]['id'])}}"><i class="ik ik-message-circle"></i><span>غرفة الرسائل</span><span
                            class="badge bg-danger">+99</span></a>
                </div>

            </nav>
        </div>
    </div>
</div>