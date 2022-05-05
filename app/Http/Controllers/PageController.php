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
     * @return Inertia
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
     * Fetch Give Page w/ details
     *
     * @param Request $request
     * @return Inertia
     */
    public function give(Request $request)
    {
        $data = [
            'appUrl'       => env('APP_URL'),
            'payMayaUrl'   => env('PAYMAYA_URL'),
            'logoUrl'      => asset('giving-site/victory_blue.png'),
            'givingImgUrl' => asset('giving-site/giving_updated.jpg'),
            'pkCAL'        => base64_encode(env('PAYMAYA_PK_CAL') . ':'),
            'pkLB'         => base64_encode(env('PAYMAYA_PK_LB') . ':'),
            'pkSP'         => base64_encode(env('PAYMAYA_PK_SP') . ':'),
            'pkSC'         => base64_encode(env('PAYMAYA_PK_SC') . ':'),
            'gcashCALQR'   => asset('giving-site/gcash_calamba.jpeg'),
            'gcashLBQR'    => asset('giving-site/gcash_losbanos.jpeg'),
            'gcashSPQR'    => asset('giving-site/gcash_sanpablo.jpeg'),
            'gcashSCQR'    => asset('giving-site/gcash_stacruz.jpeg'),
        ];

        return Inertia::render('HomePage/Give', $data);
    }

    /**
     * Fetch Who We Are page
     *
     * @param Request $request
     * @return Inertia
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
     * @return Inertia
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