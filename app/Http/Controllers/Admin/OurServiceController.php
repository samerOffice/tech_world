<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurServiceController extends Controller
{
    public function digital_marketing(){
        return view('front-end.services.digital_marketing');
    }


    public function seo_service(){
        return view('front-end.services.seo');
    }

    public function business_content(){
        return view('front-end.services.business_content');
    }

    public function website_design_and_development(){
        return view('front-end.services.website_design_and_development');
    }

    public function software_development(){
        return view('front-end.services.software_development');
    }

    public function graphics_design(){
        return view('front-end.services.graphics_design');
    }

}
