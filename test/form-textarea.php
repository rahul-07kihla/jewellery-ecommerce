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
                            <h2 class="content-header-title float-left mb-0">Textarea</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Form Elements</a>
                                    </li>
                                    <li class="breadcrumb-item active">Textarea
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
                <!-- Basic Textarea start -->
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Default</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>To add a Textarea we have the component <code>textarea</code>.</p>
                                        <div class="row">
                                            <div class="col-12">
                                                <fieldset class="form-group">
                                                    <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Textarea"></textarea>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Textarea end -->

                <!-- Floating Label Textarea start -->
                <section class="floating-label-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Floating Label</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="mb-2">Use <code>.form-label-group</code> to add a Floating Label with Textarea.</p>
                                        <div class="row">
                                            <div class="col-12">
                                                <fieldset class="form-label-group">
                                                    <textarea class="form-control" id="label-textarea" rows="3" placeholder="Label in Textarea"></textarea>
                                                    <label for="label-textarea">Label in Textarea</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Floating Label Textarea end -->

                <!-- Counter Textarea start -->
                <section class="counter-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Counter</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="mb-2">There are times when we need the user to only enter a certain number of characters for it, we have the property counter, the value is a number and determines the maximum. Use <code>.char-textarea</code> with <code>&lt;textarea&gt;</code>tag for counting text-length.</p>
                                        <div class="row">
                                            <div class="col-12">
                                                <fieldset class="form-label-group mb-0">
                                                    <textarea data-length=20 class="form-control char-textarea" id="textarea-counter" rows="3" placeholder="Counter"></textarea>
                                                    <label for="textarea-counter">Counter</label>
                                                </fieldset>
                                                <small class="counter-value float-right"><span class="char-count">0</span> / 20 </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Counter Textarea end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

<?php
include "include/footer.php";
?>