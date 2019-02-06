<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trynews;

class MainController extends Controller
{
   public function main()
    {
        $trynews = Trynews::latest()
        ->limit(9)
    	->get();
        return view('pages.main', compact('trynews'));
    }
    public function news()
    {
        $trynews = Trynews::latest()->get();
        return view('pages.news', compact('trynews'));
    }
    public function solonews(Trynews $solo)
    {
        return view('pages.solonews', compact('solo'));
    }
    public function footerform(Request $request)
      {
    $data= array(
      'u_name' => request('u_name'),
      'email' => request('email'),
      'u_text' => request('u_text'),
      );
       \Mail::send('email.mail2', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN_FOOTER');
        $message1->from($data['email'], $data['u_name'], $data['u_text']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
      return back();
    }
    
    // regions
    public function p_center()
    {
        return view('regions.center.p_center');
    }
    public function dvos()
    {
        return view('regions.daliniyvostok.dvos');
    }
    public function privol()
    {
        return view('regions.privolj.privol');
    }
    public function sever()
    {
        return view('regions.severo-zapad.sever');
    }
    public function sibir()
    {
        return view('regions.severo-kavkaz.sibir');
    }
    public function sibirkiy()
    {
        return view('regions.sibirkiy.sibirkiy');
    }
    public function ural()
    {
        return view('regions.ural.ural');
    }
    public function yg()
    {
        return view('regions.yg.yg');
    }
}
