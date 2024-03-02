<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        dd(Listing::where("beds", ">", 4)->get());
        return inertia(
            'Index/Index',
            [
                'message' => 'Hello from Jan'
            ]
        );
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
