<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Testimoni;
class LandingPageController extends Controller
{
   
    public function index()
    {
    $testimonials = Testimoni::latest()->take(10)->get(); // ambil 10 testimoni terbaru
    return view('landingpage.index', compact('testimonials'));
    }
}
