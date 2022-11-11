<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class TestController extends Controller
{
    public function index() {
        return view('tests.test');
    }
}
