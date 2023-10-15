<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Mail;
use App\Rules\CustomValidation;

class ContactController extends Controller
{
    public function contact_form_submit(Request $request){


       // $validated = $request->validate([
       //                'site_user_email' => 'email:rfc,dns,spoof'
       //                ]);

       


        $site_user_name = $request->site_user_name;
        $site_user_email = $request->site_user_email;
        $site_user_mail_subject = $request->site_user_mail_subject;
        $site_user_mail_body = $request->site_user_mail_body;

        $addSiteUserMailInfo = DB::table('contacts')
                       ->insert([
                        'name'=>$site_user_name,
                        'email'=>$site_user_email,
                        'subject'=>$site_user_mail_subject,
                        'message'=>$site_user_mail_body
                        ]);
  


      $maildetails = [
        'heading' => 'Dear concern',
        'mail_subject' => 'Welcome to 365 Tech World',
        'body' => 'Thank you so much for contacting 365 Tech World. Here we are Monday to Friday 24 hours at your service for giving feedback to your queries. So feel free to ask or share any questions you have. To know more about 365 Tech World please visit our site www.365techworld.com .',
        'regards' => 'Regards',
        'thank' => 'Thanks again.',
        'hr_name' => 'Kamrun nahar',
        'hr_designation' => 'Communication manager',
        'company_name' => '365 Tech World',
        'hr_email' => 'knhossain04@gmail.com',
    ];



    //for site user email
     \Mail::send('emails.site_user_email_page', $maildetails, function($message) use ($site_user_email, $maildetails) {
        $message->from('365techworldhr@gmail.com');
        $message->to($site_user_email);
        $message->subject($maildetails['mail_subject']);
    });





    //for admin email

    $adminMaildetails = [
        'heading' => $site_user_name,
        'mail_subject' => $site_user_mail_subject,
        'body' => $site_user_mail_body,
        'email_address' => $site_user_email
    ];


     

     \Mail::send('emails.admin_email_page', $adminMaildetails, function($message) use ($site_user_email, $adminMaildetails) {
        $message->from($site_user_email);
        $message->to('365techworldhr@gmail.com');
        $message->subject($adminMaildetails['mail_subject']);
    });
        
          

        return redirect('/contact')->with('success','Thank you for your response. We appreciate your feedback.');
    }
}
