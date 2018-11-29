@extends('layouts.app')

@section('content')
    <div class="container main-content">
        <div class="height-20"></div>
        <form action="{{  isset($data) ? route('advertiser.update', ['id' => $data->advertiserid]) : route('advertiser.store') }}" method="POST">
            {{ csrf_field() }}
            {{ isset($data) ? method_field('PATCH') : '' }}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>General</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="h5 content-title">Name</p>
                            <input name="advertisername" type="text" class="form-control" value="{{ old('advertisername',  isset($data->advertisername) ? $data->advertisername : '') }}">
                        </div>
                        <div class="col-sm-6">
                            <p class="h5 content-title">Traffic Quality Threshold</p>
                            <select name="trafficquality" class="form-control">
                                <option  value="0" {{ old('trafficquality',  (isset($data->trafficquality) && $data->trafficquality==0) ? 'selected' : '') }}>Select...</option>
                                <option value="6" {{ old('trafficquality',  (isset($data->trafficquality) && $data->trafficquality==6) ? 'selected' : '') }}>Custom Inclusion Only</option>
                                <option value="5" {{ old('trafficquality',  (isset($data->trafficquality) && $data->trafficquality==5) ? 'selected' : '') }}>5 - Excellent</option>
                                <option value="4" {{ old('trafficquality',  (isset($data->trafficquality) && $data->trafficquality==4) ? 'selected' : '') }}>4 - Good</option>
                                <option value="3" {{ old('trafficquality',  (isset($data->trafficquality) && $data->trafficquality==3) ? 'selected' : '') }}>3 - Medium</option>
                                <option value="2" {{ old('trafficquality',  (isset($data->trafficquality) && $data->trafficquality==2) ? 'selected' : '') }}>2 - Low</option>
                                <option value="1" {{ old('trafficquality',  (isset($data->trafficquality) && $data->trafficquality==1) ? 'selected' : '') }}>1 - Poor</option>
                            </select>
                            <p>(publisher inclusion/exclusion can be managed via edit after creation)</p>
                        </div>
                        <div class="col-xs-12">
                            <p class="h5 content-title">Postback IP Whitelist (recommended)</p>
                            <textarea name="postbackipwhitelist" class="form-control">{{ old('postbackipwhitelist', isset($data->postbackipwhitelist) ? $data->postbackipwhitelist : '') }}</textarea>
                            <p>
                                (enter one per line or comma seperated)
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="h5 content-title">Geo Targeting</p>
                            <div class="radio">
                                <label><input type="radio" value=1 name="geotargeting" {{ old('geotargeting',  !isset($data) || (isset($data->geotargeting) && $data->geotargeting==1)? "checked" : '') }}> Redirect on invalid GeoIP</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value=0 name="geotargeting" {{ old('geotargeting',  isset($data->geotargeting) && $data->geotargeting==0 ? "checked" : '') }}>Skip GeoIP Check</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <p class="h5 content-title">Allowed Tracking Variables</p>
                            <p class="sm-txt">
                                <strong>
                                    Note: all advertisers should use [[CLICKHASH]] unless they do not allow 32-character refs.
                                </strong>
                            </p>
                            <div class="radio">
                                <label class="green-txt"><input type="radio" value=1 name="allowtrackingvariables" {{ old('allowtrackingvariables',  !isset($data->allowtrackingvariables) || (isset($data->allowtrackingvariables) && $data->allowtrackingvariables==1) ? "checked" : '') }}>Hash Only (secure)</label>
                            </div>
                            <div class="radio">
                                <label class="red-txt"><input type="radio" value=0 name="allowtrackingvariables" {{ old('allowtrackingvariables',  isset($data->allowtrackingvariables) && $data->allowtrackingvariables==0 ? "checked" : '') }}>Hash and ID (insecure)</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <p class="h5 content-title">Cookie Tracking</p>
                            <p class="sm-txt">
                                <strong>
                                    This should only be enabled if the client cannot pass a token back in the pixel. Cookies only work with HTML pixels.
                                </strong>
                            </p>
                            <div class="radio">
                                <label class="green-txt"><input type="radio" value=0 name="cookietracking" {{ old('cookietracking',  !isset($data->cookietracking) || (isset($data->cookietracking) && $data->cookietracking==0) ? "checked" : '') }}>Disabled</label>
                            </div>
                            <div class="radio">
                                <label class="red-txt"><input type="radio" value=1 name="cookietracking" {{ old('cookietracking',  isset($data->cookietracking) && $data->cookietracking==1 ? "checked" : '') }}>Enable</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="h5 content-title">Require Unique ConversionIP</p>
                            <p>
                                <strong class="red-txt">ConversionIP is where the pixel request comes from, not the users ClickIP</strong>
                            </p>
                            <p>
                                <strong>Only set to Yes if the pixel requests are coming from the user PC/device, NOT if they come from the advertiser server.</strong>
                            </p>
                            <div class="radio">
                                <label><input type="radio" value=0 name="requireuniqueconversionip" {{ old('requireuniqueconversionip',  !isset($data->requireuniqueconversionip) || (isset($data->requireuniqueconversionip) && $data->requireuniqueconversionip==0) ? "checked" : '') }}>No</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value=1 name="requireuniqueconversionip" {{ old('requireuniqueconversionip',  isset($data->requireuniqueconversionip) && $data->requireuniqueconversionip==1 ? "checked" : '') }}>Yes</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p class="h5 content-title">Dupe Level</p>
                            <div class="radio">
                                <label><input type="radio" value=1 name="dupelevel" {{ old('dupelevel', isset($data->dupelevel) && $data->dupelevel==1 ? "checked" : '') }}>Unique ClickIP per Campaign</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value=2 name="dupelevel" {{ old('dupelevel', isset($data->dupelevel) && $data->dupelevel==2 ? "checked" : '') }}>Unique ClickIP for all campaigns</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value=3 name="dupelevel" {{ old('dupelevel',  !isset($data->dupelevel) || (isset($data->dupelevel) && $data->dupelevel==3) ? "checked" : '') }}>Disable Unique IP Check</label>
                            </div>
                        </div>
                    </div>
                    <div class="height-15"></div>
                    <div class="pull-left flex-content">
                        <input type="submit" class="btn crunchie-btn" value="{{ isset($data) ? 'Update' : 'Create Advertiser' }}">
                        <select name="" class="form-control">
                            <option>Go to list</option>
                            <option>Go to edit</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="height-35"></div>
@endsection
