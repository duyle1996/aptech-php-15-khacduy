<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct(){
        $this ->middleware('Second');
        $this ->middleware('Thrid');
    }
    public function testControllerMiddleware(){
        echo '<br> ham testControllerMiddleware';
    } 
}
