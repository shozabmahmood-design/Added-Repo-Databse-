<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\Blog;

class BlogController extends Controller
{
    public function Blogs()
    {
        // $blogs = Blog::paginate(1)->sortByDesc('created_at');
        $blogs = Blog::orderBy('created_at', 'DESC')->paginate(4);
        $cats = BlogCategory::all();
        return view('pages.blogs', compact('blogs', 'cats'));   
        // return view('pages.blogs')->with('blogs', $blogs, 'cats');
    }

    public function singleblog($id)
    {
        $blog = Blog::where('id',$id)->first();
        $blog->increment('views');
        $blog-> save;
        return view('pages.singleblog', compact('blog'));
    }
    
    public function search(Request $request)
    {
        $blogs = Blog::where('title', 'LIKE', '%'.$request->blog_title.'%')->orderBy('created_at', 'DESC')->paginate(4);
        $cats = BlogCategory::all();

        if(count($blogs)>0){
            return view('pages.blogs', compact('blogs', 'cats'));   
        }

        else
        return redirect('/blogs')->withErrors(['msg' => 'No Result Found']);
    }

    public function filterbycat($id)
    {
        $blogs = Blog::where('blog_category_id', $id)->orderBy('created_at', 'DESC')->paginate(4);
        $cats = BlogCategory::all();

        if(count($blogs)>0){
            return view('pages.blogs', compact('blogs', 'cats'));   
        }

        else
        return redirect('/blogs')->withErrors(['msg' => 'No Result Found']);
    }

    public function filterbytag($id)
    {
        $blogs = Blog::where('tags', 'LIKE', '%'.$id.'%')->orderBy('created_at', 'DESC')->paginate(4);
        $cats = BlogCategory::all();

        if(count($blogs)>0){
            return view('pages.blogs', compact('blogs', 'cats'));   
        }

        else
        return redirect('/blogs')->withErrors(['msg' => 'No Result Found']);
    }
}
