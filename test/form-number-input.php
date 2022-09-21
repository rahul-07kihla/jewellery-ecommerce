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
                            <h2 class="content-header-title float-left mb-0">Number Input</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Form Elements</a>
                                    </li>
                                    <li class="breadcrumb-item active">Number Input
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
                <!-- Bootstrap TouchSpin Spinners start -->
                <section id="basic-touchspin">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Touchspin</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Add <code>.touchspin</code> class with input tag to add touchspin input group. Add <code>.disabled-touchspin</code> class and add attribute <code>disabled</code> with <code>input</code> tag to add disabled touchspin input group.</p>
                                            </div>
                                            <div class="d-inline-block mb-1">
                                                <div class="input-group">
                                                    <input type="number" class="touchspin" value="50">
                                                </div>
                                            </div>
                                            <div class="d-inline-block mb-1">
                                                <div class="input-group disabled-touchspin">
                                                    <input type="number" class="touchspin" value="50" disabled>
                                                </div>
                                            </div>
                                            <div class="d-inline-block mb-1">
                                                <div class="input-group">
                                                    <input type="number" class="touchspin-icon" value="50">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Bootstrap TouchSpin Spinners end -->

                <!-- Bootstrap TouchSpin Spinners Size start -->
                <section id="touchspin-size">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Size</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Add <code>.input-group-lg</code> and <code>.input-group-sm</code> class for touchspin large and small respectively.</p>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="input-group input-group-lg">
                                                    <input type="number" class="touchspin" value="50">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="input-group">
                                                    <input type="number" class="touchspin" value="50">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="input-group input-group-sm">
                                                    <input type="number" class="touchspin" value="50">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Bootstrap TouchSpin Spinners end -->

                <!-- Bootstrap TouchSpin Spinners Decimal start -->
                <section id="touchspin-decimal">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Decimal</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Set <code>data-bts-step</code> and <code>data-bts-decimals</code> attributes for decimal type Input Touchspin.</p>
                                            </div>
                                            <div class="input-group">
                                                <input type="text" class="touchspin" value="50" data-bts-step="0.5" data-bts-decimals="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Bootstrap TouchSpin Spinners Decimal end -->

                <!-- Bootstrap TouchSpin Spinners Min-max start -->
                <section id="touchspin-min-max">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Min - Max</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Set <code>min</code> and <code>max</code> attributes values for minimum and maximum in page js file.</p>
                                            </div>
                                            <div class="input-group">
                                                <input type="number" class="touchspin-min-max" value="19">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Bootstrap TouchSpin Spinners Min - Max end -->

                <!-- Bootstrap TouchSpin Spinners Step start -->
                <section id="touchspin-step">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Step</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Set <code>step</code> attribute value in page js file.</p>
                                            </div>
                                            <div class="input-group">
                                                <input type="number" class="touchspin-step" value="45">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Bootstrap TouchSpin Spinners Min - Max end -->

                <!-- Bootstrap TouchSpin Spinners Colors start -->
                <section id="touchspin-colors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Colors Variation</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>set <code>data-bts-button-down-class</code> &amp; <code>data-bts-button-up-class</code> attribute and add value as <code>btn btn-{color}</code> for different colors spinner.</p>
                                            </div>
                                            <div class="d-inline-block mb-1">
                                                <div class="input-group">
                                                    <input type="text" class="touchspin-color" value="60" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary" />
                                                </div>
                                            </div>
                                            <div class="d-inline-block mb-1">
                                                <div class="input-group">
                                                    <input type="text" class="touchspin-color" value="60" data-bts-button-down-class="btn btn-success" data-bts-button-up-class="btn btn-success" />
                                                </div>
                                            </div>
                                            <div class="d-inline-block mb-1">
                                                <div class="input-group">
                                                    <input type="text" class="touchspin-color" value="60" data-bts-button-down-class="btn btn-warning" data-bts-button-up-class="btn btn-warning" />
                                                </div>
                                            </div>
                                            <div class="d-inline-block mb-1">
                                                <div class="input-group">
                                                    <input type="text" class="touchspin-color" value="60" data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info" />
                                                </div>
                                            </div>
                                            <div class="d-inline-block mb-1">
                                                <div class="input-group">
                                                    <input type="text" class="touchspin-color" value="60" data-bts-button-down-class="btn btn-danger" data-bts-button-up-class="btn btn-danger" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Bootstrap TouchSpin Spinners Decimal end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

<?php
include "include/footer.php";
?>