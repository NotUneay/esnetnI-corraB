<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    public function redirectTo()
    {
        $user = \Auth::user();

        switch ($user->role_id) {
            case 1:
                return 'admin';
                    break;
            case 2:
                return 'ceo';
                    break;
            case 3:
                return 'head-finance';
                    break;
            case 4:
                return 'finance';
                break;
            case 5:
                return 'supplies';
                    break;
            case 6:
                return 'sales';
                    break;
            case 7:
                return 'head-maintenance';
                    break;
            case 8:
                return 'maintenance';
                    break;
            case 9:
                return 'customer';
                    break;
        }
    }





//    public function redirectTo()
//    {
//
//        if (auth()->user()->role_id == '1'){
//            return redirect()->route('admin.index');
//        }
//        if (auth()->user()->role_id == '2'){
//            redirect()->route('ceo.index');
//        }
//        if (auth()->user()->role_id == '3') {
//            return redirect()->route('finance.index');
//        }
//        if (auth()->user()->role_id == '4'){
//            return redirect()->route('supplies/index');
//        }
//        if (auth()->user()->role_id == '5'){
//            return redirect()->route('sales.index');
//        }
//        if (auth()->user()->role_id == '6'){
//            return redirect()->route('maintenance.index');
//        }
//        if (auth()->user()->role_id == '7'){
//            return redirect()->route('customer.index');
//        }
//    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
