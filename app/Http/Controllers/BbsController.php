<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;

class BbsController extends Controller
{
    public function index()
    {

        $content = ['bbs' => Bb::latest()->get()];

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
        $s = $bb->title . "\r\n";
        $s .= $bb->content . " руб.\r\n";
        $s .= $bb->price . " руб.\r\n";
        return response($s)
            ->header('Content-Type', 'text/plain');
    }
}
