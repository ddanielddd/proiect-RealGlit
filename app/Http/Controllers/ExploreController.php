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
        
        $search =request()->query('search');

        if ($search) {
            
           $posts=Post::where('caption', 'LIKE', '%' . $search . '%')->latest()->paginate(24);
        } else{
            $posts= Post::latest()->paginate(4);
        }
        
        return view('posts.explore', compact('posts'));
    }
}