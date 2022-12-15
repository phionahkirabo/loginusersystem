<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use App\Models\blog;

class userloginAuthController extends Controller
{
    public function login(){
return view('auth.login');
    }
    public function registration(){
return view('auth.registration');
    }
   public function registerUser(request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required confirmed|min:5|max:12'
        ]);

        $user =new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt ($request ->password);
        $user->save();
        
        
            return back()->with('success','you have registered succeessfuly');
       
           
        }

        public function loginUser(Request $request){
            $request->validate([
              'email'=>'required|email',
              'password'=>'required|min:5|max:12'
            ]);

            $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return view('auth.wlm');
                        
        }
  
        return redirect()->back()->with('loginfailed','Login details are not valid');

        }
        public function logout(Request $request){
            $request->session()->flush();
            $request->session()->regenerate();
            return redirect(url('login'));
        }
  public function users(){
    // return auth()->user();
    $id= auth()->user()->id;
    $data = User::all()->where('id','!=',$id);
    return view('auth.home',compact('data'));
  }
  public function viewuserblog(){
    // return auth()->user();
    $id= auth()->user()->id;
    $data = User::find()->where('id',$id);
    return view('auth.view_users_blogs',compact('data'));
  }
  public function viewblog($email){
    $blogs = blog::all();
    return view('auth.view_users_blogs',compact('blogs'));
  }
}
