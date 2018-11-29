@extends('layouts.app')

@section('content')
    <div class="container main-content network-campaigns">
        <div class="height-10"></div>
        <div class="panel panel-default">
            <div class="height-10"></div>
            <div class="main-links pull-right">
                <ul>
                    <li>
                        <a href="#">View Stats</a>
                    </li>
                    <li>
                        <a href="#">Create Campaign</a>
                    </li>
                </ul>
            </div>
            <div class="height-10"></div>
            <div class="row no-margin light-grey-bg">
                <div class="height-5"></div>
                <div class="col-xs-9">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="main-search-input">Search: </label>
                            <input type="text" id="main-search-input" class="form-control">
                            <div class="row">
                                <div class="col-xs-6">
                                    <label for="categories">Category:</label>
                                    <select name="" id="categories" class="form-control">
                                        <option value="">All</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                    <div class="height-5"></div>
                                    <label for="app-categories">AppCategory:</label>
                                    <select name="" id="app-categories" class="form-control">
                                        <option value="">All</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <label for="country">Country:</label>
                                    <select name="" id="country" class="form-control">
                                        <option value="">All</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                    <div class="height-5"></div>
                                    <label for="listing">Listing:</label>
                                    <select name="" id="listing" class="form-control">
                                        <option value="">Public+Private</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">Show only my groups campaigns</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" checked>Show everyones campaigns</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label for="advertiser">Advertiser:</label>
                            <select name="" id="advertiser" class="form-control">
                                <option value="">All</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                            <label for="status">Status:</label>
                            <select name="" id="status" class="form-control">
                                <option value="">All</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                            <label for="onAPI">On API:</label>
                            <select name="" id="onAPI" class="form-control">
                                <option value="">All</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <label for="quality">Quality:</label>
                            <select name="" id="quality" class="form-control">
                                <option value="">All</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                            <label for="incent">Incent:</label>
                            <select name="" id="incent" class="form-control">
                                <option value="">All</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                            <label for="type">Type:</label>
                            <select name="" id="type" class="form-control">
                                <option value="">Network</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <label for="quality-type">Quality:</label>
                            <select name="" id="quality-type" class="form-control">
                                <option value="">All</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 text-right">
                    <div class="height-25"></div>
                    <button class="btn crunchie-btn">Search</button>
                    <button class="btn crunchie-btn">Clear</button>
                    <button class="btn crunchie-btn">Export</button>
                </div>
                <div class="height-5"></div>
            </div>
            <div class="height-15"></div>
            <div class="table-responsive">
                <table id="advertiserList" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Info</th>
                        <th>CM Rate</th>
                        <th>Pub. Rate</th>
                        <th>Country</th>
                        <th>App Category</th>
                        <th>Incent</th>
                        <th>Cap Left</th>
                        <th>Options</th>
                        <th>Exp</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--@foreach($objAllAdvertisers as $advertiser)--}}
                    {{--<tr>--}}
                    {{--<td>{{ $advertiser->advertiserid }}</td>--}}
                    {{--<td>{{ $advertiser->advertisername }}</td>--}}
                    {{--<td>{{ $advertiser->account->managername }}</td>--}}
                    {{--<td>{{ $advertiser->username }}/{{ $advertiser->rawpassword }}</td>--}}
                    {{--<td></td>--}}
                    {{--<td></td>--}}
                    {{--<td>--}}
                    {{--<span class="glyphicon glyphicon-ok green-txt mr-3" aria-hidden="true"></span> Yes--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<span class="glyphicon glyphicon-remove red-txt mr-3" aria-hidden="true"></span> No--}}
                    {{--</td>--}}
                    {{--<td></td>--}}
                    {{--<td>--}}
                    {{--<p class="ip-list-container">--}}
                    {{--@if(!empty($advertiser->postbackipwhitelist ))--}}
                    {{--<span class="glyphicon glyphicon-ok green-txt mr-3" aria-hidden="true"></span>--}}
                    {{--{{ $advertiser->postbackipwhitelist }}--}}
                    {{--@else <span class="glyphicon glyphicon-remove red-txt mr-3" aria-hidden="true"></span> none--}}
                    {{--@endif--}}
                    {{--</p>--}}
                    {{--</td>--}}
                    {{--<td>{{ $advertiser->paymentmethod }}</td>--}}
                    {{--<td class="text-center"><span class="glyphicon glyphicon-pencil edit-btn" aria-hidden="true"></span></td>--}}
                    {{--</tr>--}}
                    {{--@endforeach--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/advertisers/advertiser-list.js') }}"></script>
@endsection