<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{

    /**
     * Fetch Home Page aka the Give Page
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

        return Inertia::render('HomePage/Index', $data);
    }

    /**
     * Fetch Who We Are page
     *
     * @param Request $request
     * @return void
     */
    public function whoWeAre(Request $request)
    {
        $data = [
            'homeImgUrl' => asset('giving-site/homepage.png'),
            'logoUrl'    => asset('giving-site/victory_blue.png'),
        ];

        return Inertia::render('HomePage/WhoWeAre', $data);
    }

    /**
     * Fetch Contact Us page
     *
     * @param Request $request
     * @return void
     */
    public function contactUs(Request $request)
    {
        $data = [
            'homeImgUrl' => asset('giving-site/homepage.png'),
            'logoUrl'    => asset('giving-site/victory_blue.png'),
        ];

        return Inertia::render('HomePage/ContactUs', $data);
    }
}