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
                            <h2 class="content-header-title float-left mb-0">Context Menu</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Extensions</a>
                                    </li>
                                    <li class="breadcrumb-item active">Context Menu
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
                <!-- context-menu Starts -->
                <section id="context-menu">
                    <div class="row">
                        <!-- Basic context menu starts -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Menu</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            To create a basic context menu use <code>$.contextMenu()</code> and the add your target with
                                            <code>{selector: "myId"}</code> and then create your items for menu with
                                            <code>{items:{"name" : "item 1"}}</code>
                                        </p>
                                        <button class="btn btn-primary mr-1 mb-1" type="button" id="basic-context-menu">
                                            Right Click On Me
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Basic context menu ends -->

                        <!-- left click context menu starts -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Left Click</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            To create a context menu which pops up on left click use <code>{trigger : "left"}</code>.
                                        </p>
                                        <button class="btn btn-primary mr-1 mb-1" type="button" id="left-click-context-menu">
                                            Left Click On Me
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- left click context menu ends -->

                        <!-- submenu context menu starts -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Submenu</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            You can create context menu with sub menus by using <code>{fold}</code> and adding menu items inside of
                                            it.
                                        </p>
                                        <button class="btn btn-primary mr-1 mb-1" type="button" id="submenu-context-menu">
                                            With Submenu
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- submenu context menu ends -->

                        <!-- hover context menu starts -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Hover</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            To create a context menu which pops on hover use <code>{trigger : true}</code>
                                        </p>
                                        <button class="btn btn-primary mr-1 mb-1" type="button" id="hover-context-menu">
                                            Hover Over Me
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- hover context menu ends -->
                    </div>
                </section>
                <!-- context-menu Ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

<?php
include "include/footer.php";
?>