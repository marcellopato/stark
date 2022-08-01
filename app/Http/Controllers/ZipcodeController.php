<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Canducci\ZipCode\Facades\ZipCode;

class ZipcodeController extends Controller
{
    public function index(Request $request)
    {
        $zip = $request->zipcode;
        $zipCodeInfo = ZipCode::find($zip);
        if($zipCodeInfo){
            return $zipCodeInfo->getJson();
        } else {
            return false;
        }
    }
}
