<?php

namespace App\Http\Controllers;

use App\Mail\ExpertForm;
use App\Mail\PackageForm;
use App\Mail\SendEmail;
use App\Mail\WebsiteForm;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return Renderable
     */
        public function sidebar_form(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        
        $to = [
            'hello@digizel.com',
            $request->email
        ];

        $mail = Mail::to($to)->send(new SendEmail($request->all()));

        $arr = array('msg' => 'The form has been submitted successfully', 'status' =>false);

        if($mail){
            $arr = array('msg' => 'The form has been submitted successfully', 'status' => true);
        }

        return response()->json($arr);

    }
     
     
    public function quote_form(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        
        $to = [
            'hello@digizel.com',
            $request->email
        ];

        $mail = Mail::to($to)->send(new SendEmail($request->all()));

        $arr = array('msg' => 'The form has been submitted successfully', 'status' =>false);

        if($mail){
            $arr = array('msg' => 'The form has been submitted successfully', 'status' => true);
            return response()->json($arr);
        }else{
        	return response()->json($arr);
        }
	}

    public function website_form(Request $request)
    {

        $request->validate([
            'website_name' => 'required|url'
        ]);
		
         $mail = Mail::to('hello@digizel.com')->send(new WebsiteForm($request->all()));
	dd("test");
        // return redirect()->back()->with('website_message', 'The form has been submitted successfully');
		$arr = array('msg' => 'The form has been submitted successfully', 'status' =>false);

        if($mail){
            $arr = array('msg' => 'The form has been submitted successfully', 'status' => true);
        }
	
        return response()->json($arr);
    }

    public function package_form(Request $request)
    {
        
        $mail = Mail::to('hello@digizel.com')->send(new PackageForm($request->all()));

        $arr = array('msg' => 'The form has been submitted successfully', 'status' =>false);

        if($mail){
            $arr = array('msg' => 'The form has been submitted successfully', 'status' => true);
        }

        return response()->json($arr);

    }

    public function expert_form(Request $request)
    {
        $request->validate([
            'expert_full_name' => 'required',
            'expert_company_name' => 'required',
            'expert_email' => 'required',
            'expert_phone' => 'required',
            'expert_package' => 'required',
            'expert_comment' => 'required',
        ]);
        
        $to = [
            'hello@digizel.com',
            $request->expert_email
        ];

        $mail = Mail::to($to)->send(new ExpertForm($request->all()));

        $arr = array('msg' => 'The form has been submitted successfully', 'status' =>false);

        if($mail){
            $arr = array('msg' => 'The form has been submitted successfully', 'status' => true);
        }

        return response()->json($arr);

    }



}
