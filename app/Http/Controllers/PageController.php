<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $data = [
            'homeImgUrl' => asset('giving-site/homepage.png'),
            'phoneUrl'   => asset('giving-site/phone.png'),
            'logoUrl'    => asset('giving-site/victory_blue.png'),
        ];

        return Inertia::render('Dashboard/Index', $data);
    }
}