<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\WelcomeEmail;
use Illuminate\Contracts\View\View;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'mobile' => [
                'nullable',
                'regex:/^[0-9]{10}$/'
            ],
            'service' => 'required|string',
        ], [
            'name.required' => 'Please enter your name.',
            'email.email' => 'Enter a valid email address.',
            'mobile.regex' => 'Enter a valid 10-digit mobile number.',
            'service.required' => 'Please select a service.',
        ]);
        if (empty($request->email) && empty($request->mobile)) {
            return back()->withErrors([
                'email' => 'Email or Mobile is required.',
                'mobile' => 'Email or Mobile is required.'
            ])->withInput();
        }

        $msg = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
        ];
        $sub = $request->service;

        // dd($request->all());
        Mail::to($request->email)->send(new WelcomeEmail($msg, $sub));
        // Mail::to("jatinmewaraofficial@gmail.com")->send(new WelcomeEmail($msg, $sub));
        return back()->with('success', 'Thank you for contacting us!');
    }
    public function blogs(Request $request)
    {
        $data = DB::table('blogs')->get();
        // dd($data);
        return view('blogs')->with('data', $data);
    }
    public function user(Request $request): View
    {
        $users = DB::table('users')->get();
        return view('user', compact('users'));
    }

public function viewEncrypted($id)
{
    try {
        $decryptedId = decrypt($id);
        $blog = DB::table('blogs')->where('id',$decryptedId)->first();
        $latest = DB::table('blogs')->get();
        return view('fullblog', compact('blog','latest'));
    } catch (\Exception $e) {
        abort(404); // in case of tampering
    }
}

}

