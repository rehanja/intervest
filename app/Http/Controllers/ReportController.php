<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReportController extends Controller
{
    //
    public function index()
    {

        $url = "https://hpb.health.gov.lk/api/get-current-statistical";

        $ch_session = curl_init();
        curl_setopt($ch_session, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch_session, CURLOPT_URL, $url);
        $result = curl_exec($ch_session);
        // $collection=array($result);
        // $uniqueUserId=$array->unique('dat');
         //$countUserId=$collection->countBy('date');

        echo json_encode($result,true);

        // $posts=Http::get('https://google.com')->json();
        // //$posts="vfvv ";
        // dd($posts);
        return view('report');
    }


}
