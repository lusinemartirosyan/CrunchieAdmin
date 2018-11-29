@extends('layouts.app')

@section('content')
    <div class="container-fluid main-content publisher-placementstats no-padding">
        <div class="height-20"></div>
        <div class="flex-content sm-div filters">
            <input type="text" class="form-control" placeholder="Search table" id="search-placementStats">

            <input type="text" id="placementStatsPicker" class="form-control">

            <a href="#">Publisher List</a>
        </div>
        <div class="height-10"></div>
        <div class="table-responsive">
            <table id="placementStatsTable" class="table table-striped table-bordered" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th>PartnerID</th>
                    <th>Partner</th>
                    <th>Clicks</th>
                    <th>Unique</th>
                    <th>Installs</th>
                    <th>Revenue</th>
                    <th>Profit</th>
                    <th>RPC</th>
                    <th>Sales</th>
                    <th>AppEvents</th>
                    <th>AppRevenue</th>
                    <th>ScrubCount</th>
                    <th>ScrubRev</th>
                    <th>ScrubCost</th>
                    <th>ScrubProfit</th>
                </tr>
                </thead>
                <tbody>
                {{--@foreach($objAllPublishers as $publisher)--}}
                {{--<tr>--}}
                {{--<td>{{ $publisher->publisherid }}</td>--}}
                {{--<td>{{ $publisher->publishername }}</td>--}}
                {{--<td>AM</td>--}}
                {{--<td>{{ $publisher->username }}</td>--}}
                {{--<td>{{ $publisher->password }}</td>--}}
                {{--<td>{{ $publisher->publisherhash }}</td>--}}
                {{--<td>Quality</td>--}}
                {{--<td>Login</td>--}}
                {{--<td class="options-list-container">--}}
                {{--<p>--}}
                {{--click for options--}}
                {{--</p>--}}
                {{--</td>--}}
                {{--</tr>--}}
                {{--@endforeach--}}
                </tbody>
            </table>
        </div>
    </div>
    <div class="height-35"></div>
    <script src="{{ asset('js/publishers/publisher-placementstats.js') }}"></script>
@endsection