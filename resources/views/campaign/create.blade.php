@extends('layouts.app')

@section('content')
    <div class="container main-content create-campaign-page">
        <div class="height-5"></div>
        <form action="/campaign" method="post">
            {{ csrf_field() }}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Setup Info</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-2 client-filter">
                            <p class="h5 content-title">Client</p>
                            {{--<input type="text" name="advertiser" class="form-control advertiser-field" placeholder="Filter by client">--}}
                            {{--<div class="filtered-data"></div>--}}
                        </div>
                        <div class="col-sm-5">
                            <p class="h5 content-title">Offer</p>
                            <input type="text" name="campaignname" class="form-control" value="" required>
                        </div>
                        <div class="col-sm-5 no-padding">
                            <ul class="flex-content setup-filters">
                                <li>
                                    <p class="h5 content-title uppercase">Api</p>
                                    <select name="apiallowed" class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </li>
                                <li class="pt-1">
                                    <p class="h5 content-title">Incent Allowed</p>
                                    <select name="incentallowed" class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </li>
                                <li class="pt-1">
                                    <p class="h5 content-title">Apply Allowed</p>
                                    <select name="allowpartnerapplication" class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="height-15">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="h5 content-title">Category</p>
                                <select name="categoryid" class="form-control">
                                    <option>Select...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <div class="height-10"></div>
                                <p class="h5 content-title">Countries</p>
                                <p>Not Selected</p>
                                <a href="#">select</a>
                            </div>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="h5 content-title">Account Manager</p>
                                        <select name="adminloginid" class="form-control">
                                            <option value="1">Gohar</option>
                                            <option value="2">Lusine</option>
                                            <option value="3">Darren</option>
                                            <option value="4">Vazgen</option>
                                        </select>
                                        <div class="height-10"></div>
                                        <p class="h5 content-title">Daily Cap</p>
                                        <div>
                                            <input name="dailycap" type="number" class="form-control">
                                            <p class="pull-right">(0:none)</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="h5 content-title">CM Rate</p>
                                        <div class="flex-content">
                                            <select name="currency" class="form-control">
                                                <option value="usd" selected>USD</option>
                                                <option value="gbp">GBP</option>
                                                <option value="eur">EUR</option>
                                            </select>
                                            <div>
                                                <input name="cpa" type="number" class="form-control">
                                            </div>

                                        </div>
                                        <div class="height-10"></div>
                                        <p class="h5 content-title">Total Cap</p>
                                        <div>
                                            <input name="totalcap" type="number" class="form-control">
                                            <p class="pull-right">(0:none)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <p class="h5 content-title">Partner Rate (default)</p>
                                <div class="flex-content">
                                    <select name="partner-currency" class="form-control partner-currency">
                                        <option value="usd" selected>USD</option>
                                        <option value="gbp">GBP</option>
                                        <option value="eur">EUR</option>
                                    </select>
                                    <input name="partnercpa" type="number" class="form-control partner-cpa">
                                </div>
                                <div class="height-10"></div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="h5 content-title">Cap Reached Action</p>
                                        <select class="form-control">
                                            <option>Allow Clicks</option>
                                            <option>Block</option>
                                            <option>Redirect, keep publisher</option>
                                            <option>Redirect, switch to internal</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="h5 content-title">Expired Action</p>
                                        <select class="form-control">
                                            <option>Allow Clicks</option>
                                            <option>Block</option>
                                            <option>Redirect, keep publisher</option>
                                            <option>Redirect, switch to internal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <p class="h5 content-title">Traffic Quality</p>
                                <div class="quality-info">
                                    <p><strong>default to advertiser setting</strong></p>
                                    <p>(use edit campaign to adjust)</p>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="h5 content-title">Geo Targeting</p>
                                        <select name="usegeotargeting" class="form-control">
                                            <option value="1">Use GEO Check</option>
                                            <option value="0">Skip GEO Check</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="h5 content-title">Event Attribution Info</p>
                                        <select name="payouttype" class="form-control">
                                            <option>Select ...</option>
                                            <option>Install and open (default)</option>
                                            <option>Registration</option>
                                            <option>Tutorial Complete</option>
                                            <option>In-App Purchase</option>
                                            <option>Level Complete</option>
                                            <option>1 click billing (SOI)</option>
                                            <option>2 click billing (DOI)</option>
                                            <option>3 day RR</option>
                                            <option>5 day RR</option>
                                            <option>7 day RR</option>
                                            <option>Other</option>
                                            <option>Level 1 Complete</option>
                                            <option>Level 2 Complete</option>
                                            <option>Level 3 Complete</option>
                                            <option>Level 4 Complete</option>
                                            <option>Level 5 Complete</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="h5 content-title">Postback placed on ...</p>
                                <div class="custom-checkbox">
                                    <ul>
                                        <li>
                                            <input name="Default" type="checkbox" value="Default" id="Default">
                                            <label for="Default" id="Default">Default</label>
                                        </li>
                                        <li>
                                            <input name="Event" type="checkbox" value="Event" id="Event">
                                            <label for="Event" id="Event">Event</label>
                                        </li>
                                        <li>
                                            <input name="Sale" type="checkbox" value="Sale" id="Sale">
                                            <label for="Sale" id="Sale">Sale</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <p class="h5 content-title">Campaign Type</p>
                                <ul class="gfield_radio campaign-type-selectors">
                                    <li>
                                        <input name="App" type="radio" value="App" id="App" data-campaigntype="app" checked>
                                        <label for="App" id="App">App</label>
                                    </li>
                                    <li>
                                        <input name="Web" type="radio" value="Web" data-campaigntype="web" id="Web">
                                        <label for="Web" id="Web">Web</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-2">
                                <p class="h5 content-title">Event Attribution Info</p>
                                <select class="form-control">
                                    <option>Select ...</option>
                                    <option>Install and open (default)</option>
                                    <option>Registration</option>
                                    <option>Tutorial Complete</option>
                                    <option>In-App Purchase</option>
                                    <option>Level Complete</option>
                                    <option>1 click billing (SOI)</option>
                                    <option>2 click billing (DOI)</option>
                                    <option>3 day RR</option>
                                    <option>5 day RR</option>
                                    <option>7 day RR</option>
                                    <option>Other</option>
                                    <option>Level 1 Complete</option>
                                    <option>Level 2 Complete</option>
                                    <option>Level 3 Complete</option>
                                    <option>Level 4 Complete</option>
                                    <option>Level 5 Complete</option>
                                </select>
                            </div>
                            <div class="col-sm-5">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="h5 content-title">Campaign Start Date</p>
                                        <input class="form-control date-filter" type="text" name="campaignstartdate" id="startDate" value="">
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="h5 content-title">Campaign End Date</p>
                                        <input class="form-control date-filter" type="text" name="campaignenddate" id="endDate" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="height-10"></div>
                        <div class="row">
                            <div class="col-sm-6 url-content">
                                <p class="h5 content-title">Default Advertiser URL</p>
                                <textarea name="url" class="form-control" required></textarea>
                                <p><a href="#">Placeholder Reference</a></p>
                            </div>
                            <div class="col-sm-6 url-content">
                                <p class="h5 content-title">Demo URL (if blank demo will use redirect URL)</p>
                                <textarea name="exampleurl" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="h5 content-title">Publisher Notes</p>
                                <textarea name="publishernotes" class="form-control"></textarea>
                            </div>
                            <div class="col-sm-6">
                                <p class="h5 content-title">Internal Notes</p>
                                <textarea name="notes" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default mobile-settings">
                <div class="panel-heading">
                    <h4>Mobile Settings</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <p class="h5 content-title">Platforms</p>
                            <div class="custom-checkbox">
                                <ul>
                                    <li>
                                        <input name="Android" type="checkbox" value="Android" id="Android">
                                        <label for="Android" id="Android">Android</label>
                                    </li>
                                    <li>
                                        <input name="IPhone" type="checkbox" value="IPhone" id="IPhone">
                                        <label for="IPhone" id="IPhone">IPhone</label>
                                    </li>
                                    <li>
                                        <input name="IPad" type="checkbox" value="IPad" id="IPad">
                                        <label for="IPad" id="IPad">IPad</label>
                                    </li>
                                    <li>
                                        <input name="IPod" type="checkbox" value="IPod" id="IPod">
                                        <label for="IPod" id="IPod">IPod</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <p class="h5 content-title">Device ID List</p>
                            <div class="custom-checkbox">
                                <ul>
                                    <li>
                                        <input name="AndroidID" type="checkbox" value="AndroidID" id="AndroidID">
                                        <label for="AndroidID" id="AndroidID">AndroidID</label>
                                    </li>
                                    <li>
                                        <input name="AndroidMD5" type="checkbox" value="AndroidMD5" id="AndroidMD5">
                                        <label for="AndroidMD5" id="AndroidMD5">AndroidMD5</label>
                                    </li>
                                    <li>
                                        <input name="GoogleAdID" type="checkbox" value="GoogleAdID" id="GoogleAdID">
                                        <label for="GoogleAdID" id="GoogleAdID">GoogleAdID</label>
                                    </li>
                                    <li>
                                        <input name="IDFA" type="checkbox" value="IDFA" id="IDFA">
                                        <label for="IDFA" id="AndroidMD5">IDFA</label>
                                    </li>
                                    <li>
                                        <input name="IMEI" type="checkbox" value="IMEI" id="IMEI">
                                        <label for="IMEI" id="AndroidMD5">IMEI</label>
                                    </li>
                                    <li>
                                        <input name="MacAddress" type="checkbox" value="MacAddress" id="MacAddress">
                                        <label for="MacAddress" id="MacAddress">MacAddress</label>
                                    </li>
                                    <li>
                                        <input name="ODIN.2" type="checkbox" value="ODIN" id="ODIN">
                                        <label for="ODIN" id="ODIN">ODIN</label>
                                    </li>
                                    <li>
                                        <input name="UDID" type="checkbox" value="UDID" id="UDID">
                                        <label for="UDID" id="UDID">UDID</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p class="h5 content-title">AppID or AjillionUID</p>
                            <input name="appid" type="text" class="form-control">
                        </div>
                        <div class="col-sm-5">
                            <p class="h5 content-title">Device ID Required</p>
                            <select class="form-control" name="deviceid">
                                <option>No</option>
                                <option>Yes</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <p class="h5 content-title">MinOSVersion</p>
                            <input name="minosversion" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Creative</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="h5 content-title">Offer Title</p>
                            <input name="offertitle" type="text" class="form-control">
                            <div class="height-5"></div>
                            <p class="h5 content-title">Offer Description</p>
                            <textarea name="offertext" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="height-10"></div>
            <input type="submit" class="btn crunchie-btn pull-right" value="Create Campaign">
            <div class="height-35"></div>
        </form>
    </div>
    <script src="{{ asset('js/campaigns/campaign.js') }}"></script>
@endsection