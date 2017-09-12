<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $name = [];
        $name['first_name'] = 'Tetsuro';
        $name['last_name']  = 'Degawa';
        // サブディレクトリを参照する場合は「.」でつなぐ 第二引数に連想配列を渡すことでフォーム側から出力できる
        return view("pages.about", $name); 

    }
}