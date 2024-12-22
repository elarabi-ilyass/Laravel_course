<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request){
        $nom='Ilyass';
        $languages=[
            'React.js','Laravel','MySql','C++',"Html"
        ];
        $Jobs='Developpeur Web Full stack';
        return view('Test.welcome',[
            'nom'=>$nom,
            'languages'=>$languages,
            'Jobs'=>$Jobs
        ]);
    }

    public function Layout(){
        return view('Layout.Home');
    }
}

//I stopped in 13 video
