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
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/dist/css/theme-en.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/dateForUser.css')}}">
        
    </head>
    <body>
        <!-- start NavBar-->
        @include('front.includes.navbar')
        <!--end NavBar-->

        <!--start date-->
        <div class="container">
          <div class="date">
            <div class="table-responsive text-center" dir="rtl">
            @include('front.alerts.success')
            @include('front.alerts.errors')
              @if($reservations -> count() != 0)
              <table id="advanced_table" class="table table-striped table-bordered table-hover mb-0">
                  <thead>
                      <tr>
                          <th>اسم المحامي</th>
                          <th>عنوان المكتب</th>
                          <th>تاريخ الحجز</th>
                          <th>وقت الحجز</th>
                          <th>الغاء المعاد</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($reservations as $reservation)                      
                      <tr>
                          <td>{{$reservation -> lawyer -> name}}</td>
                          <td>{{$reservation -> lawyer -> address}}</td>
                          <td>{{$reservation -> date}}</td>
                          <td class="text-center">{{$reservation -> time}}</td>

                          <td class="text-center">
                            <div class="action-btns">
                              
                              <a data-toggle="modal" data-target="#deleteModal" data-toggle="tooltip" data-placement="top" title="الغاء الموعد"  class="btn btn-icon btn-danger btn-add-Delete" href="{{route('users.deleteReservation',$reservation -> id)}}"><i class="fas fa-window-close f-16 mr-10"  data-toggle="tooltip" data-placement="top" title="الغاء الموعد"></i></a>
                            </div>
                          </td>
                      </tr>
                      @endforeach
                         

                  </tbody>
              </table>
              @endif
              @if($reservations -> count() == 0)
                 <h1>There Is Not Any Appointments</h1>
              @endif
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