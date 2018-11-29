@extends('layouts.app')

@section('content')

    <div class="container main-content advertisers-list">
        <div class="height-5"></div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-9">
                        <h4>Advertisers</h4>
                    </div>
                    <div class="col-sm-3 text-right">
                        <a class="pull-right" href="http://main-platform.loc/advertiser/create">
                            Create New Advertise
                        </a>
                    </div>
                </div>
            </div>
            <div class="list-filters">
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
                <ul>
                    <li>
                        <span>Traffic Quality: </span>
                        <button class="btn crunchie-btn" onclick="FilterAdvertiser('0')">All</button>
                        <button class="btn crunchie-btn" name=1 onclick="FilterAdvertiser('1', 'quality')">1 - Poor</button>
                        <button class="btn crunchie-btn" name=2 onclick="FilterAdvertiser('2', 'quality')">2 - Low</button>
                        <button class="btn crunchie-btn" name=3 onclick="FilterAdvertiser('3', 'quality')">3 - Medium</button>
                        <button class="btn crunchie-btn" name=4 onclick="FilterAdvertiser('4', 'quality')">4 - Good</button>
                        <button class="btn crunchie-btn" name=5 onclick="FilterAdvertiser('5', 'quality')">5 - Excellent</button>
                        {{--<button class="btn crunchie-btn">Custom Inclusion Only</button>--}}
                    </li>
                    <li>
                        <span>Account Manager:</span>
                        <button class="btn crunchie-btn2">All</button>
                        @foreach($objAllAdvertisers->allManangers as $manager)
                            <button class="btn crunchie-btn2" name="{{  $manager->accountmanagerid }}" onclick="FilterAdvertiser( '<?php echo $manager->accountmanagerid; ?>', 'manager')">{{ $manager->managername  }}</button>
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="">
                <div class="table-responsive">
                    <table id="advertiserList" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Account Manager</th>
                            <th>Username Paasword</th>
                            <th>Traffic Quality</th>
                            <th>Allowed Toekens</th>
                            <th>Cookie Tracking</th>
                            <th>Unique ConversationIP</th>
                            <th>IP Dupe Level</th>
                            <th>IP Whitelist</th>
                            <th>Payment Method</th>
                            <th>options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($objAllAdvertisers as $advertiser)
                            <tr>
                                <td>{{ $advertiser->advertiserid }}</td>
                                <td>{{ $advertiser->advertisername }}</td>
                                <td>{{ $advertiser->account->managername }}</td>
                                <td>{{ $advertiser->username }}<br>{{ $advertiser->rawpassword }}</td>
                                <td>{{ $advertiser->trafficquality }}</td>
                                <td> @if($advertiser->allowtrackingvariables == 1)
                                        <span class="green-txt">[[INREFHASH]] ONLY</span>
                                    @else
                                        <span class="red-txt">[[INREF]] and [[INREFHASH]]</span>
                                    @endif
                                <td>
                                    @if($advertiser->cokkietracking == 0)
                                        <span class="glyphicon glyphicon-remove red-txt mr-3" aria-hidden="true"></span>Disabled
                                    @else
                                        <span class="glyphicon glyphicon-ok green-txt mr-3" aria-hidden="true"></span>Enables
                                    @endif
                                </td>
                                <td>
                                    @if($advertiser->requireuniqueconversionip == 0)
                                        <span class="glyphicon glyphicon-remove red-txt mr-3" aria-hidden="true"></span>Yes
                                    @else
                                        <span class="glyphicon glyphicon-ok green-txt mr-3" aria-hidden="true"></span>No
                                    @endif
                                </td>
                                <td></td>
                                <td>
                                    <p class="ip-list-container">
                                        @if(!empty($advertiser->postbackipwhitelist ))
                                            <span class="glyphicon glyphicon-ok green-txt mr-3" aria-hidden="true"></span>
                                            {{ $advertiser->postbackipwhitelist }}
                                            @else <span class="glyphicon glyphicon-remove red-txt mr-3" aria-hidden="true"></span> none
                                        @endif
                                    </p>
                                </td>
                                <td>{{ $advertiser->paymentmethod }}</td>
                                <td class="text-center"><a href="/advertiser/{{ $advertiser->advertiserid }}/edit"><span class="glyphicon glyphicon-pencil edit-btn" aria-hidden="true"></span></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/advertisers/advertiser-list.js') }}" />
@endsection


