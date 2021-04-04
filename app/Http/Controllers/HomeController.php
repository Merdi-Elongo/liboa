<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $posts = Post::orderBy('updated_at', 'DESC')->limit(3)->get();
        return view('pages.home', compact('posts'));
    }

    public function news() {
        $posts = Post::orderBy('updated_at', 'DESC')->paginate(6);
        return view('pages.news', compact('posts'));
    }

    public function gallery() {
        return view('pages.gallery');
    }

    public function adhesion() {
        return view('pages.adhesion');
    }

    public function team() {
        $posts = Post::orderBy('updated_at', 'DESC')->limit(4)->get();
        return view('pages.team', compact('posts'));
    }

    public function contact() {
        return view('pages.contact');
    }

    public function about() {
        return view('pages.about');
    }

    public function donation() {
        return view('pages.donation');
    }

    public function show(Request $request) {
        $post = Post::find($request->id);
        $posts = Post::limit(6)->orderBy('updated_at', 'DESC')->get();
        return view('pages.show', compact('post', 'posts'));
    }

}
