<?php
//if($request->photo != null){
                /*Lawyer::where('id',$id)
                -> update([
                    'lawyerPhoto' => $request -> photo
                ]);
                session('lawyerData')[0]['lawyerPhoto'] = $request -> photo;*/
                /*$fileName = "photo-" . time() . '.' . request()->photo->getClientOriginalExtension();
                $request->photo->storeAs('photo', $fileName);
                Lawyer::where('id',$id)
                -> update([
                    'lawyerPhoto' => $fileName
                ]);
                session('lawyerData')[0]['lawyerPhoto'] = $fileName;
            } in update lawyer profile*/


            /*public function login(Request $request){
        //return $request;
        try{
        // he was making attempt only without Auth
        if (auth()->guard('lawyer')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {//, $remember_me
            $lawyerInformation = Lawyer::where(['email' => $request -> email]) -> get();

            /*$request -> session() -> put('lawyerData',$userInformation);

            //return $userInformation;
            // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('lawyers.lawyerDashboardIndex');*/
            //return $lawyerInformation;
         /*} else{
         return redirect()->route('lawyers.getLogin')->with(['error' => 'هناك خطا بالبيانات']);
         }
        } catch(\Exception $ex){
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
         return redirect()->route('lawyers.getLogin')->with(['error' => 'هناك خطأ بالبيانات يرجي المحاولة مرة اخري']);
        }
    }*/

    /*public function logOut(){
        session() -> forget('userData');
        return redirect() -> route('users.getLogin');
    }*/
    /*
    public function getRegister(){
        return view('front.lawyers.signUpLawyer');
    }
    */
namespace App\Http\Controllers\Lawyers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use App\Http\Requests\Lawyers\LoginRequest;
use App\Http\Requests\Users\LoginRequest;
use App\Http\Requests\Lawyers\UpdateLawyerProfileRequest;
use App\Models\Lawyer;
use App\Models\Reservation;
use App\User;
use App\Models\Lawyertimeavailable;
use App\Models\Message;
use PDF;

class LawyerController extends Controller
{
    public function getLogin(){
        return view('front.lawyers.signInLawyer');
    }

    public function login(LoginRequest $request){
        //return $request;
        try{
        // he was making attempt only without Auth
        if (auth()->guard('lawyer')->attempt(['email' => $request->input("email"), 
        'password' => $request->input("password")])) {
            $lawyerInformation = Lawyer::where(['email' => $request -> email]) -> get();
            //return $lawyerInformation;

            $request -> session() -> put('lawyerData',$lawyerInformation);

            // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('lawyers.lawyerDashboardIndex');
         } else{
         return redirect()->route('lawyers.getLogin')->with(['error' => 'هناك خطا بالبيانات']);
         }
        } catch(\Exception $ex){
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
         return redirect()->route('lawyers.getLogin')
         ->with(['error' => 'هناك خطأ بالبيانات يرجي المحاولة مرة اخري']);
        }
    }

    public function logOut(){
        session() -> forget('lawyerData');
        return redirect() -> route('lawyers.getLogin');
    }

    public function getLawyerProfile(){
        return view('front.lawyerDashboard.profile');
    }

    public function updateLawyerProfile($id,UpdateLawyerProfileRequest $request){
        //return $request;
        $lawyer = Lawyer::find($id);
        //return User::where('id',$request -> id) -> get();
        try{
            Lawyer::where('id',$id) -> update([
                'firstName' => $request -> firstName,
                'lastName' => $request -> lastName,
                'name' => $request -> firstName . ' ' . $request -> lastName,
                'email' => $request -> email,
                'phone' => $request -> phone,
            ]);

            // I Will See The Photo With Internet
            if($request->photo != null) {
                $fileName = "photo-" . time() . '.' . request()->photo->getClientOriginalExtension();
                //return $fileName;
                $request->photo->storeAs('photo', $fileName);
                //$request -> fileName;
                Lawyer::where('id',$id)
                -> update([
                    'lawyerPhoto' => $fileName
                ]);
                session('lawyerData')[0]['lawyerPhoto'] = $fileName;
            }

            session('lawyerData')[0]['firstName'] = $request -> firstName;
            session('lawyerData')[0]['lastName'] = $request -> lastName;
            session('lawyerData')[0]['email'] = $request -> email;
            session('lawyerData')[0]['phone'] = $request -> phone;

            return redirect()->route('lawyers.getLawyerProfile')->with(['success' => 'تم الحفظ بنجاح']);

          }catch(\Exception $ex){
              return $ex;
              return redirect()->route('lawyers.getLawyerProfile')->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']); 
          }
    }
    //return $reservation[0];
        //$user = User::where('id',$id)->get();
        //$getLawyerId = Reservation::where()
        //return $user;

    public function booking($id){
        $reservations = Reservation::where('lawyer_id',$id)->get();
        $lawyerTimeAvailables = Lawyertimeavailable::where('lawyer_id',$id)->get();
        return view('front.lawyerDashboard.booking',compact(['reservations','lawyerTimeAvailables']));
    }

    public function reservationThatInToday($id){
        $date = date('Y-m-d');
        $reservations = Reservation::where('lawyer_id',$id)->where('date',$date)->get();
        return view('front.lawyerDashboard.reservationThatInToday',compact('reservations'));
    }

    public function generatePDF()
    {
        //$data = ['title' => 'Welcome to ItSolutionStuff.com'];
        $pdf = PDF::loadView('front.lawyerDashboard.reservationThatInToday');
  
        return $pdf->download('lawyer-reservation-today.pdf');
    }

    public function deleteReservation($id){
        try{
            $reservation = Reservation::find($id);
            $lawyer_id = $reservation -> lawyer_id;
            Reservation::where('id',$id)->delete();
            return redirect()->route('lawyers.booking',$lawyer_id)->with(['success' => 'تم الحذف بنجاح']);
           }catch(\Exception $ex){
               return redirect()->route('lawyers.booking',$lawyer_id)->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']); 
           }
    }

    public function getChat($lawyer_id){
        $users = User::with('messages')->get();
        //return $users;
        //$messages=Message::where('lawyer_id',$lawyer_id)->get();
        return view('front.lawyerDashboard.chat',compact('users'));
    }

    public function selectUserForChat($user_id,$lawyer_id){
        $users = User::get();
        $userOnly = User::where('id',$user_id)->get();
        $messages = Message::where('user_id',$user_id)->where('lawyer_id',$lawyer_id) -> get();
        //return $messages;
        return view('front.lawyerDashboard.selectUserForChat',compact(['userOnly','users','messages']));
    }

    public function storeMessageFromLawyerToUserInChat(Request $request){
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
             return redirect()->route('lawyers.getChat',$request -> lawyer_id)->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']);
        }
    }

    public function lawyerDashboardIndex(){
        return view('front.lawyerDashboard.index');
    }

    public function clientInformation($id){
        $reservation = Reservation::where('id',$id)->get();
        $lawyer_id = $reservation[0] -> lawyer_id;
        //return $lawyer_id;
        $user_id = $reservation[0] -> user_id;
        //$reservationWithFilter = Reservation::where('user_id',$user_id)->where('lawyer_id',$lawyer_id)->get();
        $user = User::where('id',$user_id)->get();
        //return $reservationWithFilter;
        return view('front.lawyerDashboard.clientInformation',compact(['reservation','user']));
    }

    public function changePassword(){
        return view('front.lawyerDashboard.changePw');
    }

    public function storeLawyerTimeAvailable($id,Request $request){
          //return $request;
          try{
            Lawyertimeavailable::create([
                'date' => $request -> date,
                'from' => $request -> startTime,
                'to' => $request -> endTime,
                'lawyer_id' => $id,
            ]);
            return redirect()->route('lawyers.lawyerDashboardIndex')->with(['success' => 'تم الحفظ بنجاح']);
        }catch(\Exception $ex){
             return $ex;
             return redirect()->route('lawyers.lawyerDashboardIndex')->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']);
        }
    }

    public function deleteAppointmentFromLawyerTimeAvailable($id){
        try{
            //$reservation = Reservation::find($id);
            //$lawyer_id = $reservation -> lawyer_id;
            Lawyertimeavailable::where('id',$id)->delete();
            return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
           }catch(\Exception $ex){
               return redirect()->back()->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']); 
           }
    }

    
}
