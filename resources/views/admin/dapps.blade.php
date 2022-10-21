<!DOCTYPE html>
<html lang="en">

@include('admin.layout.head')

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include('admin.layout.sidebar', ['status' => 'dapps'])
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
                                    <div class="phcol partnership_mobile" id="partnership_mobile">
                                        <div class="sponsor">
                                            <!---->
                                            <div class="content"><a target="_blank" href="https://bnbminer.finance?moonarch"><img src="../assets/images/bnbminer15.gif" alt="BNBMiner-S" data-xblocker="passed" style="visibility: visible;width:100%;"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                <li class="nav-item">
                                    <a href="/admin/dapps" class="nav-link active"> <span class="hidden-xs" style="font-size:20px;">ROI Dapp & Miner</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/token" class="nav-link"> <span class="hidden-xs" style="font-size:20px;">Token</span></a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <div class="row row-group justify-content-center partnership_self">
                                        <div class="phcols">
                                            <div class="phcol title">
                                                <div class="title1">LINKS</div>
                                                <div>
                                                    <a href="https://t.me/defidetective" alt="owner telegram" target="_blank">Contact Us</a>
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
                                            <div class="phcol partnership" id="partnership">
                                                <div class="sponsor">
                                                    <!---->
                                                    <div class="content"><a target="_blank" href="https://bnbminer.finance?moonarch"><img src="../assets/images/bnbminer15.gif" alt="BNBMiner-S" data-xblocker="passed" style="visibility: visible;width:100%;"></a></div>
                                                </div>
                                            </div>
                                            <div class="phcol promotion" id="promotion">
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
                                                        <h4 class="modal-title">Add ROI dApp</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <input type="hidden" id="row_id" value="" />
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-3">
                                                                        <label for="mining_group_url">WEBSITE URL</label>
                                                                        <input type="text" class="form-control" id="mining_group_url" placeholder="ex: https://wealthmountain.app/binance">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="mining_group_name">WEBSITE</label>
                                                                        <input type="text" class="form-control" id="mining_group_name" placeholder="ex: Wealth Mountain">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="kyc">DEFI BADGE</label>
                                                                        <input type="text" class="form-control" id="kyc" placeholder="DEFI BADGE">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="logo_url">LOGO</label>
                                                                        <input type="text" class="form-control" id="logo_url" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-4">
                                                                        <label for="tg_group">TELEGRAM</label>
                                                                        <input type="text" class="form-control" id="tg_group">
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="discode_link">DISCORD</label>
                                                                        <input type="text" class="form-control" id="discord_link">
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="twitter_link">TWITTER</label>
                                                                        <input type="text" class="form-control" id="twitter_link">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-4">
                                                                        <label for="token">TOKEN</label>
                                                                        <input type="text" class="form-control token" name="token" list="token" />
                                                                        <datalist id="token">
                                                                            <option value="BNB">BNB</option>
                                                                            <option value="BUSD">BUSD</option>
                                                                            <option value="USDT">USDT</option>
                                                                            <option value="ETH">ETH</option>
                                                                            <option value="AVAX">AVAX</option>
                                                                        </datalist>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="contract">CONTRACT</label>
                                                                        <input type="text" class="form-control" id="contract" placeholder="Contract">
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="audit">AUDIT</label>
                                                                        <input type="text" class="form-control" id="audit" placeholder="Audit">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    
                                                                    <div class="form-group col-md-6">
                                                                        <label for="fees">FEES</label>
                                                                        <input type="text" class="form-control" id="fees" placeholder="ex: 10% / 2%">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="age">AGE(Launch date)</label>
                                                                        <input type="date" class="form-control" id="age" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="daily">DAILY%</label>
                                                                        <input type="text" class="form-control" id="daily" placeholder="ex: 5%">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="tvl">TVL</label>
                                                                        <input type="number" class="form-control" disabled id="tvl">
                                                                    </div>
                                                                    <!-- <div class="form-group col-md-4">
                                                                        <label for="tvl24h">TVL 24H</label>
                                                                        <input type="text" class="form-control" disabled id="tvl24h">
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
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">logo</th>
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">website</th>
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">defi badge</th>
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
                                                        <th scope="col" style="padding-right:5px !important;padding-left:5px !important;text-align:center;vertical-align:middle;">Delete/Edit</th>
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
        @include('admin.layout.footer', ['status' => ''])
        <!--End footer-->

        <!--start color switcher-->
        <!--end color switcher-->

    </div>
    <!--End wrapper-->
    <script src="../assets/js/dapps_admin.js"></script>
</body>

</html>