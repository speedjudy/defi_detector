<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')
<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include('admin.layout.sidebar', ['status' => 'adsmanage'])
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
                                                <h4 class="modal-title">Advertise</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form action="/admin/adsmanage/add" id="ads_form" method="POST" enctype="multipart/form-data">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="form-row">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <div class="form-group col-md-4">
                                                                    <label for="ads_img">IMAGE</label>
                                                                    <input class="form-control" required id="ads_img" name="ads_img" type="file">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="ads_url">URL</label>
                                                                    <input type="text" class="form-control" name="ads_url" id="ads_url">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="level">LEVEL</label>
                                                                    <select id="level" name="level" class="form-control">
                                                                        <option selected>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success save_btn">Save</button>
                                                            <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body" style="padding: 0px !important">
                                        <!-- <a href="https://t.me/DefiSpammerAdmin" target="_blank"><button type="submit" class="btn btn-light px-5"><i class="icon-plus"></i> Add ROI dApp</button></a> -->
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody id="adsmanageTbody">
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
    <script src="../assets/js/adsmanage_admin.js"></script>
</body>

</html>