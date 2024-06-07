<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Blog::query()->where("is_banner", true)->limit(15)->get();
        $tops = Blog::query()->where("is_top", true)->limit(15)->get();
        $populars = Blog::query()->where("is_popular", true)->limit(15)->get();
        $reads = Blog::query()->orderByDesc("view_count")->limit(4)->get();

        return view("home", compact("banners", "tops", "populars", "reads"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function byCategory($type)
    {
        $type = "is_" . $type;
        $blogs = Blog::query()->where($type, true)->paginate();
        return view("list", compact("blogs", "type"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $blog->view_count += 1;
        $blog->save();
        $blogs = Blog::query()->where("type", $blog->type)->paginate();
        return view("one", compact("blog", "blogs"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function byTag($tag)
    {
        $blogs = Blog::query()->where('tag', $tag)->paginate();
        return view("list", compact("blogs", "tag"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function byType($type)
    {
        $blogs = Blog::query()->where('type', $type)->paginate();
        return view("list", compact("blogs", "type"));
    }

    public function search(Request $request)
    {
        $search = strtolower($request->get("q"));
        $blogs = Blog::query()
            ->whereRaw("LOWER(title) LIKE '%$search%' or LOWER(tag) LIKE '%$search%' or LOWER(description) LIKE '%$search%'")
            ->paginate();
        return view("list", compact("blogs", "search"));
    }
}
