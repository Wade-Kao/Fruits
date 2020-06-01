<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Socialite;

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
    //  protected $redirectTo = '/home';
    //public function redirectTo() 優先度比較高
    public function redirectTo()
    {
        // User role
        $role = Auth::user()->role->name;
        //    dd($role);
        // Check user role
        switch ($role) {
            case 'SA':
                return '/home';
                break;
            case 'Admin':
                return '/admin';
                break;
            default:
                return '/login';
                break;
        }

        //  if(假如是管理員){
        //     return '/admin';
        // }else{
        // return '/home';
        // }

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'name';
    }

//轉址到社群平台的登入頁面
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

//交由社群平台去呼叫的Call back function
    public function handleProviderCallback($provider)
    {
        //透過供應器來取得用戶
        $user = Socialite::driver($provider)->user();

        //透過用戶和供應器名稱來尋找或建立用戶
        $authUser = $this->findOrCreateUser($user, $provider);

        //進行登入並開啟記得我
        Auth::login($authUser, true);

        return redirect($this->redirectTo);
    }

//尋找或者是新增這個使用者
    public function findOrCreateUser($user, $provider)
    {

    }

}
