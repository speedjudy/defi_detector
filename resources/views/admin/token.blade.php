<!DOCTYPE html>
<html lang="en">

@include('admin.layout.head')

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include('admin.layout.sidebar', ['status' => 'token'])
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        @include('admin.layout.header')
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
                                    <div class="phcol partnership_mobile partnership_mobile_token" id="partnership_mobile_token">
                                        <div class="sponsor">
                                            <!---->
                                            <div class="content"><a target="_blank" href="https://bnbminer.finance?moonarch"><img src="../assets/images/bnbminer15.gif" alt="BNBMiner-S" data-xblocker="passed" style="visibility: visible;width:100%;"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                <li class="nav-item">
                                    <a href="/admin/dapps" class="nav-link"> <span class="hidden-xs" style="font-size:20px;">ROI Dapp & Miner</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/token" class="nav-link active"> <span class="hidden-xs" style="font-size:20px;">Token</span></a>
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
                                                    <a target="_blank" href="/defidetective.app.pdf" alt="whitepaper">
                                                        <img src="/assets/images/doc.png" alt="telegram" data-xblocker="passed" style="visibility: visible; color:white;">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="phcol partnership partnership_token" id="partnership_token">
                                                <div class="sponsor">
                                                    <!---->
                                                    <div class="content"><a target="_blank" href="https://bnbminer.finance?moonarch"><img src="../assets/images/bnbminer15.gif" alt="BNBMiner-S" data-xblocker="passed" style="visibility: visible;width:100%;"></a></div>
                                                </div>
                                            </div>
                                            <div class="phcol promotion promotion_token" id="promotion_token">
                                                <div class="sponsor">
                                                    <!---->
                                                    <div class="content"><a target="_blank" href="https://wealthmountain.app/binance"><img src="../assets/images/wealth_big.gif" style="width:100%;" alt="WealthMountain"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-xl-12" style="padding-right: 0px !important;padding-left: 0px !important;padding-top: 20px;">
                                        <button type="button" class="btn btn-light px-5 open_btn" data-toggle="modal" data-target="#myModal"><i class="icon-plus"></i> Apply Listing</button>
                                        <!-- The ADD Modal -->
                                        <div class="modal fade" id="myModal">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content" style="background-color: rgb(2 28 38);">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Add Token</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <input type="hidden" id="row_id" value="" />
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-3">
                                                                        <label for="token_name">NAME</label>
                                                                        <input type="text" class="form-control" id="token_name" placeholder="name">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="coin">COIN</label>
                                                                        <input type="text" class="form-control" id="coin" placeholder="coin">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="website">WEBSITE</label>
                                                                        <input type="text" class="form-control" id="website" placeholder="website">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="presale_buy">PRESALE / BUY</label>
                                                                        <input type="text" class="form-control" id="presale_buy" placeholder="PRESALE / BUY">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-3">
                                                                        <label for="chart">CHART</label>
                                                                        <input type="text" class="form-control" id="chart" placeholder="chart">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="chain">CHAIN</label>
                                                                        <input type="text" class="form-control chain" name="chain" list="chain" />
                                                                        <datalist id="chain">
                                                                            <option value="ETH">ETH</option>
                                                                            <option value="BSC">BSC</option>
                                                                            <option value="AVAX">AVAX</option>
                                                                            <option value="POLYGON">POLYGON</option>
                                                                        </datalist>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="telegram">TELEGRAM</label>
                                                                        <input type="text" class="form-control" id="telegram" placeholder="telegram">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="discord">DISCORD</label>
                                                                        <input type="text" class="form-control" id="discord" placeholder="discord">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-3">
                                                                        <label for="twitter">TWITTER</label>
                                                                        <input type="text" class="form-control" id="twitter" placeholder="twitter">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="audit">AUDIT</label>
                                                                        <input type="text" class="form-control" id="audit" placeholder="audit">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="contract">CONTRACT</label>
                                                                        <input type="text" class="form-control" id="contract" placeholder="contract">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="kyc">DEFI BADGE</label>
                                                                        <input type="text" class="form-control" id="kyc" placeholder="defi badge">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="launch">LAUNCH</label>
                                                                        <input type="date" class="form-control" id="launch">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="price">DECIMALS</label>
                                                                        <input type="text" class="form-control" id="price" placeholder="decimals">
                                                                    </div>
                                                                    <!-- <div class="form-group col-md-3">
                                                                        <label for="change_24h">CHANGE 24H</label>
                                                                        <input type="text" class="form-control" id="change_24h" placeholder="change 24h">
                                                                    </div> -->
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="level">LEVEL</label>
                                                                        <select id="level" class="form-control">
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option selected>3</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="showflag">SHOW/HIDE</label>
                                                                        <select id="showflag" class="form-control">
                                                                            <option selected>show</option>
                                                                            <option>hide</option>
                                                                        </select>
                                                                    </div>
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
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">#</th>
                                                    <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Coin</th>
                                                    <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Name</th>
                                                    <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Website</th>
                                                    <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Defi badge</th>
                                                    <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Presale/buy</th>
                                                    <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Chart</th>
                                                    <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Chain</th>
                                                    <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">telegram</th>
                                                    <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">discord</th>
                                                    <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">twitter</th>
                                                    <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Audit</th>
                                                    <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Contract</th>
                                                    <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">launch</th>
                                                    <!-- <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Market Cap</th> -->
                                                    <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Decimals</th>
                                                    <!-- <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Change 24h</th> -->
                                                    <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Delete/Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tokenTbody">
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

            @include('admin.layout.footer', ['status' => 'token'])
        </div>
        <!-- End container-fluid-->

        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <!--End footer-->

        <!--start color switcher-->
        <!--end color switcher-->

    </div>
    <!--End wrapper-->
    <script src="../assets/js/tokens_admin.js"></script>
</body>

</html>