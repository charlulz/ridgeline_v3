<?php

namespace App\Livewire\Admin;

use App\Models\Lead;
use App\Models\BlogPost;
use App\Models\FunnelPage;
use App\Models\Testimonial;
use App\Services\LeadService;
use Livewire\Component;

class DashboardOverview extends Component
{
    public function render(LeadService $leadService)
    {
        $stats = [
            'leads' => [
                'total' => Lead::count(),
                'new' => Lead::where('status', 'new')->count(),
                'contacted' => Lead::where('status', 'contacted')->count(),
                'qualified' => Lead::where('status', 'qualified')->count(),
                'scheduled' => Lead::where('status', 'scheduled')->count(),
                'closed_won' => Lead::where('status', 'closed_won')->count(),
                'high_priority' => Lead::where('lead_score', '>=', 50)->where('status', 'new')->count(),
            ],
            'blog' => [
                'total' => BlogPost::count(),
                'published' => BlogPost::where('published', true)->count(),
                'draft' => BlogPost::where('published', false)->count(),
            ],
            'funnels' => [
                'total' => FunnelPage::count(),
                'active' => FunnelPage::where('active', true)->count(),
                'total_views' => FunnelPage::sum('views'),
                'total_conversions' => FunnelPage::sum('conversions'),
            ],
            'testimonials' => [
                'total' => Testimonial::count(),
                'approved' => Testimonial::where('approved', true)->count(),
                'featured' => Testimonial::where('featured', true)->count(),
            ],
        ];

        $recentLeads = Lead::orderBy('created_at', 'desc')->limit(10)->get();
        $recentBlogPosts = BlogPost::orderBy('created_at', 'desc')->limit(5)->get();

        return view('livewire.admin.dashboard-overview', compact('stats', 'recentLeads', 'recentBlogPosts'));
    }
}
