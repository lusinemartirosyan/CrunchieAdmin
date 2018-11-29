@extends('layouts.app')

@section('content')
<div class="container home-page-content">
    <div class="row">
        <div class="height-30"></div>
        @guest

        @endguest
        <div class="col-xs-12">
            <div class="panel panel-default">
                <h4 class="panel-title">Campaigns</h4>
                <div class="height-20"></div>
                <div class="flex-content">
                    <span>Network: </span>
                    <input type="text" name="network" class="form-control" placeholder="Search by ID/Name/AM/AppID/Advertiser/Country">
                    <select class="form-control">
                        <option>Go...</option>
                        <option name="network-edit">Edit</option>
                        <option name="network-publishers">Publishers</option>
                        <option name="network-creatives">Creatives</option>
                    </select>
                </div>
                <div class="height-15"></div>
                <div class="flex-content">
                    <span>Vault: </span>
                    <input type="text" name="vault" class="form-control" placeholder="Search by ID/Name/AM/AppID/Advertiser/Country">
                    <select class="form-control">
                        <option>Go...</option>
                        <option name="vault-edit">Edit</option>
                        <option name="vault-publishers">Publishers</option>
                        <option name="vault-creatives">Creatives</option>
                    </select>
                </div>
                <div class="height-20"></div>
                <h4 class="panel-title">Publishers</h4>
                <div class="height-20"></div>
                <div class="flex-content">
                    <span class="mr-3">QuickSelect: </span>
                    <input type="text" name="" class="form-control" placeholder="Dbl-click for all, or search by ID/name">
                    <select name="" class="form-control">
                        <option>Go...</option>
                        <option>View</option>
                        <option>Edit</option>
                        <option>Campaigns</option>
                        <option>Placements</option>
                        <option>Login</option>
                    </select>
                </div>
                <div class="height-20"></div>
                <h4 class="panel-title">Advertisers</h4>
                <div class="height-20"></div>
                <div class="flex-content">
                    <span class="mr-3">QuickSelect: </span>
                    <input type="text" name="" class="form-control" placeholder="Dbl-click for all, or search by ID/name">
                    <select name="" class="form-control">
                        <option>Go...</option>
                        <option>Edit</option>
                        <option>Login</option>
                    </select>
                </div>
                <div class="height-40"></div>
            </div>
        </div>
    </div>
</div>
@endsection
