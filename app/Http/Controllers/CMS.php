<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pages;

class CMS extends Controller
{
    //
    public function get_page($lang,$page) {
        $url = $lang."/".$page;
        $data =  pages::get_page($url);

        return view("welcome",["page"=>$data[0]]);
    }


}
