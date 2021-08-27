<?php
//return view('register.step1',compact('products'));
namespace App\Http\Controllers\Lawyers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{   
    public function index(Request $request)
    {
        $request->session()->forget('register');
        $products = \App\Models\Lawyer::all();
        return redirect() -> route('signup') -> with(['success' => 'تم التسجيل بنجاح']);
    }

    public function createStep1(Request $request)
    {
        $register = $request->session()->get('register');

        return view('register.step1',compact('register'));
    }

    public function PostcreateStep1(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:lawyers',
            'password' => 'required',
            'gender' => 'required',
        ]);
        if(empty($request->session()->get('register'))){
            $register = new \App\Models\Lawyer();
            $register->fill($validatedData);
            $request->session()->put('register', $register);
        }else{
            $register = $request->session()->get('register');
            $register->fill($validatedData);
            $request->session()->put('register', $register);
        }
        return redirect('/lawyers/register2');
    }

    public function createStep2(Request $request)
    {
        $register = $request->session()->get('register');

        return view('register.step2',compact('register'));
    }

    public function PostcreateStep2(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'required|unique:lawyers',
            'governorate' => 'required',
            'region' => 'required',
            'specialty' => 'required',
            'address' => 'required',
        ]);
        if(empty($request->session()->get('register'))){
            $register = new \App\Models\Lawyer();
            $register->fill($validatedData);
            $request->session()->put('register', $register);
        }else{
            $register = $request->session()->get('register');
            $register->fill($validatedData);
            $request->session()->put('register', $register);
        }
        return redirect('/lawyers/register3');
    }
    
    public function createStep3(Request $request)
    {  
        $register = $request->session()->get('register');
        return view('register.step3',compact('register'));
    }

    public function PostcreateStep3(Request $request)
    {
        $register = $request->session()->get('register');

        if(!isset($register->lawyerPhoto)) {
            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $fileName = "photo-" . time() . '.' . request()->photo->getClientOriginalExtension();
            $request->photo->storeAs('photo', $fileName);
            $register = $request->session()->get('register');
            $register->lawyerPhoto = $fileName;
            $request->session()->put('register', $register);
        }
        return view('register.step4',compact('register'));
    }

    public function removeImage(Request $request)
    {
        $register = $request->session()->get('register');

        $register->lawyerPhoto = null;

        return view('register.step3',compact('register'));
    }

    public function store(Request $request)
    {
        $register = $request->session()->get('register');

        $register -> password = bcrypt($register -> password);

        $register -> name = $register -> firstName . ' ' . $register -> lastName;

        $register->save();

        return redirect('/lawyers/data');
    }
}