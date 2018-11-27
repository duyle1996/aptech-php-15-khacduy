<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContactForm(){
    	return view('fontend.contact');
}

public function insertMessage(Request $request){
	$name    = $request->input('name');
	$title   = $request->input('title');
	$message = $request->input('message');

	return view('fontend.contact')->with(['success' => 'Bạn đã gửi tin nhắn thành công!', 'name' => $name, 'title' => $title]);
}
}