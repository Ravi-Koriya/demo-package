<?php

namespace Ravi\demo\Http\Controllers;

use Ravi\demo\Models\Demo;
use Illuminate\Http\Request;
use Ravi\demo\Mail\DemoMailable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request as FacadesRequest;

class DemoController extends Controller
{
    public function index()
    {
        return view('demo::demo');
    }
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:demos',
            'password' => 'required',
            'message' => 'required',
        ]);
        Mail::to(config('demo.send_email_to'))->send(new DemoMailable($request->message,$request->name));
        Demo::create($request->all());
        return redirect()->back()->with('success', 'Insert successfull');
    }
    
}
