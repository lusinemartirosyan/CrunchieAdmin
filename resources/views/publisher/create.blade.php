@extends('layouts.app')

@section('content')
    <div class="container main-content publisher-create">
        <div class="height-20"></div>
        <form action="{{  isset($data) ? route('publisher.update', ['id' => $data->publisherid]) : route('publisher.store') }}" method="POST">
            {{ csrf_field() }}
            {{ isset($data) ? method_field('PATCH') : '' }}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="light-title">General</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            {{--<p class="h5 content-title">PartnerID</p>--}}
                            {{--<input name="" type="text" class="form-control">--}}
                            <p class="h5 content-title">Username</p>
                            <input name="username" type="text" class="form-control" value="">
                            <p class="h5 content-title">Account Manager</p>
                            <select name="accountmanagerid" class="form-control">
                                <option>Select...</option>
                                <option value=1>Gohar</option>
                                <option value=2>Lusine</option>
                            </select>
                            <div class="row">
                                <div class="col-sm-8">
                                    <p class="h5 content-title">Invoice Period</p>
                                    <select name="invoiceperiod" class="form-control">
                                        <option value="monthly">Monthly</option>
                                        <option value="weekly">Weekly</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <p class="h5 content-title">Invoice Terms</p>
                                    <input name="invoiceterms" type="number" class="form-control" value="30"><span class="pull-right">days</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p class="h5 content-title">Name</p>
                            <input name="publishername" type="text" class="form-control" value="">
                            <p class="h5 content-title">Password</p>
                            <input name="password" type="text" class="form-control" value="{{ $strPassword }}">
                            <p class="h5 content-title">Traffic Quality</p>
                            <select name="trafficquality" class="form-control">
                                <option>Select...</option>
                                <option value="6">Custom Inclusion Only</option>
                                <option value="5">5 - Excellent</option>
                                <option value="4">4 - Good</option>
                                <option value="3">3 - Medium</option>
                                <option value="2">2 - Low</option>
                                <option value="1">1 - Poor</option>
                            </select>
                            <p class="h5 content-title">Vault Daily Revenue Cap</p>
                            <input name="currency" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="h5 content-title">Invoice Creation</p>
                            <div class="radio">
                                <label><input type="radio" value="system" name="invoicecreation" checked>System generated on stats approval</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="manual" name="invoicecreation">Manual creation from publisher invoice</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <p class="h5 content-title">Geo Targeting</p>
                            <div class="radio">
                                <label><input type="radio" value=1 name="geotargeting" checked>Redirect on invalid GeoIP</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value=0 name="geotargeting">Skip GeoIP Check</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <p class="h5 content-title">IP Dupe Checks</p>
                            <div class="radio">
                                <label><input type="radio" value=1 name="ipdupechecks" checked>
                                    Reject duplicate install on IPAddress+Campaign <span class="green-txt">(recommended)</span>
                                </label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value=0 name="ipdupechecks">Allow duplicate install on IPAddress+Campaign</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="light-title">Campaign Listing</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="h5 content-title">Show App Campaigns</p>
                            <ul class="gfield_radio">
                                <li>
                                    <input name="appcampaigns" type="radio" value=1 id="app-yes">
                                    <label for="app-yes">Yes</label>
                                </li>
                                <li>
                                    <input name="appcampaigns" type="radio" value=0 id="app-no">
                                    <label for="app-no">No</label>
                                </li>
                            </ul>
                            <p class="h5 content-title">Categories</p>
                            <div class="checkbox">
                                <label><input type="checkbox" value="" checked> All Categories or limit to:</label>
                                <div class="categories-list sm-content">
                                    <ul class="list-group">
                                        <li class="list-group-item">First item</li>
                                        <li class="list-group-item">Second item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                    </ul>
                                </div>
                            </div>
                            <p class="h5 content-title">Show Incent Campaigns</p>
                            <select class="form-control" name="incentcampaigns">
                               <option value=1>Yes</option>
                                <option value=0>No</option>
                            </select>
                            <p class="h5 content-title">Main Promotional Channel</p>
                            <select class="form-control" name="promotionalchannel">
                                <option value="">Select...</option>
                                <option value="email">Email</option>
                                <option value="ppc">PPC</option>
                                <option value="seo">SEO</option>
                                <option value="website">Website</option>
                                <option value="blod">Blog</option>
                                <option value="forum">Forum</option>
                                <option value="banners">Banners</option>
                                <option value="socialnetworks">SocialNetworks</option>
                                <option value="adnetworks">AdNetworks</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <p class="h5 content-title">Show Web Campaigns</p>
                            <ul class="gfield_radio">
                                <li>
                                    <input name="web" type="radio" value=1 name="webcampaigns" id="web-yes">
                                    <label for="web-yes">Yes</label>
                                </li>
                                <li>
                                    <input name="web" type="radio" value=0 name="webcampaigns" id="web-no">
                                    <label for="web-no">No</label>
                                </li>
                            </ul>
                            <p class="h5 content-title">Countries</p>
                            <div class="checkbox">
                                <label><input type="checkbox" name="country" value="" checked>All Countries or limit to:</label>
                                <div class="countries-list sm-content">
                                    <ul class="list-group">
                                        <li class="list-group-item">First item</li>
                                        <li class="list-group-item">Second item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                    </ul>
                                </div>
                            </div>
                            <p class="h5 content-title">Show Non-Incent Campaigns</p>
                            <select class="form-control" name="nonincentcampaigns">
                                <option value=1>Yes</option>
                                <option value=0>No</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12">
                            <p class="h5 content-title">Exclude Campaigns (comma seperated list)</p>
                            <textarea name="exludedcampaigns" class="form-control"></textarea>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 global-postback">
                            <p class="h5 content-title">Global Postback</p>
                            <div class="flex-content">
                                <span>Type: </span>
                                <select name="postbacktype" class="form-control">
                                    <option value="postback">Postback</option>
                                    <option value="html">Html</option>
                                </select>
                            </div>
                            <div class="height-5"></div>
                            <textarea name="postback" class="form-control"></textarea>
                            <a href="#">
                                Postback Placeholder Reference
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="light-title">Main Contact</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="h5 content-title">Name</p>
                            <input name="firstname" type="text" class="form-control" value="">
                            <p class="h5 content-title">Email</p>
                            <input name="email" type="email" class="form-control">
                            <p class="h5 content-title">Mobile</p>
                            <input name="mobile" type="number" class="form-control">
                            <p class="h5 content-title">Address</p>
                            <textarea name="address1" class="form-control"></textarea>
                        </div>
                        <div class="col-sm-6">
                            <p class="h5 content-title">Position</p>
                            <input name="title" type="text" class="form-control" value="">
                            <p class="h5 content-title">Telephone</p>
                            <input name="telephone" type="number" class="form-control" value="">
                            <p class="h5 content-title">Fax</p>
                            <input name="fax" type="number" class="form-control">
                            <p class="h5 content-title">Receive System Notifications</p>
                            <div class="radio">
                                <label><input type="radio" name="receivenotifications" value=1>Yes</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="receivenotifications" value=0>No</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="height-20"></div>
            <div class="flex-content">
               <input type="submit" value="Create Partner">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="goToEdit">
                    <label class="form-check-label" for="goToEdit">Go to Edit</label>
                </div>
            </div>
        </form>
        <div class="height-30"></div>
    </div>
    <div class="height-35"></div>
@endsection