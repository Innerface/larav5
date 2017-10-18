<?php

namespace App\Http\Controllers\Discuss;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiscussController extends Controller
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
