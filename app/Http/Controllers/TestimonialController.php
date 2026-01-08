<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $featured = Testimonial::approved()->featured()->ordered()->first();
        $testimonials = Testimonial::approved()->ordered()->get();

        return view('testimonials.index', compact('testimonials', 'featured'));
    }
}
