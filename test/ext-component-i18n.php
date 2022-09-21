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
                            <h2 class="content-header-title float-left mb-0">i18n</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Extensions</a>
                                    </li>
                                    <li class="breadcrumb-item active">i18n
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
                <!-- internationalization starts -->

                <section id="internationalization">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Change Locale</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="language-options checkbox">
                                            <div class="vs-radio-con vs-radio-primary mb-1">
                                                <input class="i18n-lang-option" type="radio" name="i18n-lang-radios" checked="" value="false" data-lng="en_p">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">English</span>
                                            </div>
                                            <div class="vs-radio-con vs-radio-primary mb-1">
                                                <input class="i18n-lang-option" type="radio" name="i18n-lang-radios" value="false" data-lng="fr_p">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">French</span>
                                            </div>
                                            <div class="vs-radio-con vs-radio-primary mb-1">
                                                <input class="i18n-lang-option" type="radio" name="i18n-lang-radios" value="false" data-lng="de_p">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">German</span>
                                            </div>
                                            <div class="vs-radio-con vs-radio-primary mb-1">
                                                <input class="i18n-lang-option" type="radio" name="i18n-lang-radios" value="false" data-lng="pt_p">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Portuguese</span>
                                            </div>
                                        </div>

                                        <div class="card border mt-3 card-localization">
                                            <div class="card-header">
                                                <h4 class="card-title">Card Title</h4>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-text" data-i18n="key">
                                                        Cake sesame snaps cupcake gingerbread danish I love gingerbread. Apple pie pie jujubes chupa chups
                                                        muffin halvah lollipop. Chocolate cake oat cake tiramisu marzipan sugar plum. Donut sweet pie oat
                                                        cake dragée fruitcake cotton candy lemon drops.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- internationalization starts -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

<?php
include "include/footer.php";
?>