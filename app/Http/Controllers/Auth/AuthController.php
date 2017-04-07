<?php

namespace App\Http\Controllers\Auth;

use App\ClientLogin;
use Validator;
use DB;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string

     */
    
    protected $redirectTo = 'index';


    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:clients',
            'password' => 'required|min:6|confirmed',

            'phone' => 'required',
            'adress' => 'required',
            'lastname' => 'required',
            'country' => 'required',
            
        ]);

    }



    public function getLogin(){
        return view('auth.login');

    }
    public function postLogin(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        $throttles = $this->isUsingThrottlesLoginsTrait();

        if ($throttles && $lockedOut = $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }
        

        $credentials = $this->getCredentials($request);

        if (Auth::guard('clients')->attempt($credentials, $request->has('remember')) && Auth::guard('clients')->user()->active == 2) {
            return $this->handleUserWasAuthenticated($request, $throttles);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        if ($throttles && ! $lockedOut) {
            $this->incrementLoginAttempts($request);
        }

        return $this->sendFailedLoginResponse($request);
    }
    public function getRegister(){
        $country = DB::table('countries')->get();
        return view('auth.register',['country'=>$country]);

    }
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
                );
        }

        Auth::guard('clients')->login($this->create($request->all()));

        return redirect($this->redirectPath());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $code_active = str_random(30);
        $client = ClientLogin::create([
            'first_name' => $data['name'],
            'last_name' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'country'=>$data['country'],
            'phone_number'=>$data['phone'],
            'address' =>$data['adress'],
            'code_active' => $code_active,

            ]);
         $data['code_active']  = $client->code_active;
          Mail::send('auth.emails.password', $data, function($message) use ($data)
            {
                $message->from('tranvinhhuy2904@gmail.com', "Em đây");
                $message->subject("Kích hoạt đê anh zai!!!");
                $message->to($data['email']);
            });
          return redirect('login')->with('thongbao','Check mail đi anh zai!');

    }
}
