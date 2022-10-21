<?php

namespace App\Http\Controllers;

use App\Models\Defi;
use App\Http\Requests\StoreDefiRequest;
use App\Http\Requests\UpdateDefiRequest;

class DefiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home');
    }
    public function first()
    {
        $leftSecond = 1665583200-time();
        return view('first', ['leftSecond' => $leftSecond]);
    }
    public function dapps()
    {
        //
        return view('dapps');
    }


    public function token()
    {
        //
        return view('token');
    }

    public function partner()
    {
        //
        return view('partner');
    }

    public function influencer()
    {
        //
        return view('influencer');
    }

    public function developing()
    {
        //
        return view('developing');
    }
}
