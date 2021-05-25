<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExampleRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function check(FormExampleRequest $request)
    {
        $success = 'Success !';
        return view('welcome', compact('success'));    
    }
}
