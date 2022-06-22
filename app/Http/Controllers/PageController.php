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
            'homeImgUrl' => asset('images/homepage.png'),
            'phoneUrl'   => asset('images/phone.png'),
            'logoUrl'    => asset('images/victory_blue.png'),
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
            'logoUrl'      => asset('images/victory_blue.png'),
            'givingImgUrl' => asset('images/giving_updated.jpeg'),
            'pkCAB'        => base64_encode(env('PAYMAYA_PK_CAB') . ':'),
            'pkCAL'        => base64_encode(env('PAYMAYA_PK_CAL') . ':'),
            'pkLB'         => base64_encode(env('PAYMAYA_PK_LB') . ':'),
            'pkSL'         => base64_encode(env('PAYMAYA_PK_SL') . ':'),
            'pkSP'         => base64_encode(env('PAYMAYA_PK_SP') . ':'),
            'pkSC'         => base64_encode(env('PAYMAYA_PK_SC') . ':'),
            'gcashCABQR'   => asset('images/gcash_cabuyao.png'),
            'gcashCALQR'   => asset('images/gcash_calamba.png'),
            'gcashLBQR'    => asset('images/gcash_losbanos.png'),
            'gcashSLQR'    => asset('images/gcash_siniloan.png'),
            'gcashSPQR'    => asset('images/gcash_sanpablo.png'),
            'gcashSCQR'    => asset('images/gcash_stacruz.png'),
            'mayaCABQR'    => asset('images/maya_cabuyao.png'),
            'mayaCALQR'    => asset('images/maya_calamba.png'),
            'mayaLBQR'     => asset('images/maya_losbanos.png'),
            'mayaSLQR'     => asset('images/maya_siniloan.png'),
            'mayaSPQR'     => asset('images/maya_sanpablo.png'),
            'mayaSCQR'     => asset('images/maya_stacruz.png'),
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
            'homeImgUrl' => asset('images/homepage.png'),
            'logoUrl'    => asset('images/victory_blue.png'),
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
            'homeImgUrl' => asset('images/homepage.png'),
            'logoUrl'    => asset('images/victory_blue.png'),
        ];

        return Inertia::render('HomePage/ContactUs', $data);
    }
}