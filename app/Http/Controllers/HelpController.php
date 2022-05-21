<?php

namespace App\Http\Controllers;
use App\Help;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function store(Request $request)
    {
        $help= new Help;
        $help->name=$request->name;
        $help->date=$request->date;
        $help->post=$request->description;
        $help->link=$request->link;
        $help->save();
       // dd($request->all());
       // return redirect()->back();

        $data =Help::all();
        //dd($data);
        
        return view('helpGuide')->with('helps',$data);
    }

    public function show()
    {
        $data = Help::all();
        //dd($data);
        return view('helpGuide')->with('helps',$data);
    }
}
