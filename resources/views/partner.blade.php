<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include('layout.sidebar', ['status' => 'partner'])
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        @include('layout.header')
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid" style="padding-left:0px !important;padding-right:0px !important;">

                <!--Start Dashboard Content-->

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body" style="padding: 0px !important">
                            <div class="col-12 col-lg-12 col-xl-12" style="padding: 0px !important">
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
        @include('layout.footer', ['status' => ''])
        <!--End footer-->

        <!--start color switcher-->
        <!--end color switcher-->

    </div>
    <!--End wrapper-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="../assets/js/partner.js"></script>
</body>

</html>