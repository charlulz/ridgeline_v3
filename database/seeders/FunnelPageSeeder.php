<?php

namespace Database\Seeders;

use App\Models\FunnelPage;
use Illuminate\Database\Seeder;

class FunnelPageSeeder extends Seeder
{
    public function run(): void
    {
        // Storm Damage Emergency Funnel
        FunnelPage::updateOrCreate(
            ['slug' => 'storm-damage-emergency'],
            [
                'name' => 'Storm Damage Emergency',
                'campaign_name' => 'storm_damage_2024',
                'headline' => "Storm Damage?\nGet Emergency Roof Repair Now",
                'subheadline' => 'Don\'t wait for more damage. Our emergency response team is standing by 24/7 to protect your home from further storm damage.',
                'content' => "## Why Immediate Action Matters

After a storm, every hour counts. Water damage can spread quickly, causing expensive structural damage and mold growth. Our emergency response team can:

- **Same-Day Response**: We'll be at your property within hours
- **Temporary Protection**: Immediate tarping and emergency repairs
- **Full Assessment**: Complete inspection to identify all damage
- **Insurance Coordination**: We work directly with your insurance company
- **Permanent Solution**: Complete roof replacement using premium materials

## What to Do Right Now

1. **Document the Damage**: Take photos before making any temporary repairs
2. **Call Us Immediately**: (304) 381-1122 - Available 24/7
3. **Prevent Further Damage**: We'll secure your roof with professional tarping
4. **Work with Insurance**: Our team handles all insurance paperwork

## Our Storm Damage Process

**Step 1: Emergency Response** - Immediate tarping and temporary repairs
**Step 2: Complete Assessment** - Detailed inspection and documentation
**Step 3: Insurance Claim** - We handle all paperwork and coordination
**Step 4: Quality Repair** - Professional roof replacement with premium materials
**Step 5: Peace of Mind** - Comprehensive warranty on all work",
                'hero_image' => 'hero-roof-replacement-worker.jpg',
                'form_type' => 'emergency',
                'offer_details' => [
                    'badge' => 'Storm Damage Alert - Act Now!',
                    'urgency' => [
                        'Same-Day Emergency Response',
                        'Free Insurance Claim Assistance',
                        '24/7 Available',
                    ],
                ],
                'thank_you_page' => 'thank-you.emergency',
                'active' => true,
                'track_conversions' => true,
                'meta_title' => 'Storm Damage Emergency Roof Repair | Ridgeline Roofing',
                'meta_description' => 'Emergency storm damage roof repair available 24/7. Same-day response, free insurance claim assistance. Call (304) 381-1122 now.',
            ]
        );

        // Spring Roofing Special Funnel
        FunnelPage::updateOrCreate(
            ['slug' => 'spring-roofing-special'],
            [
                'name' => 'Spring Roofing Special',
                'campaign_name' => 'spring_special_2024',
                'headline' => "Spring Roofing Special\nSave Up to $500 on Your Project",
                'subheadline' => 'Get your roof ready for spring storms. Limited-time offer: Free inspection + $500 off any roof replacement or major repair.',
                'content' => "## Spring Special Offer

**Limited Time**: This offer expires at the end of spring 2024

- **Free Roof Inspection** ($300 value)
- **$500 Off** any roof replacement or major repair
- **No Interest Financing** available for qualified customers
- **Extended Warranty** on all spring installations

## Why Spring is the Perfect Time

- **Before Storm Season**: Protect your home before severe weather hits
- **Optimal Weather**: Perfect conditions for installation
- **Better Scheduling**: More availability before the busy summer season
- **Energy Savings**: New roof improves efficiency before summer heat

## What's Included

✓ Complete roof inspection and assessment
✓ Detailed written estimate
✓ Professional installation by certified roofers
✓ Quality materials from trusted manufacturers
✓ Comprehensive warranty coverage
✓ Clean-up and debris removal

## Our Spring Process

1. **Free Inspection** - Thorough assessment of your roof
2. **Detailed Quote** - Transparent pricing with your discount applied
3. **Professional Installation** - Expert workmanship guaranteed
4. **Final Inspection** - Quality assurance check
5. **Warranty Activation** - Full coverage protection",
                'hero_image' => 'hero-roof-replacement-worker.jpg',
                'form_type' => 'inspection',
                'offer_details' => [
                    'badge' => 'Spring Special - Limited Time',
                    'urgency' => [
                        'Free Inspection ($300 Value)',
                        '$500 Off Any Project',
                        'No Interest Financing Available',
                    ],
                ],
                'thank_you_page' => 'thank-you.inspection',
                'active' => true,
                'track_conversions' => true,
                'meta_title' => 'Spring Roofing Special - $500 Off | Ridgeline Roofing',
                'meta_description' => 'Spring roofing special: Free inspection + $500 off. Limited time offer. Call (304) 381-1122 for your free estimate.',
            ]
        );

        // Insurance Claim Assistance Funnel
        FunnelPage::updateOrCreate(
            ['slug' => 'insurance-claim-assistance'],
            [
                'name' => 'Insurance Claim Assistance',
                'campaign_name' => 'insurance_claims_2024',
                'headline' => "Roof Damage?\nWe Handle Your Insurance Claim",
                'subheadline' => 'Don\'t navigate the insurance process alone. Our experienced team handles everything from claim filing to final payment - at no extra cost to you.',
                'content' => "## Why Choose Our Insurance Claim Service?

**Zero Stress for You** - We handle all the paperwork and phone calls
**Maximum Coverage** - We fight to get you every dollar you deserve
**No Upfront Costs** - We work directly with your insurance company
**Faster Processing** - Our expertise speeds up claim approval
**Quality Work** - We use premium materials approved by insurance

## Our Insurance Claim Process

### Step 1: Free Inspection
We'll thoroughly inspect your roof and document all damage with photos and detailed reports.

### Step 2: File Your Claim
We'll help you file the claim properly, ensuring all necessary documentation is included.

### Step 3: Insurance Adjuster Meeting
We'll meet with your adjuster to ensure all damage is properly documented and covered.

### Step 4: Negotiation
If needed, we'll negotiate with your insurance company to maximize your coverage.

### Step 5: Professional Repair
Once approved, we'll complete the work using insurance-approved materials and methods.

## What We Handle

✓ Complete roof inspection and documentation
✓ Insurance claim filing and paperwork
✓ Adjuster meeting coordination
✓ Claim negotiation if needed
✓ Professional repair or replacement
✓ Final inspection and claim closure

## Common Insurance Questions

**Q: Will this cost me anything?**
A: No! We work directly with your insurance company. You only pay your deductible.

**Q: How long does the process take?**
A: Typically 2-4 weeks from claim filing to completion, depending on your insurance company.

**Q: What if my claim is denied?**
A: We'll help you appeal and provide additional documentation to support your claim.

**Q: Do you work with all insurance companies?**
A: Yes! We work with all major insurance providers.",
                'hero_image' => 'hero-roof-replacement-worker.jpg',
                'form_type' => 'inspection',
                'offer_details' => [
                    'badge' => 'Insurance Claim Assistance Available',
                    'urgency' => [
                        'Free Claim Filing Service',
                        'No Upfront Costs',
                        'Faster Processing',
                    ],
                ],
                'thank_you_page' => 'thank-you.inspection',
                'active' => true,
                'track_conversions' => true,
                'meta_title' => 'Insurance Claim Assistance | Ridgeline Roofing',
                'meta_description' => 'We handle your insurance claim from start to finish. Free service, no upfront costs. Call (304) 381-1122.',
            ]
        );

        // Commercial Roofing Special Funnel
        FunnelPage::updateOrCreate(
            ['slug' => 'commercial-roofing-special'],
            [
                'name' => 'Commercial Roofing Special',
                'campaign_name' => 'commercial_2024',
                'headline' => "Commercial Roofing Solutions\nMinimize Downtime, Maximize Value",
                'subheadline' => 'Expert commercial roofing services designed to keep your business running. Fast installation, minimal disruption, maximum protection.',
                'content' => "## Why Choose Ridgeline for Commercial Roofing?

**Minimal Business Disruption** - We work around your schedule
**Fast Turnaround** - Projects completed on time, every time
**Licensed & Insured** - Full commercial insurance coverage
**Competitive Pricing** - Fair, transparent pricing
**Quality Materials** - Commercial-grade roofing systems
**Ongoing Support** - Maintenance and warranty service

## Commercial Roofing Services

- **Flat Roof Systems** - EPDM, TPO, and modified bitumen
- **Metal Roofing** - Long-lasting commercial metal systems
- **Roof Repairs** - Fast response for urgent issues
- **Roof Maintenance** - Preventative maintenance programs
- **Roof Replacement** - Complete commercial replacements
- **Project Management** - Full-service coordination

## Our Commercial Process

1. **Free Consultation** - Assessment of your commercial property
2. **Detailed Proposal** - Comprehensive quote with timeline
3. **Minimal Disruption** - Work scheduled around your business
4. **Professional Installation** - Certified commercial roofers
5. **Quality Assurance** - Final inspection and warranty

## Industries We Serve

✓ Retail Stores
✓ Office Buildings
✓ Warehouses
✓ Manufacturing Facilities
✓ Healthcare Facilities
✓ Educational Institutions
✓ Multi-Unit Properties

## Why Act Now?

- **Prevent Costly Repairs** - Early action saves money
- **Avoid Business Interruption** - Scheduled maintenance prevents emergencies
- **Tax Benefits** - Roof improvements may be tax-deductible
- **Energy Savings** - New roofs improve efficiency",
                'hero_image' => 'hero-roof-replacement-worker.jpg',
                'form_type' => 'quote',
                'offer_details' => [
                    'badge' => 'Commercial Special - Free Consultation',
                    'urgency' => [
                        'Free Commercial Assessment',
                        'Minimal Business Disruption',
                        'Fast Professional Service',
                    ],
                ],
                'thank_you_page' => 'thank-you',
                'active' => true,
                'track_conversions' => true,
                'meta_title' => 'Commercial Roofing Services | Ridgeline Roofing',
                'meta_description' => 'Expert commercial roofing services. Minimal downtime, fast installation, competitive pricing. Call (304) 381-1122.',
            ]
        );

        // Urgent Leak Repair Funnel
        FunnelPage::updateOrCreate(
            ['slug' => 'urgent-leak-repair'],
            [
                'name' => 'Urgent Leak Repair',
                'campaign_name' => 'leak_repair_2024',
                'headline' => "Roof Leak?\nEmergency Repair Available Now",
                'subheadline' => 'Don\'t let a leak cause thousands in water damage. Our emergency leak repair team responds within hours to stop the damage.',
                'content' => "## Why Immediate Leak Repair Matters

**Water Damage Spreads Fast** - Every hour counts
**Prevent Mold Growth** - Stop moisture before it causes health issues
**Save Money** - Early repair prevents expensive structural damage
**Protect Belongings** - Prevent damage to your home and possessions
**Peace of Mind** - Professional emergency response 24/7

## Our Emergency Leak Response

- **24/7 Availability** - We're always ready to help
- **Same-Day Service** - Response within hours, not days
- **Temporary Fixes** - Immediate protection while we plan permanent solution
- **Complete Assessment** - Find all leaks, not just the obvious one
- **Permanent Repair** - Long-lasting solutions, not quick patches

## What Causes Roof Leaks?

- **Storm Damage** - Wind, hail, and heavy rain
- **Age & Wear** - Old roofs develop leaks over time
- **Poor Installation** - Shoddy workmanship causes problems
- **Missing Shingles** - Exposed areas let water in
- **Flashing Issues** - Improper sealing around vents and chimneys
- **Gutter Problems** - Clogged gutters cause water backup

## Our Leak Repair Process

1. **Emergency Response** - Immediate temporary protection
2. **Complete Inspection** - Find the source and extent of damage
3. **Water Damage Assessment** - Check for interior damage
4. **Permanent Repair** - Quality fix that lasts
5. **Follow-Up** - Ensure problem is completely resolved

## Don't Wait - Act Now

Every moment you wait, water damage spreads. Call us immediately for emergency leak repair.",
                'hero_image' => 'hero-roof-replacement-worker.jpg',
                'form_type' => 'emergency',
                'offer_details' => [
                    'badge' => 'Urgent Leak Repair - Act Now!',
                    'urgency' => [
                        '24/7 Emergency Response',
                        'Same-Day Service',
                        'Prevent Water Damage',
                    ],
                ],
                'thank_you_page' => 'thank-you.emergency',
                'active' => true,
                'track_conversions' => true,
                'meta_title' => 'Emergency Leak Repair | Ridgeline Roofing',
                'meta_description' => 'Emergency roof leak repair available 24/7. Same-day response. Prevent water damage. Call (304) 381-1122 now.',
            ]
        );
    }
}
