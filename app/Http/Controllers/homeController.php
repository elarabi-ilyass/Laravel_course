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

    // public function LayoutProps(){
    //     $personnes=[
    //         ['id'=>'0011','name'=>'Ilyass','job'=>'Developpeur Web Full stack'],
    //         ['id'=>'0022','name'=>'Fouad','job'=>'Developpeur Front-end'],
    //         ['id'=>'0033','name'=>'RACHID','job'=>'Developpeur Back-end'],
    //     ];
    //     return view('Layout.Home',compact('personnes'));
    // }
}

//I stopped in 13 video
