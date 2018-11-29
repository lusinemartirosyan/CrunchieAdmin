<?php

namespace App\Http\Controllers\Campaign;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CampaignController extends Controller
{
    public function CampaignList()
    {
        return view('campaign.list');
    }
    public function GenerateLinks()
    {
        return view('campaign.generatelinks');
    }
    public function TestPartnerLink()
    {
        return view('campaign.testpartnerlink');
    }
    public function CrunchiePixels()
    {
        return view('campaign.crunchiepixels');
    }
    public function SystemChanges()
    {
        return view('campaign.systemchanges');
    }
    public function Scrubs()
    {
        return view('campaign.scrubs');
    }
    public function InvoicingManage()
    {
        return view('campaign.invoicingmanage');
    }
    public function InvoicingView()
    {
        return view('campaign.invoicingview');
    }
}
