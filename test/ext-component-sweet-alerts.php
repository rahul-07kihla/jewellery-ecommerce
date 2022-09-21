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
                            <h2 class="content-header-title float-left mb-0">Sweet Alerts</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Extensions</a>
                                    </li>
                                    <li class="breadcrumb-item active">Sweet Alerts
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
                <!-- Basic example section start -->
                <section id="basic-examples">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Examples</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>SweetAlert automatically centers itself on the page and looks great no matter if you're using a desktop
                                    computer, mobile or tablet. It's even highly customizable, as you can see below!</p>
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="basic-alert">Basic</button>
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="with-title">With Title</button>
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="footer-alert">With Footer</button>
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="html-alert">HTML</button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic example section end -->

                <!-- Sweet alert Positions Starts -->
                <section id="sweet-alert-position">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Poistion</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            You can specify position of your alert with
                                            <code>{position : top-start | top-end | bottom-start | bottom-end }</code> in js
                                        </p>
                                        <button class="btn btn-outline-success mr-1 mb-1" id="position-top-start">Top Start</button>
                                        <button class="btn btn-outline-success mr-1 mb-1" id="position-top-end">Top End</button>
                                        <button class="btn btn-outline-success mr-1 mb-1" id="position-bottom-start">Bottom Starts</button>
                                        <button class="btn btn-outline-success mr-1 mb-1" id="position-bottom-end">Bottom End</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Sweet alert Positions Ends -->

                <!-- SweetAlert Animations Starts -->
                <section id="sweet-alert-animations">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Animations</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>customClass</code> parameter to add animation to your alert</p>
                                        <button class="btn btn-outline-primary mr-1 mb-1" id="bounce-in-animation">Bounce In</button>
                                        <button class="btn btn-outline-success mr-1 mb-1" id="fade-in-animation">Fade In</button>
                                        <button class="btn btn-outline-danger mr-1 mb-1" id="flip-x-animation">Flip In</button>
                                        <button class="btn btn-outline-info mr-1 mb-1" id="tada-animation">Tada</button>
                                        <button class="btn btn-outline-warning mr-1 mb-1" id="shake-animation">Shake</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- SweetAlert Animations Ends -->

                <!-- Types section start -->
                <section id="types">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Types</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>The type of the modal. SweetAlert comes with 4 built-in types which will show a corresponding icon animation:
                                    "warning", "error", "success" and "info". You can also set it as "input" to get a prompt modal. It can either
                                    be
                                    put in the object under the key "icon" or passed as the third parameter of the function.</p>
                                <button type="button" class="btn btn-outline-success mr-1 mb-1" id="type-success">Success</button>
                                <button type="button" class="btn btn-outline-info mr-1 mb-1" id="type-info">Info</button>
                                <button type="button" class="btn btn-outline-warning mr-1 mb-1" id="type-warning">Warning</button>
                                <button type="button" class="btn btn-outline-danger mr-1 mb-1" id="type-error">Error</button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Types section end -->

                <!-- Options section start -->
                <section id="options">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Options</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="custom-icon">Custom Icon</button>
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="auto-close">Auto Close</button>
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="outside-click">Click Outside</button>
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="prompt-function">Question</button>
                                <button type="button" class="btn btn-outline-primary mr-1 mb-1" id="ajax-request">Ajax</button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Options section end -->

                <!-- Confirm option section start -->
                <section id="confirm-option">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Confirm Options</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row mt-1">
                                    <div class="col-md-6 col-sm-12">
                                        <h5>Confirm Button Text</h5>
                                        <p>Use this to change the text on the "Confirm"-button. If <code>showCancelButton</code> is set as
                                            <code>true</code>, the confirm button will automatically show "Confirm" instead of "OK".</p>
                                        <button type="button" class="btn btn-outline-primary mb-2" id="confirm-text">Confirm
                                            Text</button>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <h5>Confirm Button Color</h5>
                                        <p>Use <code>className: "btn-warning"</code> option to change the background color of the "Confirm"-button.
                                        </p>
                                        <button type="button" class="btn btn-outline-primary mb-2" id="confirm-color">Confirm
                                            Button Color</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Confirm option section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

<?php
include "include/footer.php";
?>