<style>
    footer {
        height: 65px;
    }

    .prom-container {
        bottom: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: -10px auto;
        z-index: 100;
    }

    .content {
        padding-top: 7px;
        justify-content: space-around;
        display: flex;
    }

    @media only screen and (max-width: 990px) {
        .prom-container {
            position: fixed;
            bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: -10px auto !important;
            z-index: 100;
        }
    }

    .prom-container .prom-content {
        background: #f2f2f2;
        padding: 0;
        color: #2c3e50;
        flex: 1;
        overflow: hidden;
        width: 100%;
        height: auto;
        border-radius: 5px;
    }
</style>
@if($status =='token')
<footer class="footer" id="footer_token">
    @else
    <footer class="footer" id="footer">
        @endif
        <div class="container">
            <div class="content">
                <div class="prom-container">
                    <div class="content-container">
                        <div class="prom-content"><a target="_blank" href="https://www.busdwealth.com/"><img src="./assets/images/wealth_small.gif" style="border-radius:3px;width:100%;" alt="BUSDWealth"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript-->
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="./assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="./assets/js/sidebar-menu.js"></script>
    <!-- loader scripts -->
    <script src="./assets/js/jquery.loading-indicator.js"></script>
    <!-- Custom scripts -->
    <script src="./assets/js/app-script.js"></script>
    <!-- Chart js -->

    <script src="./assets/plugins/Chart.js/Chart.min.js"></script>

    <script src="./assets/plugins/axios/axios.min.js"></script>
    <script src="./assets/plugins/ethers/ethers.umd.min.js"></script>

    <!-- Index js -->
    <!-- <script src="./assets/js/index.js"></script> -->

    <script>
        $(function() {
            getData();
            var normalRowStyle = "vertical-align:middle;padding-right:5px !important;padding-left:5px !important;text-align:center;";

            function getData() {
                $.get(
                    "/admin/adsmanage/totalget", {},
                    function(res) {

                        if (res.length > 0) {
                            var topAds = [];
                            var middleAds = [];
                            var bottomAds = [];

                            var topAds_token = [];
                            var middleAds_token = [];
                            var bottomAds_token = [];
                            for (var i = 0; i < res.length; i++) {
                                if (res[i]['kind']) {
                                    switch (res[i]['level']) {
                                        case 1:
                                            topAds_token.push(res[i]);
                                            break;
                                        case 2:
                                            middleAds_token.push(res[i]);
                                            break;
                                        case 3:
                                            bottomAds_token.push(res[i]);
                                            break;
                                    }
                                } else {
                                    switch (res[i]['level']) {
                                        case 1:
                                            topAds.push(res[i]);
                                            break;
                                        case 2:
                                            middleAds.push(res[i]);
                                            break;
                                        case 3:
                                            bottomAds.push(res[i]);
                                            break;
                                    }
                                }
                            }
                            if (topAds.length > 0) {
                                var orderNum = 0;
                                var increaseFlag = 1;
                                if (topAds.length == 1) {
                                    var img = './uploads/' + topAds[orderNum]['image'];
                                    $("#partnership").find("img").attr("src", img);
                                    $("#partnership").find("a").attr("href", topAds[orderNum]['link']);
                                    $("#partnership_mobile").find("img").attr("src", img);
                                    $("#partnership_mobile").find("a").attr("href", topAds[orderNum]['link']);
                                } else {
                                    var img = './uploads/' + topAds[orderNum]['image'];
                                    $("#partnership").find("img").attr("src", img);
                                    $("#partnership").find("a").attr("href", topAds[orderNum]['link']);
                                    $("#partnership_mobile").find("img").attr("src", img);
                                    $("#partnership_mobile").find("a").attr("href", topAds[orderNum]['link']);
                                    setInterval(function() {
                                        var img = './uploads/' + topAds[orderNum]['image'];
                                        $("#partnership").find("img").attr("src", img);
                                        $("#partnership").find("a").attr("href", topAds[orderNum]['link']);
                                        $("#partnership_mobile").find("img").attr("src", img);
                                        $("#partnership_mobile").find("a").attr("href", topAds[orderNum]['link']);
                                        if (orderNum >= topAds.length - 1 || increaseFlag == 0) {
                                            increaseFlag = 0;
                                            orderNum--;
                                        }
                                        if (increaseFlag == 1) {
                                            orderNum++;
                                        }
                                        if (orderNum == 0) {
                                            increaseFlag = 1;
                                        }
                                    }, 15000);
                                }
                            }
                            if (middleAds.length > 0) {
                                var orderNum2 = 0;
                                var increaseFlag2 = 1;
                                if (middleAds.length == 1) {
                                    if (middleAds[orderNum2]) {
                                        var img = './uploads/' + middleAds[orderNum2]['image'];
                                        $("#promotion").find("img").attr("src", img);
                                        $("#promotion").find("a").attr("href", middleAds[orderNum2]['link']);
                                    }
                                } else {
                                    var img = './uploads/' + middleAds[orderNum2]['image'];
                                    $("#promotion").find("img").attr("src", img);
                                    $("#promotion").find("a").attr("href", middleAds[orderNum2]['link']);
                                    setInterval(function() {
                                        if (middleAds[orderNum2]) {
                                            var img = './uploads/' + middleAds[orderNum2]['image'];
                                            $("#promotion").find("img").attr("src", img);
                                            $("#promotion").find("a").attr("href", middleAds[orderNum2]['link']);
                                        }
                                        if (orderNum2 >= middleAds.length - 1 || increaseFlag2 == 0) {
                                            increaseFlag2 = 0;
                                            orderNum2--;
                                        }
                                        if (increaseFlag2 == 1) {
                                            orderNum2++;
                                        }
                                        if (orderNum2 == 0) {
                                            increaseFlag2 = 1;
                                        }
                                    }, 15000);
                                }
                            }
                            if (bottomAds.length > 0) {
                                var orderNum3 = 0;
                                var increaseFlag3 = 1;
                                if (bottomAds.length == 1) {
                                    if (bottomAds[orderNum3]) {
                                        var img = './uploads/' + bottomAds[orderNum3]['image'];
                                        $("#footer").find("img").attr("src", img);
                                        $("#footer").find("a").attr("href", bottomAds[orderNum3]['link']);
                                    }
                                } else {
                                    var img = './uploads/' + bottomAds[orderNum3]['image'];
                                    $("#footer").find("img").attr("src", img);
                                    $("#footer").find("a").attr("href", bottomAds[orderNum3]['link']);
                                    setInterval(function() {
                                        if (bottomAds[orderNum3]) {
                                            var img = './uploads/' + bottomAds[orderNum3]['image'];
                                            $("#footer").find("img").attr("src", img);
                                            $("#footer").find("a").attr("href", bottomAds[orderNum3]['link']);
                                        }
                                        if (orderNum3 >= bottomAds.length - 1 || increaseFlag3 == 0) {
                                            increaseFlag3 = 0;
                                            orderNum3--;
                                        }
                                        if (increaseFlag3 == 1) {
                                            orderNum3++;
                                        }
                                        if (orderNum3 == 0) {
                                            increaseFlag3 = 1;
                                        }
                                    }, 15000);
                                }
                            }


                            //token
                            if (topAds_token.length > 0) {
                                var orderNum = 0;
                                var increaseFlag = 1;
                                if (topAds_token.length == 1) {
                                    var img = './uploads/' + topAds_token[orderNum]['image'];
                                    $("#partnership_token").find("img").attr("src", img);
                                    $("#partnership_token").find("a").attr("href", topAds_token[orderNum]['link']);
                                    $("#partnership_mobile_token").find("img").attr("src", img);
                                    $("#partnership_mobile_token").find("a").attr("href", topAds_token[orderNum]['link']);
                                } else {
                                    var img = './uploads/' + topAds_token[orderNum]['image'];
                                    $("#partnership_token").find("img").attr("src", img);
                                    $("#partnership_token").find("a").attr("href", topAds_token[orderNum]['link']);
                                    $("#partnership_mobile_token").find("img").attr("src", img);
                                    $("#partnership_mobile_token").find("a").attr("href", topAds_token[orderNum]['link']);
                                    setInterval(function() {
                                        var img = './uploads/' + topAds_token[orderNum]['image'];
                                        $("#partnership_token").find("img").attr("src", img);
                                        $("#partnership_token").find("a").attr("href", topAds_token[orderNum]['link']);
                                        $("#partnership_mobile_token").find("img").attr("src", img);
                                        $("#partnership_mobile_token").find("a").attr("href", topAds_token[orderNum]['link']);
                                        if (orderNum >= topAds_token.length - 1 || increaseFlag == 0) {
                                            increaseFlag = 0;
                                            orderNum--;
                                        }
                                        if (increaseFlag == 1) {
                                            orderNum++;
                                        }
                                        if (orderNum == 0) {
                                            increaseFlag = 1;
                                        }
                                    }, 15000);
                                }
                            }
                            if (middleAds_token.length > 0) {
                                var orderNum2 = 0;
                                var increaseFlag2 = 1;
                                if (middleAds_token.length == 1) {
                                    if (middleAds_token[orderNum2]) {
                                        var img = './uploads/' + middleAds_token[orderNum2]['image'];
                                        $("#promotion_token").find("img").attr("src", img);
                                        $("#promotion_token").find("a").attr("href", middleAds_token[orderNum2]['link']);
                                    }
                                } else {
                                    var img = './uploads/' + middleAds_token[orderNum2]['image'];
                                    $("#promotion_token").find("img").attr("src", img);
                                    $("#promotion_token").find("a").attr("href", middleAds_token[orderNum2]['link']);
                                    setInterval(function() {
                                        if (middleAds_token[orderNum2]) {
                                            var img = './uploads/' + middleAds_token[orderNum2]['image'];
                                            $("#promotion_token").find("img").attr("src", img);
                                            $("#promotion_token").find("a").attr("href", middleAds_token[orderNum2]['link']);
                                        }
                                        if (orderNum2 >= middleAds_token.length - 1 || increaseFlag2 == 0) {
                                            increaseFlag2 = 0;
                                            orderNum2--;
                                        }
                                        if (increaseFlag2 == 1) {
                                            orderNum2++;
                                        }
                                        if (orderNum2 == 0) {
                                            increaseFlag2 = 1;
                                        }
                                    }, 15000);
                                }
                            }
                            if (bottomAds_token.length > 0) {
                                var orderNum3 = 0;
                                var increaseFlag3 = 1;
                                if (bottomAds_token.length == 1) {
                                    if (bottomAds_token[orderNum3]) {
                                        var img = './uploads/' + bottomAds_token[orderNum3]['image'];
                                        $("#footer_token").find("img").attr("src", img);
                                        $("#footer_token").find("a").attr("href", bottomAds_token[orderNum3]['link']);
                                    }
                                } else {
                                    var img = './uploads/' + bottomAds_token[orderNum3]['image'];
                                    $("#footer_token").find("img").attr("src", img);
                                    $("#footer_token").find("a").attr("href", bottomAds_token[orderNum3]['link']);
                                    setInterval(function() {
                                        if (bottomAds_token[orderNum3]) {
                                            var img = './uploads/' + bottomAds_token[orderNum3]['image'];
                                            $("#footer_token").find("img").attr("src", img);
                                            $("#footer_token").find("a").attr("href", bottomAds_token[orderNum3]['link']);
                                        }
                                        if (orderNum3 >= bottomAds_token.length - 1 || increaseFlag3 == 0) {
                                            increaseFlag3 = 0;
                                            orderNum3--;
                                        }
                                        if (increaseFlag3 == 1) {
                                            orderNum3++;
                                        }
                                        if (orderNum3 == 0) {
                                            increaseFlag3 = 1;
                                        }
                                    }, 15000);
                                }
                            }
                        }
                    }, "json"
                )
            }
        });
    </script>