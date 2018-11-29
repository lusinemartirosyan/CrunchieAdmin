@extends('layouts.app')

@section('content')
    <div class="container main-content publishers-list">
        <div class="height-5"></div>
        <div class="panel panel-default">
            <div class="height-20"></div>
            <div class="partner-setup-links pull-right">
                <ul class="partner-setup">
                    <li>
                        <a href="#">Create New Partner</a>
                    </li>
                    <li>
                        <a href="#">Export Current View</a>
                    </li>
                </ul>
            </div>
            <div class="height-20"></div>
            <div class="tabs">
                <ul class="tab-links">
                    <li class="active" data-partner="active">
                        <a href="#">Active Partners</a>
                    </li>
                    <li data-partner="passive">
                        <a href="#">De - Activated</a>
                    </li>
                </ul>
            </div>
            <div class="info-tabs">
                <div class="active-partners">
                    <div class="row light-grey-bg no-margin">
                        <div class="col-sm-8">
                            <p class="h5 content-title">Active Partners</p>
                        </div>
                        <div class="col-sm-4 text-right">
                            <div class="am-info">
                                <ul>
                                    <li>
                                        <span>Account Manager: </span>
                                    </li>
                                    <li>
                                        <select name="" class="form-control">
                                            <option value="1">Gohar/Unassigned only</option>
                                            <option value="2">All</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="height-5"></div>
                    <div class="table-responsive">
                        <table id="activePartners" class="table table-striped table-bordered" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>AM</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Hash/API</th>
                                <th>Quality</th>
                                <th>Login</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($objAllPublishers as $publisher)
                                <tr>
                                    <td>{{ $publisher->publisherid }}</td>
                                    <td>{{ $publisher->publishername }}</td>
                                    <td>AM</td>
                                    <td>{{ $publisher->username }}</td>
                                    <td>{{ $publisher->password }}</td>
                                    <td>{{ $publisher->publisherhash }}</td>
                                    <td>Quality</td>
                                    <td>Login</td>
                                    <td class="options-list-container">
                                        <p>
                                            click for options
                                        </p>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div  class="passive-partners">
                    <div class="row light-grey-bg no-margin">
                        <div class="col-xs-12">
                            <p class="h5 content-title">De-Activated Partners</p>
                        </div>
                    </div>
                    <div class="height-5"></div>
                    <div class="table-responsive">
                        <table id="passivePartners" class="table table-striped table-bordered" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>AM</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Hash/API</th>
                                <th>Quality</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($objAllPublishers as $publisher)
                                <tr>
                                    <td>{{ $publisher->publisherid }}</td>
                                    <td>{{ $publisher->publishername }}</td>
                                    <td>AM</td>
                                    <td>{{ $publisher->username }}</td>
                                    <td>{{ $publisher->password }}</td>
                                    <td>{{ $publisher->publisherhash }}</td>
                                    <td>Quality</td>
                                    <td class="options-inline-list-container">
                                        <ul>
                                            <li>
                                                <a href="#">view</a>
                                            </li>
                                            <li>
                                                <a href="#">application</a>
                                            </li>
                                            <li>
                                                <a href="#">activate</a>
                                            </li>
                                            <li>
                                                <a href="#">delete</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/publishers/publishers-list.js') }}"></script>
@endsection