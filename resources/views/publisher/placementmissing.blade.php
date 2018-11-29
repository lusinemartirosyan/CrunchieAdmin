@extends('layouts.app')

@section('content')
    <div class="container-fluid main-content publisher-placementmissing no-padding">
        <div class="height-20"></div>
        <div class="table-responsive">
            <div class="xs-div range-picker">
                <input type="text" id="placementMissingPicker" class="form-control">
                <div class="height-15"></div>
            </div>
            <table id="placementMissingTable" class="table table-striped table-bordered" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th>PartnerID</th>
                    <th>Name</th>
                    <th>Campaigns missing placement</th>
                    <th>Campaigns with placements</th>
                    <th>Clicks no placement</th>
                    <th>Clicks with placement</th>
                    <th>Unique Campaign</th>
                    <th>Total Clicks</th>
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
                {{--</tr>--}}
                {{--@endforeach--}}
                </tbody>
            </table>
        </div>
    </div>
    <div class="height-35"></div>
    <script src="{{ asset('js/publishers/publisher-placementmissing.js') }}"></script>
@endsection