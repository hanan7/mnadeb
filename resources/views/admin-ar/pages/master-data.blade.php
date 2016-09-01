@extends('admin-ar/master')

@section('content')
<section class="panel panel-default content">
            <div class="panel-heading">
                <h3 class="panel-head">Master Data</h3>
            </div>
            <div class="panel-body">
                <div class="container-fluid">
                    <div class="col-lg-12 btn-nav">
                        <a href="#body-locations" class="btn btn-md active btn-success current" aria-controls="body-locations" role="tab" data-toggle="tab" >
                        <i class="fa fa-map-marker"></i> Locations</a>
                        <a href="#body-parteners" class="btn  btn-success btn-md" aria-controls="body-parteners" role="tab" data-toggle="tab">
                            <i class="fa fa-users "></i> Parteners</a>
                        <a href="#body-invoicing" class="btn  btn-success btn-md" aria-controls="body-invoicing" role="tab" data-toggle="tab">
                            <i class="fa fa-dollar"></i> Invoicing</a>
                        <a href="#body-others" class="btn  btn-success btn-md"  aria-controls="body-others" role="tab" data-toggle="tab">
                            <i class="fa fa-th-list"></i> Othres</a>
                    </div>
                    <div class="tab-content">
                        <section id="body-locations" role="tabpanel" class="locations tab-pane active">
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Regions</h3>
                                </div>
                                <a href="Regions.html">
                                    <div class="panel-body">
                                    <i class="fa fa-globe fa-4x"></i>
                                    <b>Here you can add, edit and delete Regions....................</b>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Countries</h3>
                                </div>
                                <a href="Regions.html">
                                    <div class="panel-body">
                                    <i class="fa fa-map-marker fa-4x"></i>
                                    <b>Here you can add, edit and delete Countries....................</b>
                                    </div>
                                </a>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Ports</h3>
                                </div>
                                <a href="Regions.html">
                                    <div class="panel-body">
                                    <i class="fa fa-anchor fa-4x"></i>
                                    <b>Here you can add, edit and delete Ports....................</b>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="col-sm-6 hide">
                                <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Agents</h3>
                                </div>
                                <a href="Regions.html">
                                    <div class="panel-body">
                                    <i class="fa fa-globe fa-4x"></i>
                                    <b>Here you can add, edit and delete Agents....................</b>
                                    </div>
                                </a>
                                </div>
                            </div>
                            </div>
</section>
                        <section id="body-parteners" role="tabpanel" class="partners tab-pane ">
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Customers</h3>
                                </div>
                                <a href="Regions.html">
                                    <div class="panel-body">
                                    <i class="fa fa-user fa-4x"></i>
                                    <b>Here you can add, edit and delete Customers....................</b>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Shipping Lines</h3>
                                </div>
                                <a href="Regions.html">
                                    <div class="panel-body">
                                    <i class="fa fa-ship fa-4x"></i>
                                    <b>Here you can add, edit and delete Shipping Lines.................</b>
                                    </div>
                                </a>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Agents</h3>
                                </div>
                                <a href="Regions.html">
                                    <div class="panel-body">
                                    <i class="fa fa-user fa-4x"></i>
                                    <b>Here you can add, edit and delete Agents....................</b>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Airlines</h3>
                                </div>
                                <a href="Regions.html">
                                    <div class="panel-body">
                                    <i class="fa fa-plane fa-4x"></i>
                                    <b>Here you can add, edit and delete Airlines....................</b>
                                    </div>
                                </a>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Shipping Agents</h3>
                                </div>
                                <a href="Regions.html">
                                    <div class="panel-body">
                                    <i class="fa fa-user fa-4x"></i>
                                    <b>Here you can add, edit and delete Shipping Agents....................</b>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Truckers</h3>
                                </div>
                                <a href="Regions.html">
                                    <div class="panel-body">
                                    <i class="fa fa-truck fa-4x"></i>
                                    <b>Here you can add, edit and delete Truckers.................</b>
                                    </div>
                                </a>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Customers Clearance Agents</h3>
                                </div>
                                <a href="Regions.html">
                                    <div class="panel-body">
                                    <i class="fa fa-user fa-4x"></i>
                                    <b>Here you can add, edit and delete Customers Clearance Agents............</b>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Suppliers</h3>
                                </div>
                                <a href="Regions.html">
                                    <div class="panel-body">
                                    <i class="fa fa-plane fa-4x"></i>
                                    <b>Here you can add, edit and delete Suppliers....................</b>
                                    </div>
                                </a>
                                </div>
                            </div>
                            </div>
</section>
                        <section id="body-invoicing" role="tabpanel" class="invoicing tab-pane ">
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Curencies</h3>
                                </div>
                                <a href="Regions.html">
                                    <div class="panel-body">
                                    <i class="fa fa-dollar fa-4x"></i>
                                    <b>Here you can add, edit and delete Curencies....................</b>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Credit Card types</h3>
                                </div>
                                <a href="Regions.html">
                                    <div class="panel-body">
                                    <i class="fa fa-credit-card fa-4x"></i>
                                    <b>Here you can add, edit and delete Credit Card types....................</b>
                                    </div>
                                </a>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">IncoTerms</h3>
                                </div>
                                <a href="Regions.html">
                                    <div class="panel-body">
                                    <i class="fa fa-table fa-4x"></i>
                                    <b>Here you can add, edit and delete IncoTerms....................</b>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Payment Terms</h3>
                                </div>
                                <a href="Regions.html">
                                    <div class="panel-body">
                                    <i class="fa fa-money fa-4x"></i>
                                    <b>Here you can add, edit and delete Payment Terms....................</b>
                                    </div>
                                </a>
                                </div>
                            </div>
                            </div>
</section>
                        <section id="body-others" role="tabpanel" class="others tab-pane ">
                        <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Container Types</h3>
                            </div>
                            <a href="Regions.html">
                                <div class="panel-body">
                                <i class="fa fa-archive fa-4x"></i>
                                <b>Here you can add, edit and delete Container Types....................</b>
                                </div>
                            </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Package types</h3>
                            </div>
                            <a href="Regions.html">
                                <div class="panel-body">
                                <i class="fa fa-briefcase fa-4x"></i>
                                <b>Here you can add, edit and delete Package types....................</b>
                                </div>
                            </a>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Commoditions</h3>
                            </div>
                            <a href="Regions.html">
                                <div class="panel-body">
                                <i class="fa fa-ship fa-4x"></i>
                                <b>Here you can add, edit and delete Commoditions....................</b>
                                </div>
                            </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Move Types</h3>
                            </div>
                            <a href="Regions.html">
                                <div class="panel-body">
                                <i class="fa fa-arrows fa-4x"></i>
                                <b>Here you can add, edit and delete Move Types....................</b>
                                </div>
                            </a>
                            </div>
                        </div>
                        </div>
</section>
                    </div>
                </div>
            </div>
        </section>
@endsection      

