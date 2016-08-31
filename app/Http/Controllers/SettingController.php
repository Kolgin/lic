<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SettingController extends Controller
{
    public function makerSettings(){
        return view('settings.maker');
    }

    public function managerSettings(){
        return view('settings.manager');
    }

    public function customerSettings(){
        return view('settings.customer');
    }

    public function getGeneral(){
        return view('settings.dashboard');
    }

    public function paymentSetting(){
        return view('settings.payment');
    }

    public function taxesSetting(){
        return view('settings.taxes');
    }

    public function noteSetting(){
        return view('settings.note');
    }

    public function invoiceSetting(){
        return view('settings.invoice');
    }

    public function socialSetting(){
        return view('settings.social');
    }

    public function siteSetting(){
        return view('settings.site');
    }
}
