<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;



class BbsController extends Controller
{
    public function index()
    {
        /* $content = ['bbs' => Bb::latest()->get()]; */
        $bbs = Bb::latest()->paginate(5, ['*']);
        $content = ['bbs' => $bbs];

        /* $bbs = Bb::latest()->get();
        $s = "Объявления\r\n\r\n";
        foreach ($bbs as $bb) {
        $s .= $bb->title . "\r\n";
        $s .= $bb->price . " руб.\r\n";
        $s .= "\r\n";
        } */
        /* return response($s)
        ->header('Content-Type', 'text/plain'); */
        return view('index', $content);
    }

    public function detail(Bb $bb)
    {
        /* $s = $bb->title . "\r\n";
        $s .= $bb->content . " руб.\r\n";
        $s .= $bb->price . " руб.\r\n";
        return response($s)
        ->header('Content-Type', 'text/plain'); */
        return view('detail', ['bb' => $bb]);
    }


    // public function action(Request $request)
    // {
    //     $title = $request->title;
    //     $content = $request->content;
    //     $price = $request->price;

    //     dd($title);

    //     return view('create');
    // }

    public function url()
    {
        /* var_dump("hello"); */
        $s = "Hello World";
        /* dd($s); */

        return view('url');
    }
}
