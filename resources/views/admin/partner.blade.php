<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')
<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include('admin.layout.sidebar', ['status' => 'partner'])
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        @include('admin.layout.header')
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid" style="padding-left:0px !important;padding-right:0px !important;">

                <!--Start Dashboard Content-->

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body" style="padding: 0px !important">
                            <div class="col-12 col-lg-12 col-xl-12" style="padding: 0px !important">
                                <button type="button" class="btn btn-light px-5" data-toggle="modal" data-target="#myModal"><i class="icon-plus"></i> Add</button>
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="background-color: rgb(2 28 38);">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">PARTNER</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label for="partner_name">NAME</label>
                                                                <input type="text" class="form-control" id="partner_name" placeholder="ex: George stamp">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="partner_url">URL</label>
                                                                <input type="text" class="form-control" id="partner_url" placeholder="ex: http://georgestamp.xyz/">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="logo_url">LOGO</label>
                                                                <input type="text" class="form-control" id="logo_url" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label for="partner_website">WEBSITE</label>
                                                                <input type="text" class="form-control" id="partner_website" placeholder="">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="partner_telegram">TELEGRAM</label>
                                                                <input type="text" class="form-control" id="partner_telegram" placeholder="ex: https://t.me/GeorgeStamp">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="partner_twitter">TWITTER</label>
                                                                <input type="text" class="form-control" id="partner_twitter" placeholder="ex: https://twitter.com/">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success save_btn">Save</button>
                                                        <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal">Close</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body" style="padding: 0px !important">
                                        <!-- <a href="https://t.me/DefiSpammerAdmin" target="_blank"><button type="submit" class="btn btn-light px-5"><i class="icon-plus"></i> Add ROI dApp</button></a> -->
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody id="partnerTbody">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row-->

                <!--End Dashboard Content-->

                <!--start overlay-->
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->

            </div>
            <!-- End container-fluid-->

        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        @include('admin.layout.footer', ['status' => ''])
        <!--End footer-->

        <!--start color switcher-->
        <!--end color switcher-->

    </div>
    <!--End wrapper-->
    <script src="../assets/js/partner_admin.js"></script>
</body>

</html>