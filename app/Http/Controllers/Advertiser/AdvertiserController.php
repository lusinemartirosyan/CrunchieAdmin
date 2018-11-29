<?php

namespace App\Http\Controllers\Advertiser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Advertisers\Advertiser;
use App\AccountManager;
use DB;
use Auth;
use Session;
use Redirect;


class AdvertiserController extends Controller
{
    public function __construct()
    {
        $this->objAdvertiser = new Advertiser;
    }

    public function index()
    {
        $aryFilters = \Request::all();
        if(empty($aryFilters))
        {
            $objAllAdvertisers = Advertiser::with('account')->get();
        }
        else
        {
//            DB::enableQueryLog();
            $objAllAdvertisers = Advertiser::with('account');

            if(isset($aryFilters['trafficquality']))
            {

                $objAllAdvertisers->Where('trafficquality', '=', $aryFilters['trafficquality']);
            }
            if(isset($aryFilters['accountmanager']))
            {
                $objAllAdvertisers->Where('accountmanagerid', '=', $aryFilters['accountmanager']);
            }
            $objAllAdvertisers = $objAllAdvertisers->get();
//            dd(DB::getQueryLog());

        }

        $objAccounts = AccountManager::all();
        $objAllAdvertisers->allManangers = $objAccounts;

        return view('advertiser.list', compact('objAllAdvertisers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('advertiser.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $intAccountManager = Auth::user()->id;
        $objData =  $request->except('_token');
        $objData['accountmanagerid'] = $intAccountManager;

        $this->validate(request(),[

            ]
        );
        Advertiser::create($objData);
        Session::flash('message', 'Advetiser created successfully!');
        return Redirect::to('/advertiser');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->objAdvertiser->find($id);
        return view('advertiser.create', ['data' => $data]);

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
        $objData =  $request->except('_token', '_method');
        $query = DB::table('advertiser')
            ->where('advertiserid', $id)
            ->update($objData);
        if($query)
        {
            Session::flash('message', 'Advetiser updated successfully!');
        }
        return Redirect::to('/advertiser');
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

}
