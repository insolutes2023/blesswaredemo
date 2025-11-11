<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('index');
    }






    public function contactSubmit(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|max:255',
            'emailaddress' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $subject = 'New Contact Message Received';
        $name = $request->name;
        $email = $request->emailaddress;
        $contact = $request->phone;
        $messageContent = $request->message;

        // Create a new instance of the mailable class
        $contactMessage = new ContactMessageMail($name, $email, $contact, $messageContent);

        // Captcha validation
        $captcha_response = trim($request->input('g-recaptcha-response'));

        if ($captcha_response != '') {
            $keySecret = '6Ld802UqAAAAAFNebA9_7GtqHN5Uk7Kaz6HeZX6C';
            $check = [
                'secret' => $keySecret,
                'response' => $captcha_response,
            ];

            $startProcess = curl_init();
            curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($startProcess, CURLOPT_POST, true);
            curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));
            curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);
            $receiveData = curl_exec($startProcess);
            $finalResponse = json_decode($receiveData, true);

            if ($finalResponse['success']) {
                // Use the mailable class to send the email
                Mail::to('hello@artistryminds.com')->send($contactMessage);

                return redirect()->back()->with('success', 'Thank you for contacting us');
            } else {
                return redirect()->back()->with('error', 'Sorry Google Recaptcha Unsuccessful!!');
            }
        } else {
            return redirect()->back()->with('error', 'Captcha response is required');
        }
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contacts');
    }
    public function services()
    {
        return view('service');
    }
    public function audit()
    {
        return view('audit');
    }
    public function tax()
    {
        return view('tax');
    }
    public function products()
    {
        return view('products');
    }
}
