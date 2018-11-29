<?php

namespace App\Http\Controllers\Publisher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Publishers\Publisher;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->objPublisher = new Publisher;
    }

    public function index()
    {
        $objAllPublishers = $this->objPublisher->all();
        return view('publisher.list', compact('objAllPublishers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        echo str_random(8);exit;
        $strPassword = uniqid();
        return view('publisher.create', ['strPassword' => $strPassword]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd(request()->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function PlacementStats()
    {
        return view('publisher.placementstats');
    }

    public function PlacementMissing()
    {
        return view('publisher.placementmissing');
    }

    public function ApiRequestLog()
    {
        return view('publisher.placementMissing');
    }

}
