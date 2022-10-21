<!DOCTYPE html>
<html lang="en">

@include('layout.head')


<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include('layout.sidebar', ['status' => 'dapps'])
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        @include('layout.header')
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid" style="padding-left:0px !important;padding-right:0px !important;">

                <!--Start Dashboard Content-->

                <div class="col-lg-12">
                    <div class="card" style="margin-bottom: 0px !important;">
                        <div class="card-body" style="padding: 0px !important">
                            <div class="row justify-content-center partnership_parent">
                                <div class="phcols" style="margin-left:-8px;">
                                    <div class="phcol partnership_mobile" id="partnership_mobile">
                                        <div class="sponsor">
                                            <!---->
                                            <div class="content"><a target="_blank" href="https://bnbminer.finance?moonarch"><img src="./assets/images/bnbminer15.gif" alt="BNBMiner-S" data-xblocker="passed" style="visibility: visible;width:100%;"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                <li class="nav-item">
                                    <a href="dapps" class="nav-link active"> <span class="hidden-xs" style="font-size:20px;">ROI Dapp & Miner</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="token" class="nav-link"> <span class="hidden-xs" style="font-size:20px;">Token</span></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <div class="row row-group justify-content-center partnership_self">
                                        <div class="phcols">
                                            <div class="phcol title">
                                            <div class="title1">LINKS</div>
                                                <div>
                                                    <a href="https://t.me/defidetectiveapp" alt="owner telegram" target="_blank">Contact Us</a>
                                                </div>
                                                <div class="title1">FOLLOW US</div>
                                                <div class="social">
                                                    <a target="_blank" href="https://t.me/defidetective" alt="telegram">
                                                        <img src="/assets/images/telegram.png" alt="telegram" data-xblocker="passed" style="visibility: visible; color:white;">
                                                    </a>
                                                    <a target="_blank" href="https://twitter.com/defidetectorapp" alt="twitter">
                                                        <img src="/assets/images/twitter.svg" alt="telegram" data-xblocker="passed" style="visibility: visible; color:white;">
                                                    </a>
                                                    <a target="_blank" href="https://discord.gg/tXBq6HkJMc" alt="discord">
                                                        <img src="/assets/images/discord.png" alt="telegram" data-xblocker="passed" style="visibility: visible; color:white;">
                                                    </a>
                                                    <a target="_blank" href="./defidetective.app.pdf" alt="whitepaper">
                                                        <img src="/assets/images/doc.png" alt="telegram" data-xblocker="passed" style="visibility: visible; color:white;">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="phcol partnership" id="partnership">
                                                <div class="sponsor">
                                                    <!---->
                                                    <div class="content"><a target="_blank" href="https://bnbminer.finance?moonarch"><img src="./assets/images/bnbminer15.gif" alt="BNBMiner-S" data-xblocker="passed" style="visibility: visible;width:100%;"></a></div>
                                                </div>
                                            </div>
                                            <div class="phcol promotion" id="promotion">
                                                <div class="sponsor">
                                                    <!---->
                                                    <div class="content"><a target="_blank" href="https://wealthmountain.app/binance"><img src="./assets/images/wealth_big.gif" style="width:100%;" alt="WealthMountain"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-xl-12" style="padding-right: 0px !important;padding-left: 0px !important;padding-top: 20px;">
                                        <a href="https://t.me/DefiSpammerAdmin" target="_blank"><button type="submit" class="btn btn-light px-5"><i class="icon-plus"></i> Apply Listing</button></a>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">logo</th>
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">website</th>
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Defi badge</th>
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">telegram</th>
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Discord</th>
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Twitter</th>
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Token</th>
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Contract</th>
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Audit</th>
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Fees</th>
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Age</th>
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Daily%</th>
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">TVL</th>
                                                        <!-- <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">TVL 24h</th> -->
                                                        <!-- <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Actions</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody id="dappsTbody">
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
    <script src="https://rawgit.com/moment/moment/2.2.1/min/moment.min.js"></script>
	<script src="../assets/js/dapps.js"></script>
</body>

</html>