<?php
/*public function ecryptAdminPassword(Request $request){
        Admin::where('id',1)->update([
           'password' => bcrypt($request -> passwordToBeEncrypted)
        ]);  
    }*/
namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Users\LoginRequest;
use App\Http\Requests\Admins\UpdateLawyerFromAdminRequest;
use App\Http\Requests\Admins\UpdateUserFromAdminRequest;
use App\Http\Requests\Admins\UpdateAdminProfileRequest;
use App\Http\Requests\Admins\UpdatePasswordRequest;
use App\User;
use App\Models\Lawyer;
use App\Models\Admin;
use App\Models\Contact;

class AdminController extends Controller
{
    public function getLogin(){
        return view('admin.adminDashboard.getLogin');
    }

    public function login(LoginRequest $request){
         //return $request;
        try{
            // he was making attempt only without Auth
            if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {//, $remember_me
                $adminInformation = Admin::where(['email' => $request -> email]) -> get();
    
                $request -> session() -> put('adminData',$adminInformation);
    
                //return $adminInformation;
                // notify()->success('تم الدخول بنجاح  ');
                return redirect() -> route('admins.index');
             } else{
             return redirect()->route('admins.getLogin')->with(['error' => 'هناك خطا بالبيانات']);
             }
            } catch(\Exception $ex){
            // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
             return redirect()->route('admins.getLogin')->with(['error' => 'هناك خطأ بالبيانات يرجي المحاولة مرة اخري']);
            }
    }

    public function logOut(){
        session() -> forget('adminData');
        return redirect() -> route('admins.getLogin');
    }

    public function index(){
        $lawyers = Lawyer::get();
        $users = User::get();
        return view('admin.adminDashboard.index',compact(['lawyers','users']));
    }

    public function listUsers(){
        $users = User::get();
        return view('admin.adminDashboard.listUsers',compact('users'));
    }

    public function listLawyers(){
        $lawyers = Lawyer::get();
        return view('admin.adminDashboard.listLawyers',compact('lawyers'));
    }

    public function changeStatus($id){
        try{
            $lawyer = Lawyer::find($id);
            if (!$lawyer)
                return redirect()->route('admins.listLawyers')->with(['error' => 'هذا المتجر غير موجود ']);

            $status = $lawyer -> active == 0 ? 1 : 0;

            Lawyer::where('id',$id) ->update(['active' => $status]);
            return redirect()->route('admins.listLawyers')->with(['success' => 'تم تغيير الحالة بنجاح']);
            //return $lawyerActive;
            //return $status;
            //return $status;
        }catch(\Exception $ex){
            return redirect()->route('admins.listLawyers')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function notifications(){
        return view('admin.adminDashboard.notifications');
    }

    public function profile(){
        return view('admin.adminDashboard.profile');
    }

    public function updateAdminProfile($id,UpdateAdminProfileRequest $request){
        //return $request;


        //return $request;
        $admin = Admin::find($id);
        //return User::where('id',$request -> id) -> get();
        try{
            Admin::where('id',$id) -> update([
                'name' => $request -> name,
                'email' => $request -> email,
            ]);

            session('adminData')[0]['name'] = $request -> name;
            session('adminData')[0]['email'] = $request -> email;
 
            return redirect()->route('admins.profile',$id)->with(['success' => 'تم الحفظ بنجاح']);

          }catch(\Exception $ex){
              return redirect()->route('admins.profile',$id)->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']); 
          }
        //return $request;
    }

    public function profileLawyer($id){
        $lawyer = Lawyer::find($id);
        return view('admin.adminDashboard.profileLawyer',compact('lawyer'));
    }

    public function updateProfileLawyer($id,UpdateLawyerFromAdminRequest $request){
        //return $request;
        $lawyer = Lawyer::find($id);
        //return User::where('id',$request -> id) -> get();
        try{
            Lawyer::where('id',$id) -> update([
                'name' => $request -> name,
                'email' => $request -> email,
                'phone' => $request -> phone,
                'active' => $request -> active
            ]);
            

            if($request->has('password')){
                Lawyer::where('id',$id)
                -> update([
                    'password' => bcrypt($request -> password),
                ]);
            }
            return redirect()->route('admins.profileLawyer',$id)->with(['success' => 'تم الحفظ بنجاح']);

          }catch(\Exception $ex){
              return redirect()->route('admins.profileLawyer',$id)->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']); 
          }
        //return $request;
    }

    public function deleteLawyer($id){
        try{
         Lawyer::where('id',$id)->delete();
         return redirect()->route('admins.listLawyers')->with(['success' => 'تم الحذف بنجاح']);
        }catch(\Exception $ex){
            return redirect()->route('admins.listLawyers')->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']); 
        }
        //$lawyer = Lawyer::find($id);
        //return $lawyer -> id;
    }

    public function profileUser($id){//UpdateLawyerFromAdminRequest $request
        $user = User::find($id);
        return view('admin.adminDashboard.profileUser',compact('user'));
    }

    public function updateProfileUser($id,UpdateUserFromAdminRequest $request){
        //return $request;
        $lawyer = Lawyer::find($id);
        //return User::where('id',$request -> id) -> get();
        try{
            User::where('id',$id) -> update([
                'name' => $request -> name,
                'email' => $request -> email,
                'phone' => $request -> phone,
            ]);
            

            if($request->has('password')){
                User::where('id',$id)
                -> update([
                    'password' => bcrypt($request -> password),
                ]);
            }
            return redirect()->route('admins.profileUser',$id)->with(['success' => 'تم الحفظ بنجاح']);

          }catch(\Exception $ex){
              return redirect()->route('admins.profileUser',$id)->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']); 
          }
    }

    public function deleteUser($id){
        try{
            User::where('id',$id)->delete();
            return redirect()->route('admins.listUsers')->with(['success' => 'تم الحذف بنجاح']);
           }catch(\Exception $ex){
               return redirect()->route('admins.listUsers')->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']); 
           }
           //$user = User::find($id);
           //return $user -> id;
    }

    public function changePw(){
        return view('admin.adminDashboard.changePw');
    }

    public function updatePassword($id,UpdatePasswordRequest $request){
         //return $request;
         $admin = Admin::where('id',$id)->get();
         return $admin;
    }

    public function delete(){
        return view('admin.adminDashboard.delete');
    }

    public function userContacts(){
        $contacts = Contact::get();
        return view('admin.adminDashboard.contacts',compact('contacts'));
    }

    public function deleteContacts($id){
        try{
            Contact::where('id',$id)->delete();
            return redirect()->route('admins.userContacts')->with(['success' => 'تم الحذف بنجاح']);
           }catch(\Exception $ex){
               return redirect()->route('admins.userContacts')->with(['error' => 'هناك خطأ ما يرجي المحاولة مرة أخري']); 
           }
    }
}
