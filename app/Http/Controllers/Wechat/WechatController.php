<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WechatController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    protected $_token = "INKZ";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
        $this->middleware('guest')->except('logout');
    }

    /**
     *  Index for WebController
     *
     * @return Response
     */
    public function index(){
        //检验签名的合法性
        if($this->_checkSignature()){
            //签名合法，告知微信公众平台服务器
            return $_GET['echostr'];
        }
    }

    /*
    用于第一次验证我们网站url合法性
     */
    public function firstValid(){
        //检验签名的合法性
        if($this->_checkSignature()){
            //签名合法，告知微信公众平台服务器
            return $_GET['echostr'];
        }
    }
    /**
     * 验证签名
     * @return bool
     */
    private function _checkSignature()
    {
        //获得由微信公众平台请求的验证数据
        $signature = $_GET['signature'];
        $timestamp = $_GET['timestamp'];
        $nonce = $_GET['nonce'];
        //将时间戳，随机字符串，token按照字母顺序排序，病并连接
        $tmp_arr = array($this->_token, $timestamp, $nonce);
        sort($tmp_arr, SORT_STRING);//字典顺序
        $tmp_str = implode($tmp_arr);//连接
        $tmp_str = sha1($tmp_str);//sha1加密
        if ($signature == $tmp_str) {
            return true;
        } else {
            return false;
        }
    }
}
