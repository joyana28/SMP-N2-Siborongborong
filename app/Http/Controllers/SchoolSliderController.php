<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolSliderController extends Controller
{
    /**
     * Display the school slider view
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Data for the slides can be loaded from database
        $slides = [
            [
                'title' => 'At Jakarta Intercultural School, students are challenged to be reflective and creative',
                'image' => 'images/school/performance.jpg',
                'alt' => 'Students performing'
            ],
            [
                'title' => 'To have experiences that instill resilience and resourcefulness',
                'image' => 'images/school/playground.jpg',
                'alt' => 'School playground'
            ]
            // Add more slides as needed
        ];
        
        return view('school.slider', compact('slides'));
    }
}