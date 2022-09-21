<?php
include "include/header.php";
?>


    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Google Maps</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Maps</a>
                                    </li>
                                    <li class="breadcrumb-item active">Google Maps
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- gmaps Examples section start -->
                <section id="gmaps-basic-maps">
                    <!-- Basic Map -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Map</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <p class="card-text">You must define <strong>container ID</strong>, <strong>latitude</strong> and <strong>longitude</strong> of the map's center.</p>

                                        <p class="card-text">You also can define <strong>zoom</strong>, <strong>width</strong> and <strong>height</strong>. By default, zoom is 15. Width an height in a CSS class will replace these values.</p>

                                        <p class="card-text">Map types are defined in the <strong>mapType</strong> property. Allowed values are: <strong>roadmap</strong> (default), <strong>satellite</strong>, <strong>hybrid</strong> and <strong>terrain</strong>.</p>

                                        <div id="basic-map" class="height-400"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Info Window -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Info Window</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">A basic example of using a single info window for 3 markers.</p>
                                        <div id="info-window" class="height-400"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Street View Markers -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Street View</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">Example of creating google map - street view</p>
                                        <p class="card-text">Point-of-view updates when you pan around</p>
                                        <div id="street-view" class="height-400"></div>
                                        <button type="button" class="btn btn-primary street-heading mt-1 mr-1">Change Heading</button>
                                        <button type="button" class="btn btn-primary street-pitch mt-1 mr-1">Change Pitch</button>
                                        <button type="button" class="btn btn-primary street-both mt-1">Change Both</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- gmaps Examples section End -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

<?php
include "include/footer.php";
?>