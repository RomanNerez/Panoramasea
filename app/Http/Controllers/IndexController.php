<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index(){
    	$version = time(); 
    	return view('index', compact('version'));
    }

    public function addComment(Request $request){
        sleep(2);
    	$data = $request->input('data');
    	$data['created'] = date('Y-m-d');
    	DB::table('comments')->insert($data);
    }
    public function sendMail(){
        $version = time(); 
        Mail::send('index', array('version' => $version), function ($m) {
            $m->from('yuriy.zieit@gmail.com', 'Your Application');
            $m->to("krutoyroman1233412334@gmail.com", "yurii")->subject('Your Reminder!');
          });

    }
}
