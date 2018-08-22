<?php
/**
 * Created by PhpStorm.
 * User: bob
 * Date: 2018/8/22
 * Time: 下午6:06
 */

namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function getApp() {
        return view('app');
    }

    public function getLogin()
    {
        return view('login');
    }
}