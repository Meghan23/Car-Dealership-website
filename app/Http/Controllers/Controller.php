<?php

namespace Car Dealership\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   public static function getData()
{   
        
        $data['data']= \DB::table('cars')->get();
       
        
            return view('cardealer',$data);
        
}

}
