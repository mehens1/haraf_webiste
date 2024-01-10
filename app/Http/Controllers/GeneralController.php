<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class GeneralController extends Controller
{
    //
    public function home()
    {
        $last_record = Post::latest()->first();
        $posts = Post::orderBy('id', 'desc')->skip(1)->take(4)->get();

        $data = [
            'page_title' => 'Home',
            'last_record' => $last_record,
            'posts' => $posts
        ];
        return view('home', $data);
    }

    public function career()
    {
        $data = [
            'page_title' => 'Career'
        ];
        return view('career', $data);
    }

    public function volunteer()
    {
        $data = [
            'page_title' => 'Volunteer'
        ];
        return view('volunteer', $data);
    }

    public function team()
    {
        $data = [
            'page_title' => 'Our Team'
        ];
        return view('team', $data);
    }

    public function contact()
    {
        $data = [
            'page_title' => 'Contact Us'
        ];
        return view('contact', $data);
    }

    public function history()
    {
        // $last_record = Post::latest()->first();
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        // $posts = Post::orderBy('id', 'desc')->take(4)->get();

        $data = [
            'page_title' => 'History',
            'posts' => $posts
        ];

        return view('history', $data);
    }

    public function visionMission()
    {
        // $last_record = Post::latest()->first();
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        // $posts = Post::orderBy('id', 'desc')->take(4)->get();

        $data = [
            'page_title' => 'Vision, Mission and Core Values',
            'posts' => $posts
        ];

        return view('vision_and_mission', $data);
    }

    public function latest()
    {
        // $last_record = Post::latest()->first();
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        // $posts = Post::orderBy('id', 'desc')->take(4)->get();

        $data = [
            'page_title' => 'Latest',
            'posts' => $posts
        ];

        return view('latest', $data);
    }
}
