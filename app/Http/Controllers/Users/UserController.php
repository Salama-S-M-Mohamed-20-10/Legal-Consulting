<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Users\UserRequest;
use App\Http\Requests\Users\LoginRequest;
use App\Http\Requests\Users\UpdateUserInformationRequest;
use App\Http\Requests\Users\UpdateUserPasswordRequest;
use App\Http\Requests\Users\UserContactRequest;
use App\User;
use App\Models\Lawyer;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Reservation;
use App\Models\Favourite;
use App\Models\Appointment;
use App\Models\Time;
use App\Models\Message;

class UserController extends Controller
{
    public function index(){
        return view('front.dashboard');
    }

    public function getLogin(){
        return view('front.users.signIn');
    }

    public function login(LoginRequest $request){
        //return $request;
        try{
        // he was making attempt only without Auth
        if (auth()->guard('web')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {//, $remember_me
            $userInformation = User::where(['email' => $request -> email]) -> get();

            $request -> session() -> put('userData',$userInformation);

            //return $userInformation;
            // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('dashboard');
         } else{
         return redirect()->route('users.getLogin')->with(['error' => 'هناك خطا بالبيانات']);
         }
        } catch(\Exception $ex){
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
         return redirect()->route('users.getLogin')->with(['error' => 'هناك خطأ بالبيانات يرجي المحاولة مرة اخري']);
        }
    }

    public function logOut(){
        session() -> forget('userData');
        return redirect() -> route('users.getLogin');
    }

    public function getRegister(){
        return view('front.users.signUp');
    }

    public function storeUser(UserRequest $request){
        try{
        User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'gender' => $request -> gender,
            'date' => $request -> date,
            'password' => $request -> password
        ]);
        return redirect()->route('users.getRegister')->with(['success' => 'تم الحفظ بنجاح']);
    }catch(\Exception $ex){
         return $ex;
         return redirect()->route('users.getRegister')->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']);
    }

    }

    public function getContact(){
        return view('front.users.contact');
    }

    public function userContact(UserContactRequest $request){
        //return $request;
        try{
           Contact::create([
               'name' => $request -> name,
               'email' => $request -> email,
               'phone' => $request -> phone,
               'comment' => $request -> comment
           ]);
           return redirect()->route('users.getContact')->with(['success' => 'تم الحفظ بنجاح']);
       }catch(\Exception $ex){
            return $ex;
            return redirect()->route('users.getContact')->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']);
       }
   }

    public function userInformation(){
        return view('front.users.userInformation');
    }

    public function updateUserInformation(UpdateUserInformationRequest $request){
          //return User::where('id',$request -> id) -> get();
          try{
          User::where('id',$request -> id) -> update([
              'name' => $request -> name,
              'email' => $request -> email,
              'phone' => $request -> phone,
              'date' => $request -> date
          ]);
          session('userData')[0]['name'] = $request -> name;
          session('userData')[0]['email'] = $request -> email;
          session('userData')[0]['phone'] = $request -> phone;
          session('userData')[0]['date'] = $request -> date;
          return redirect()->route('users.userInformation')->with(['success' => 'تم الحفظ بنجاح']);
        }catch(\Exception $ex){
            return redirect()->route('users.userInformation')->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']); 
        }
    }

    public function changeUserPassword(){
        return view('front.users.changeUserPassword');
    }

    public function updateUserPassword(UpdateUserPasswordRequest $request){
        try{
            if($request -> password == $request -> confirm_password){
            User::where('id',$request -> id) -> update([
                'password' => bcrypt($request -> password),
            ]);

            session('userData')[0]['password'] = $request -> password;

            return redirect()->route('users.changeUserPassword')->with(['success' => 'تم الحفظ بنجاح']);
            //return 'These Are The Same Value';
            
            }
            else{
                return redirect()->route('users.changeUserPassword')->with(['error' => 'لابد ان يحتوي الحقلين نفس القيمة']);
            }

          }catch(\Exception $ex){
              
              return redirect()->route('users.changeUserPassword')->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']);

          }
    }

    public function dateForUser($id){
        $reservations = Reservation::where('user_id',$id)->with('lawyer')->get();
        return view('front.users.dateForUser',compact(['reservations']));
    }

    public function storeReservation($id,Request $request){
           //return $request;
           try{
            Reservation::create([
                'date' => $request -> date,
                'time' => $request -> timeForReservation,
                'user_id' => $request -> user_id,
                'username' => $request -> username,
                'lawyer_id' => $id
            ]);
            Time::where('time',$request -> timeForReservation) -> where('date',$request -> date) -> where('lawyer_id',$id)->get();
            return redirect()->route('users.successfulReservation',[$id,$request -> date,$request -> timeForReservation])->with(['success' => 'تم الحجز بنجاح']);
            //return $time;
        }catch(\Exception $ex){
             return $ex;
             return redirect()->back()->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']);
        }
    }

    public function successfulReservation($lawyer_id,$dateOfReservation,$timeForReservation){
        $lawyer = Lawyer::where('id',$lawyer_id)->get();
        return view('front.users.SuccessfulReserv',compact(['lawyer','dateOfReservation','timeForReservation']));
    }

    public function deleteReservation($id){
        try{
            $reservation = Reservation::find($id);
            $user_id = $reservation -> user_id;
            Reservation::where('id',$id)->delete();
            return redirect()->route('users.dateForUser',$user_id)->with(['success' => 'تم الحذف بنجاح']);
           }catch(\Exception $ex){
               return redirect()->route('users.dateForUser',$user_id)->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']);
           }
    }

    public function clientSearch(Request $request){
        // By Name And Specialty And Governorate And Region
        if($request -> name != null && $request -> specialty != null 
        && $request -> governorate != null && $request -> region != null){
            $lawyers = Lawyer::where('name',$request -> name) -> where('specialty',$request -> specialty) 
            -> where('governorate',$request -> governorate) -> where('region',$request -> region) 
            ->with('appointments') ->where('active',1) -> get();
            $appointmentsWithTimes = Appointment::with('times')->get();
            $date = date('Y-m-d');
            return view('front.users.clientSearch',compact(['lawyers','appointmentsWithTimes','date']));
        }
        // By Name And Specialty And Governorate
        else if($request -> name != null && $request -> specialty != null && $request -> governorate != null){
            $lawyers = Lawyer::where('name',$request -> name) -> where('specialty',$request -> specialty) 
            -> where('governorate',$request -> governorate) ->with('appointments') -> where('active',1) -> get();
            $appointmentsWithTimes = Appointment::with('times')->get();
            $date = date('Y-m-d');
            return view('front.users.clientSearch',compact(['lawyers','appointmentsWithTimes','date']));
        }
        // By Name And Governorate And Region
        else if($request -> name != null && $request -> specialty == null 
        && $request -> governorate != null && $request -> region != null){
            $lawyers = Lawyer::where('name',$request -> name) -> where('governorate',$request -> governorate) 
            -> where('region',$request -> region) ->with('appointments') ->where('active',1) -> get();
            $appointmentsWithTimes = Appointment::with('times')->get();
            $date = date('Y-m-d');
            return view('front.users.clientSearch',compact(['lawyers','appointmentsWithTimes','date']));
        }
        // By Specialty And Governorate And Region
        else if($request -> name == null && $request -> specialty != null 
        && $request -> governorate != null && $request -> region != null){
            $lawyers = Lawyer::where('specialty',$request -> specialty) 
            -> where('governorate',$request -> governorate) -> where('region',$request -> region) 
            ->with('appointments') ->where('active',1) -> get();
            $appointmentsWithTimes = Appointment::with('times')->get();
            $date = date('Y-m-d');
            return view('front.users.clientSearch',compact(['lawyers','appointmentsWithTimes','date']));
        }
        // By Name And Specialty
        else if($request -> name != null && $request -> specialty != null && $request -> governorate == null){
            $lawyers = Lawyer::where('name',$request -> name) 
            -> where('specialty',$request -> specialty) ->with('appointments') ->where('active',1) -> get();
            $appointmentsWithTimes = Appointment::with('times')->get();
            $date = date('Y-m-d');
            return view('front.users.clientSearch',compact(['lawyers','appointmentsWithTimes','date']));
        }
        // By Name And Governorate
        else if($request -> name != null && $request -> specialty == null && $request -> governorate != null){
            $lawyers = Lawyer::where('name',$request -> name) 
            -> where('governorate',$request -> governorate) ->with('appointments') ->where('active',1) -> get();
            $appointmentsWithTimes = Appointment::with('times')->get();
            $date = date('Y-m-d');
            return view('front.users.clientSearch',compact(['lawyers','appointmentsWithTimes','date']));
        }
        //By Specialty And Governorate
        else if($request -> name == null && $request -> specialty != null && $request -> governorate != null){
            $lawyers = Lawyer::where('specialty',$request -> specialty) 
            -> where('governorate',$request -> governorate) ->with('appointments') ->where('active',1) -> get();
            $appointmentsWithTimes = Appointment::with('times')->get();
            $date = date('Y-m-d');
            return view('front.users.clientSearch',compact(['lawyers','appointmentsWithTimes','date']));
        }
        // By Governorate And Region->where('active',1) 
        else if($request -> name == null && $request -> specialty == null 
        && $request -> governorate != null && $request -> region != null){
            $lawyers = Lawyer::where('governorate',$request -> governorate)
            -> where('region',$request -> region) ->with('appointments') -> where('active',1) -> get();
            $appointmentsWithTimes = Appointment::with('times')->get();
            $date = date('Y-m-d');
            return view('front.users.clientSearch',compact(['lawyers','appointmentsWithTimes','date']));
        }
        // By Name
        else if($request -> name != null && $request -> specialty == null && $request -> governorate == null){
            $lawyers = Lawyer::where('name',$request -> name) ->with('appointments') ->where('active',1) -> get();
            $appointmentsWithTimes = Appointment::with('times')->get();
            $date = date('Y-m-d');
            return view('front.users.clientSearch',compact(['lawyers','appointmentsWithTimes','date']));
        }
        // By Specialty
        else if($request -> name == null && $request -> specialty != null && $request -> governorate == null){
            $lawyers = Lawyer::where('specialty',$request -> specialty) ->with('appointments') 
            ->where('active',1) -> get();
            $appointmentsWithTimes = Appointment::with('times')->get();
            $date = date('Y-m-d');
            return view('front.users.clientSearch',compact(['lawyers','appointmentsWithTimes','date']));
        }
        // By Governorate
        else if($request -> name == null && $request -> specialty == null && $request -> governorate != null){
            $lawyers = Lawyer::where('governorate',$request -> governorate) ->with('appointments') ->where('active',1) -> get();
            $appointmentsWithTimes = Appointment::with('times')->get();
            $date = date('Y-m-d');
            return view('front.users.clientSearch',compact(['lawyers','appointmentsWithTimes','date']));
        }
        else{
            $lawyers = Lawyer::with('appointments')->where('active',1)->get();
            //$times = Time::get();
            $appointmentsWithTimes = Appointment::with('times')->get();
            //return $appointmentsWithTimes;
            //return $lawyers;
            //$mytime = Carbon::now();
            //$date = Carbon::now()->format('d-m-Y');
            $date = date('Y-m-d');
            return view('front.users.clientSearch',compact(['lawyers','appointmentsWithTimes','date']));
            /*$reservations = Reservation::where('user_id',$id)->get();
        //return $reservations;
        $getLawyerId = Reservation::where('user_id',$id)->get('lawyer_id');
        $lawyer_id = $getLawyerId[0] -> lawyer_id;
        $lawyer = Lawyer::where('id',$lawyer_id)->get();
        return view('front.users.dateForUser',compact(['reservations','lawyer']));*/
        //return $reservations;
        //return $reservation;
        }
    }

    public function lawyerInfoSearch($id){//,$user_id
        //$lawyer = Lawyer::where('id',$id) -> get();
        $lawyer = Lawyer::with('appointments')->with('lawyerTimeAvailables')->find($id);
        $appointmentsWithTimes = Appointment::with('times')->get();
        $date = date('Y-m-d');
        $messages = Message::where('lawyer_id',$id)->get();//where('user_id',$user_id)->
        //return $lawyer;
        $comments = Comment::where('lawyer_id',$id)->get();
        return view('front.users.lawyerInfoSearch',compact(['lawyer','appointmentsWithTimes','date','messages','comments']));
    }

    public function specialization(){
        return view('front.users.specialization');
    }

    public function lawyerWithSpecialization($specializeName){
        $lawyers = Lawyer::where('specialty',$specializeName) -> where('active',1) -> get();
        $appointmentsWithTimes = Appointment::with('times')->get();
        $date = date('Y-m-d');
        return view('front.users.clientSearch',compact(['lawyers','appointmentsWithTimes','date']));
    }

    public function writeComment(Request $request){
        //return session('userData')[0]['id'];
        try{
            Comment::create([
                'comment' => $request -> comment,
                'user_id' =>  session('userData')[0]['id'],
                'username' => session('userData')[0]['name'],
                'lawyer_id' => $request -> lawyer_id
            ]);
            return redirect()->route('users.lawyerInfoSearch',$request -> lawyer_id)->with(['success' => 'تم الحفظ بنجاح']);
        }catch(\Exception $ex){
             return $ex;
             return redirect()->route('users.lawyerInfoSearch',$request -> lawyer_id)->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']);
        }
    }

    public function favouriteLawyers($id){
        $favourites = Favourite::where('user_id',$id)->with('lawyer')->get();
        //$lawyer = Lawyer::with('favourites')->with('appointments')->find($id);
        $appointmentsWithTimes = Appointment::with('times')->get();
        $date = date('Y-m-d');
        //return $favourites;
        return view('front.users.favourite',compact(['favourites','appointmentsWithTimes','date']));


        $lawyer = Lawyer::with('appointments')->with('lawyerTimeAvailables')->find($id);
        $appointmentsWithTimes = Appointment::with('times')->get();
        $date = date('Y-m-d');
        //return $lawyer;
        $comments = Comment::where('lawyer_id',$id)->get();
        return view('front.users.lawyerInfoSearch',compact(['lawyer','appointmentsWithTimes','date','comments']));
    }

    public function storeFavourite($id,Request $request){
        //return $request;
        try{
            Favourite::create([
                'user_id' => $request -> user_id,
                'lawyer_id' => $id
            ]);
            return redirect()->back()
            ->with(['success' => 'تم اضافة المحامي الي المحاميين المفضلين بنجاح']);
        }catch(\Exception $ex){
             return $ex;
             return redirect()->route('users.clientSearch')
             ->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']);
        }
        //return $request -> user_id;
    }

    public function deleteFavourite($id){
        try{
            $lawyer = Lawyer::find($id);
            //return $reservation;
            //$user_id = $reservation -> user_id;
            Favourite::where('lawyer_id',$id)->delete();
            return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
           }catch(\Exception $ex){
               return redirect()->back()->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']);
           }
    }

    /*public function appointmentsFromLawyer(){
         $appointments = Appointment::get();
         //return $appointments;
         return view('front.users.clientSearch',compact('appointments'));
         //return view('front.users.favourite',compact('favourites'));
    }*/

    public function storeMessageFromUserInChat(Request $request){
         //return $request;
         try{
            Message::create([
                'user_id' => $request -> user_id,
                'lawyer_id' => $request -> lawyer_id,
                'user' => $request -> user,
                'lawyer' => $request -> lawyer,
                'message' => $request -> message
            ]);
            return redirect()->back();//->with(['success' => 'تم الحفظ بنجاح'])
        }catch(\Exception $ex){
             return $ex;
             return redirect()->route('users.lawyerInfoSearch',$request -> lawyer_id)->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']);
        }
    }
    
}
