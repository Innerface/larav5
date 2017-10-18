<?php

namespace App\Http\Controllers\Web;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
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
        $this->middleware('auth');
        //$this->middleware('guest')->except('logout');
    }

    /**
     *  Index for WebController
     *
     * @return Response
     */
    public function index(){
        return view('web.index');
    }
}
