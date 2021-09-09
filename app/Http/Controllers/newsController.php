<?php
 


namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Symfony\Component\Finder\Glob;

class newsController extends Controller
{
    public function index(){
        
          $blogs=Blog::all();
          $size=Blog::all()->count();
        return view('welcome')->with('blogs',$blogs)->with('size',$size)->with('i',$i=0);
    }
   
    public function create(){
        return view('create');
    }

    public function sorte(Request $request){
       // return $request;
       $blog=new Blog();
       $blog->text=$request->message;
       $blog->save();
       return redirect('/');

    }

    public function save($id){

$blog=Blog::find($id);
$blog->save=1;
$blog->save();
return redirect('/');


    }

    public function destroy($id)
    {
        $menu=Blog::find($id);
        $menu->delete();
    
        return redirect('/');
        //
    }
}
