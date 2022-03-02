<?php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ExploreController extends Controller
{
    public function index()
    {
        $posts= Post::latest()->paginate(24);
        
        return view('posts.explore', compact('posts'));
    }
}