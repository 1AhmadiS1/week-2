<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }


    public function home() {
        $header = "Follow us on Instagram";
        return view("home", compact('header'));
    }
public function about(){
$header="";
return view("about",compact("header"));

}
public function services() {
    $services = [
        ['title' => 'Content Creation', 'description' => 'Custom visuals and storytelling that capture your unique style and message.'],
        ['title' => 'Social Media Management', 'description' => 'Strategic planning and execution to grow your follower base and engagement.'],
        ['title' => 'Brand Consulting', 'description' => 'Tailored advice to help you build a consistent and authentic online presence.'],
        ['title' => 'Workshops & Training', 'description' => 'Interactive sessions to empower you with the latest trends and tools in social media.'],
        ['title' => 'Collaborations & Partnerships', 'description' => 'Connecting you with influencers and brands to expand your reach.'],
    ];
    return view('services', compact('services'));
}
public function contact(){
    return view("contact");
}

public function submit(Request $request)
{
    $validated = $request->validate([
        'username' => 'required|string|max:255',
        'message' => 'required|string|max:1000',
    ]);

    return redirect()->route('contact')->with('success', 'Your message was sent successfully!');
}

}
