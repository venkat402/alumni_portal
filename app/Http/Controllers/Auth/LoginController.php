<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:alumni')->except('logout');
        $this->middleware('guest:student')->except('logout');
    }
    //<===========================Admin login=================================>
    public function showAdminLoginForm()
    {
        return view('auth.admin-login', ['url' => 'admin']);
    }
    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:4'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin-dashboard');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
    //<========================End of admin login==============================>



    //<======================== alumni login====================================>
    public function showAlumniLoginForm()
    {
        return view('auth.alumni-login', ['url' => 'alumni']);
    }
public function showalumniregisterForm(){
        return redirect('/register-alumni');
        return view('auth.alumni-register',['url' => '/alumni/register']);
}
    public function alumniLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('alumni')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/alumni-dashboard');
        }
        return redirect('/login/alumni')->with('error','Error occurred while trying to log you in');

    }
    //<======================== End of alumni login==============================>


    //<======================== End of student login==============================>
    public function showStudentLoginForm()
    {
        $start=2009;
        $end=date('Y');
        
        return view('auth.student-login', ['url' => 'student']);
    }

    public function studentLogin(Request $request)
    {
        $this->validate($request, [
            'RegNo'   => 'required',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('student')->attempt(['RegNo' => $request->RegNo,'isBlocked'=>0, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/student-dashboard');

        }else{
            return redirect('/login/student')->with('error','Error occurred while trying to log you in, check your credentials and try again');

        }

    }
    //<======================== End of student login==============================>

}
