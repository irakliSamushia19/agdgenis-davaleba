<?php

namespace App\Http\Controllers;

use App\models\Irakli;
use Illuminate\Http\Request;



class IrakliController extends Controller
{
    
    public function show()
    {

        $posts = Irakli::select('title', 'body', 'author', 'active')->where('active', '=', 1)->orderBy('created_at')->limit(5)->get();;
        return view('welcome', ['posts' => $posts]);

    }
    public function showDetailed()
    {
        $results = Irakli::select('title', 'body', 'author', 'active')->orderBy('created_at')->get();
        return view('detail', ['results' => $results]);
    }

    public function add(Request $request)
    {
        Irakli::create([
            "title"=> $request->input('title'),
            "body"=> $request->input('body'),
            "author"=> $request->input('author'),
            "active"=> $request->input('active')
        ]);
        return $this->show();
    }
    public function updateOrDelete(Request $request)
    {
        if ($request->input('delete') != ""){
            Irakli::where('title', '=', $request->input('delete'))->delete();
        }
        else {           
            $title = $request->input('title');
            $new_title = $request->input('new_title');
            $new_author = $request->input('new_author');
            $new_active = $request->input('new_active');
            Irakli::where('title', '=', $title)->update(['title' => $new_title]);
            Irakli::where('title', '=', $title)->update(['author' => $new_author]);
            Irakli::where('title', '=', $title)->update(['active' => $new_active]);
                       
        }
        return $this->showDetailed();
        
    }

}
