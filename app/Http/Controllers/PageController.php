<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $username = session('username');
        return view('index', ['username' => $username]);
    }
    public function profile()
    {
        $username = session('username');
        return view('profile', ['username' => $username]);
    }
    public function order()
    {
        $username = session('username');
        return view('order', ['username' => $username]);
    }
    public function address()
    {
        $username = session('username');
        return view('address', ['username' => $username]);
    }
    public function payment()
    {
        $username = session('username');
        return view('payment', ['username' => $username]);
    }
    public function coupon()
    {
        $username = session('username');
        return view('coupon', ['username' => $username]);
    }
    public function customerService()
    {
        $username = session('username');
        return view('customerService', ['username' => $username]);
    }
}