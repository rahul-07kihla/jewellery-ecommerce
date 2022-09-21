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
                            <h2 class="content-header-title float-left mb-0">Toastr</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Extensions</a>
                                    </li>
                                    <li class="breadcrumb-item active">Toastr
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
                <!-- Types section start -->
                <section id="types">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Types</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-success mr-1 mb-1" id="type-success">Success</button>
                                <button type="button" class="btn btn-outline-info mr-1 mb-1" id="type-info">Info</button>
                                <button type="button" class="btn btn-outline-warning mr-1 mb-1" id="type-warning">Warning</button>
                                <button type="button" class="btn btn-outline-danger mr-1 mb-1" id="type-error">Error</button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Types section end -->

                <!-- Position section start -->
                <section id="position">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Position</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h5 class="mb-1">Top Positions</h5>
                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="position-top-left">Top
                                            Left</button>
                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="position-top-center">Top
                                            Center</button>
                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="position-top-right">Top
                                            Right</button>
                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="position-top-full">Top Full
                                            Width</button>
                                    </div>

                                    <div class="col-sm-12">
                                        <h5 class="my-1">Bottom Positions</h5>
                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="position-bottom-left">Bottom
                                            Left</button>
                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="position-bottom-center">Bottom
                                            Center</button>
                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="position-bottom-right">Bottom
                                            Right</button>
                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="position-bottom-full">Bottom
                                            Full Width</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Position section end -->

                <!-- Options section start -->
                <section id="options">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Options</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-success mr-1 mb-1" id="text-notification">Notifications</button>
                                <button type="button" class="btn btn-outline-success mr-1 mb-1" id="close-button">Close Button</button>
                                <button type="button" class="btn btn-outline-success mr-1 mb-1" id="progress-bar">Progress Bar</button>
                                <button type="button" class="btn btn-outline-success mr-1 mb-1" id="clear-toast-btn">Clear Toast</button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Options section end -->

                <!-- Clear toasts section start -->
                <section id="clear-toasts">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Clear Toasts</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row mt-1">
                                    <div class="col-md-6 col-sm-12">
                                        <h5>Remove</h5>
                                        <p>Immediately remove current toasts without using animation.</p>
                                        <button type="button" class="btn btn-outline-info mr-1 mb-1" id="show-remove-toast">Show
                                            Toast</button>
                                        <button type="button" class="btn btn-outline-danger mr-1 mb-1" id="remove-toast">Remove
                                            Toast</button>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <h5>Clear</h5>
                                        <p>Remove current toasts using animation.</p>
                                        <button type="button" class="btn btn-outline-info mr-1 mb-1" id="show-clear-toast">Show
                                            Toast</button>
                                        <button type="button" class="btn btn-outline-danger mr-1 mb-1" id="clear-toast">Clear
                                            Toast</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Clear toasts section end -->

                <!-- Duration & Timeout section start -->
                <section id="duration-timeout">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Duration & Timeout</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>you can use options like <code>showDuration</code>, <code>hideDuration</code>, <code>timeout</code> for your
                                    toasts. To create a sticky toast set the <code>timeout</code> to <code>0</code></p>
                                <button type="button" class="btn btn-outline-info mr-1 mb-1" id="fast-duration">Show .5s</button>
                                <button type="button" class="btn btn-outline-info mr-1 mb-1" id="slow-duration">Hide 3s</button>
                                <button type="button" class="btn btn-outline-info mr-1 mb-1" id="timeout">Timeout 5s</button>
                                <button type="button" class="btn btn-outline-info mr-1 mb-1" id="sticky">Sticky Toast</button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Duration & Timeout section end -->

                <!-- Animation section start -->
                <section id="animation">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Show / Hide Animation</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Use the jQuery <code>show/hide</code> method of your choice. These default to <code>fadeIn/fadeOut</code>.
                                    The methods <code>fadeIn/fadeOut</code>, <code>slideDown/slideUp</code>, and <code>show/hide</code> are built
                                    into jQuery.</p>
                                <button type="button" class="btn btn-outline-warning mr-1 mb-1" id="slide-toast">slideDown -
                                    slideUp</button>
                                <button type="button" class="btn btn-outline-warning mr-1 mb-1" id="fade-toast">fadeIn -
                                    fadeOut</button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Animation section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

<?php
include "include/footer.php";
?>