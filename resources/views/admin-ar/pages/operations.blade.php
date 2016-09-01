@extends('admin-ar/master')

@section('content')
<section class="content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-head">Operation</h3>
        </div>
        <div class="panel-body">
            <div class="container-fluid">
                <div class="row top-table">
                    <div class="col-xs-8">
                        <div class="addNew col-xs-1">
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-operation"> 
                                <i class="fa fa-plus"></i>
                                جديد
                            </button>
                        </div>
                        <div class="col-xs-3">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-sm btn-default  active" title="All Transports">
                                    <input type="radio" name="options" id="" autocomplete="off" checked>
                                    <i class="fa text-active"></i>
                                    All
                                </label>
                                <label class="btn btn-sm btn-default" title="Ocean">
                                    <input type="radio" name="options" id="" autocomplete="off"> 
                                    <i class="fa fa-ship"></i>
                                </label>
                                <label class="btn btn-sm btn-default" title="Air">
                                    <input type="radio" name="options" id="" autocomplete="off">
                                    <i class="fa fa-plane"></i>
                                </label>
                                <label class="btn btn-sm btn-default" title="Inland">
                                    <input type="radio" name="options" id="" autocomplete="off">
                                    <i class="fa fa-truck"></i>
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-3 inner-col">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-sm btn-default  active" title="All Direction" >
                                    <input type="radio" name="options" id="" autocomplete="off" checked>
                                    <i class="fa text-active"></i>
                                    All
                                </label>
                                <label class="btn btn-sm btn-default " title="Import">
                                    <input type="radio" name="options" id="" autocomplete="off"> 
                                    <i class="fa fa-arrow-circle-down"></i>
                                </label>
                                <label class="btn btn-sm btn-default " title="Export">
                                    <input type="radio" name="options" id="" autocomplete="off">
                                    <i class="fa fa-external-link"></i>
                                </label>
                                <label class="btn btn-sm btn-default " title="Domestic">
                                    <input type="radio" name="options" id="" autocomplete="off">
                                    <i class="fa fa-home"></i>
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-3 inner-col">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-sm btn-default  active" title="All B/L Types" >
                                    <input type="radio" name="options" id="" autocomplete="off" checked>
                                    <i class="fa text-active"></i>
                                    All
                                </label>
                                <label class="btn btn-sm btn-default " title="Direct">
                                    <input type="radio" name="options" id="" autocomplete="off"> 
                                    <i class="fa fa-indent"></i>
                                </label>
                                <label class="btn btn-sm btn-default " title="House">
                                    <input type="radio" name="options" id="" autocomplete="off">
                                    <i class="fa fa-link"></i>
                                </label>
                                <label class="btn btn-sm btn-default " title="Master">
                                    <input type="radio" name="options" id="" autocomplete="off">
                                    <i class="fa fa-book"></i>
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-2 inner-col">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="dropdown-label">ACCEPTED</span>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-select">
                                    <li><a href="#"><input type="radio" name="select">ALL STAGES </a></li>
                                    <li><a href="#"><input type="radio" name="select">CREATED </a></li>
                                    <li><a href="#"><input type="radio" name="select">SENT </a></li>
                                    <li><a href="#"><input type="radio" name="select">DRAFT</a></li>
                                    <li><a href="#"><input type="radio" name="select">ACCEPTED</a></li>
                                    <li><a href="#"><input type="radio" name="select">DECLINED</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ser-a-del col-xs-4">
                        <div class=" col-xs-12">
                            <div class="input-group">
                                <input type="text" class="form-control input-sm" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-sm btn-success" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Direction</th><th>Transport</th><th>Code</th><th>Opened</th><th>Branch</th><th>Client</th><th>Routing</th><th>Shipment</th><th>State</th><td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-success">
                                    <td><i class="fa fa-arrow-circle-down import-icon-style fa-2x"></i></td>
                                    <td><i class="fa fa-plane air-icon-style fa-2x"></i></td>
                                    <td>Q-IMP-AI-3</td>
                                    <td><small>17/02/2016</small></td>
                                    <td>CAIRO</td>
                                    <td>HOME MARKET CO</td>
                                    <td>ARCOL > ASACC</td>
                                    <td>FCL</td>
                                    <td>CLOSED</td>
                                    <td class=""><a href="#" data-toggle="modal" data-target="#modal-copy" class="btn btn-xs btn-rounded btn-info"> <i class="fa fa-copy" style="padding-left: 5px;"></i> <span style="padding-right: 5px;">Copy</span></a></td>
                                </tr>
                                <tr class="text-success">
                                    <td><i class="fa fa-arrow-circle-down import-icon-style fa-2x"></i></td>
                                    <td><i class="fa fa-plane air-icon-style fa-2x"></i></td>
                                    <td>Q-IMP-AI-3</td>
                                    <td><small>17/02/2016</small></td>
                                    <td>CAIRO</td>
                                    <td>HOME MARKET CO</td>
                                    <td>ARCOL > ASACC</td>
                                    <td>FCL</td>
                                    <td>CLOSED</td>
                                    <td class=""><a href="#" data-toggle="modal" class="btn btn-xs btn-rounded btn-info"> <i class="fa fa-copy" style="padding-left: 5px;"></i> <span style="padding-right: 5px;">Copy</span></a></td>

                                </tr>
                                <tr class="text-success">

                                    <td><i class="fa fa-arrow-circle-down import-icon-style fa-2x"></i></td>
                                    <td><i class="fa fa-plane air-icon-style fa-2x"></i></td>
                                    <td>Q-IMP-AI-3</td>
                                    <td><small>17/02/2016</small></td>
                                    <td>CAIRO</td>
                                    <td>HOME MARKET CO</td>
                                    <td>ARCOL > ASACC</td>
                                    <td>FCL</td>
                                    <td>CLOSED</td>
                                    <td class=""><a href="#" data-toggle="modal" class="btn btn-xs btn-rounded btn-info"> <i class="fa fa-copy" style="padding-left: 5px;"></i> <span style="padding-right: 5px;">Copy</span></a></td>

                                </tr>
                                <tr class="text-success">

                                    <td><i class="fa fa-arrow-circle-down import-icon-style fa-2x"></i></td>
                                    <td><i class="fa fa-plane air-icon-style fa-2x"></i></td>
                                    <td>Q-IMP-AI-3</td>
                                    <td><small>17/02/2016</small></td>
                                    <td>CAIRO</td>
                                    <td>HOME MARKET CO</td>
                                    <td>ARCOL > ASACC</td>
                                    <td>FCL</td>
                                    <td>CLOSED</td>
                                    <td class=""><a href="#" data-toggle="modal" class="btn btn-xs btn-rounded btn-info"> <i class="fa fa-copy" style="padding-left: 5px;"></i> <span style="padding-right: 5px;">Copy</span></a></td>

                                </tr>
                                <tr class="text-success">

                                    <td><i class="fa fa-arrow-circle-down import-icon-style fa-2x"></i></td>
                                    <td><i class="fa fa-plane air-icon-style fa-2x"></i></td>
                                    <td>Q-IMP-AI-3</td>
                                    <td><small>17/02/2016</small></td>
                                    <td>CAIRO</td>
                                    <td>HOME MARKET CO</td>
                                    <td>ARCOL > ASACC</td>
                                    <td>FCL</td>
                                    <td>CLOSED</td>
                                    <td class=""><a href="#" data-toggle="modal" class="btn btn-xs btn-rounded btn-info"> <i class="fa fa-copy" style="padding-left: 5px;"></i> <span style="padding-right: 5px;">Copy</span></a></td>

                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">Panel footer</div>
    </div>
</section>
@endsection      

@section('modals')
@include('admin-ar/modals/operations')
@endsection