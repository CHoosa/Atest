<?php

namespace App\Http\Controllers\Controller420;

use App\Http\Controllers\Controller;
use Session;

class index extends Controller
{


    public function getindex()
    {
        return view('welcome');
    }
    public function getlogin()
    {
        return view('status_user');
    }
    public function getaddmain()
    {
        $getuser = \App\User::all();
        return view('Addmin_user')->with('adduser',$getuser);
    }
    public function getaddstatus($id)
    {
        $getstatus =\App\User::find($id);
        return view('Addmin_status')->with('addstatus',$getstatus);
    }
    public function potstatus()//inputค่า
    {

        $getstatususee  = new \App\addstauts();
        $getstatususee->name=\Input::get('statususer');
        $getstatususee->FBS=\Input::get('FBS');
        $getstatususee->BPmin=\Input::get('BPmin');
        $getstatususee->BPmix=\Input::get('BPmix');
        $getstatususee->comment=\Input::get('comment');
        $getstatususee->save();

        return redirect('/addmin');



    }
    public function getshowstatus()
    {
        //$getshowstatususer =\App\User::find($id);
        $getshowstatus=\App\addstauts::where('name',Session::get('name'))->get();

        $getshowstatususers=\App\addstauts::findOrNew($getshowstatus[0]['id']);
        return view('showstatus')->with('showstatus',$getshowstatususers);
    }
    public function postlogin()
    {
        $longin = \App\User::all();
        $longinemail=\Input::get('email');
        $longinpassword=\Input::get('password');
        foreach ($longin as $longin):
            $chackemail = $longin->email;
            $chackpassword = $longin->password;
            $chacklavel = $longin->lavel;
            $chackname =$longin->name;
            if ($longinemail == ""&&$longinpassword == ""){return redirect('/');}
            if ($longinemail == $chackemail && $longinpassword == $chackpassword) {
                Session::set('email', $chackemail);
                Session::set('logout', "1");
                Session::set('lavel', $chacklavel);
                Session::set('name', $chackname);

                if (Session::get('lavel') == '1') {
                    return redirect('/addmin');
                } else {
                    return redirect('/' . Session::get('name') . '/status');
                }
            }
        endforeach;
        return redirect('/');
    }

    public function getlogout()
    {
        Session::flush();
        return redirect('/');
    }

}
