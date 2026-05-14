<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    public function residential()
    {
        return view('services.residential');
    }

    public function commercial()
    {
        return view('services.commercial');
    }

    public function shingleReplacement()
    {
        return view('services.residential.shingle-roof-replacement');
    }

    public function rubberReplacement()
    {
        return view('services.residential.rubber-roof-replacement');
    }

    public function rolledRoofingReplacement()
    {
        return view('services.residential.rolled-roofing-low-slope-replacement');
    }

    // Residential Roof Repair
    public function shingleRepair()
    {
        return view('services.residential.shingle-roof-repair');
    }

    public function rubberRepair()
    {
        return view('services.residential.rubber-roof-repair');
    }

    public function metalRepair()
    {
        return view('services.residential.metal-roof-repair');
    }

    // Additional Residential Replacement
    public function metalReplacement()
    {
        return view('services.residential.metal-roof-replacement');
    }

    public function designerShingleReplacement()
    {
        return view('services.residential.designer-shingle-replacement');
    }

    // Residential Gutters & Additional Services
    public function seamlessGutters()
    {
        return view('services.residential.seamless-gutters');
    }

    public function chimneyFlashing()
    {
        return view('services.residential.chimney-flashing-reflashing');
    }

    public function residentialSiding()
    {
        return view('services.residential.siding');
    }

    public function residentialSkylights()
    {
        return view('services.residential.skylight-repair-replacement');
    }

    // Commercial Services - Replacement
    public function commercialShingleReplacement()
    {
        return view('services.commercial.shingle-roof-replacement');
    }

    public function commercialFlatReplacement()
    {
        return view('services.commercial.rubber-roof-replacement');
    }

    public function commercialMetalReplacement()
    {
        return view('services.commercial.metal-roof-replacement');
    }

    // Commercial Services - Repair
    public function commercialShingleRepair()
    {
        return view('services.commercial.shingle-roof-repair');
    }

    public function commercialRubberRepair()
    {
        return view('services.commercial.rubber-roof-repair');
    }

    public function commercialMetalRepair()
    {
        return view('services.commercial.metal-roof-repair');
    }

    // Commercial Additional Services
    public function commercialGutters()
    {
        return view('services.commercial.seamless-5-gutters');
    }

    public function commercialRoofDeck()
    {
        return view('services.commercial.roof-deck-repair');
    }

    public function commercialSiding()
    {
        return view('services.commercial.siding');
    }
}
