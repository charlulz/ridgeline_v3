<?php

namespace App\Livewire;

use Livewire\Component;

class Testimonials extends Component
{
    public $testimonials = [
        [
            'name' => 'Sarah Johnson',
            'location' => 'Your City, ST',
            'rating' => 5,
            'text' => 'Ridge Line Roofing did an excellent job replacing our roof. The team was professional, punctual, and the quality of work was outstanding. Highly recommended!',
            'service' => 'Residential Roof Replacement'
        ],
        [
            'name' => 'Mike Chen',
            'location' => 'Neighboring City, ST',
            'rating' => 5,
            'text' => 'We had storm damage and needed emergency repairs. Ridge Line Roofing responded quickly and fixed the issue the same day. Great service!',
            'service' => 'Emergency Repair'
        ],
        [
            'name' => 'Lisa Rodriguez',
            'location' => 'Metro Area, ST',
            'rating' => 5,
            'text' => 'Professional installation of our new commercial roof. The project was completed on time and within budget. Very satisfied with the results.',
            'service' => 'Commercial Installation'
        ],
        [
            'name' => 'David Thompson',
            'location' => 'Your City, ST',
            'rating' => 5,
            'text' => 'Regular maintenance service keeps our roof in great condition. The team is knowledgeable and always provides helpful advice.',
            'service' => 'Roof Maintenance'
        ]
    ];

    public function render()
    {
        return view('livewire.testimonials');
    }
}
