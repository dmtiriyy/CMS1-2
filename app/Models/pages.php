<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pages extends Model
{
    use HasFactory;

    public static function get_page($url) {
        $page = DB::table('pages')->where('pages.url', $url)->get();
        return $page;
    }
    
    public static function get_pages() {
        $pages = DB::table('pages')->get();
        return $pages;
    }

    public static function edit_page($id,$caption,$content) {
        DB::table('pages')
        ->where('id', $id)
        ->update(['caption' => $caption,'content' => $content,'editedDate' =>DB::raw('now()')]);
    }
    public static function delete_page($id) {
        DB::table('pages')
        ->where('id',$id)
        ->delete();
    }
    public static function create_page($caption,$content,$url) {
        DB::table('pages')
        ->insert(['url'=>$url,'caption' => $caption,'content' => $content,'createdDate' =>DB::raw('now()'),'editedDate' => DB::raw('now()')]);
    }

    public static function get_pageId($id) {
        $page = DB::table('pages')->where('pages.id', $id)->get();
        return $page;
    }

}
