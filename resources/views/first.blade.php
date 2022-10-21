<html>

<head>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
</head>
<style>
    body {
        background-image: url("./assets/images/first/template3.png");
        background-size: 100% 100%;
    }

    .logo-img {
        width: 100%;
    }

    .time-box {
        width: 85%;
        height: 140px;
        position: absolute;
        margin-top: 17%;
        border: solid 5px #F8DEB5;
        border-radius: 11px;
    }

    .e-timebox {
        border: solid 3px #F8DEB5;
        border-radius: 11px;
        max-width: 97px !important;
        margin-left: 10px;
        margin-top: 9px;
        height: 86%;
        color: #F8DEB5;
        font-size: 4rem;
        display: flex !important;
        text-align: center;
        padding-left: 28px;
    }

    @media (min-width: 480px) {
        .e-timebox {
            max-width: 73px !important;
            padding-left: 17px;
        }

        .logo-img {
            width: 120%;
        }

        .time-box {
            width: 107%;
        }

        .item {
            min-width: 90% !important;
            margin-top: -28%;
        }

        .second-text-section {
            margin-top: 0px;
        }

        .first-text-section {
            margin-top: 2%;
        }

        .search-img {
            width: 100%;
        }
    }

    @media(min-width:985px) {
        .logo-img {
            width: 70%;
        }

        .e-timebox {
            max-width: 97px !important;
            padding-left: 28px;
        }

        .time-box {
            width: 85%;
        }

        .item {
            min-width: 20% !important;
            margin-top: 0;
        }

        .second-text-section {
            margin-top: -14%;
        }

        .first-text-section {
            margin-top: -15%;
        }

        .search-img {
            width: 80%;
        }
    }
</style>

<body>
    <div class="container">
        <div class="form-row" style="margin-top:-2%;">
            <div class="form-group col-md-12 justify-content-center d-flex">
                <img src="./assets/images/first/4.png" class="logo-img" alt="">
            </div>
        </div>
        <div class="form-row justify-content-center first-text-section">
            <div class="form-group col-md-4 col-sm-12 d-flex item">
                <img src="./assets/images/first/template5.png" style="width:100%" alt=""></img>
            </div>
            <div class="form-group col-md-4 col-sm-12 d-flex item">
                <img src="./assets/images/first/template6.png" style="width:100%" alt="">
            </div>
            <div class="form-group col-md-4 col-sm-12 d-flex item">
                <img src="./assets/images/first/template7.png" style="width:100%" alt="">
            </div>
        </div>
        <div class="form-row justify-content-center second-text-section">
            <div class="form-group col-md-auto"></div>
            <div class="form-group col-md-4 col-sm-12 d-flex item">
                <img src="./assets/images/first/template8.png" style="width:100%" alt="">
            </div>
            <div class="form-group col-md-4 col-sm-12 d-flex item">
                <img src="./assets/images/first/template9.png" style="width:100%" alt="">
            </div>
            <div class="form-group col-md-auto"></div>
        </div>
        <div class="form-row justify-content-center" style="margin-top:-15%;">
            <div class="form-group col-md-12 d-flex justify-content-center" style="margin-top:-7%;">
                <img src="./assets/images/first/template11.png" class="search-img" alt="">
                <div class="time-box form-row">
                    <div class="form-group col-md-3 col-sm-12 d-flex h-100">
                        <div class="form-group col-md-6 d-flex e-timebox day1"></div>
                        <div class="form-group col-md-6 d-flex e-timebox day2"></div>
                    </div>
                    <div class="form-group col-md-3 col-sm-12 d-flex h-100">
                        <div class="form-group col-md-6 d-flex e-timebox time1"></div>
                        <div class="form-group col-md-6 d-flex e-timebox time2"></div>
                    </div>
                    <div class="form-group col-md-3 col-sm-12 d-flex h-100">
                        <div class="form-group col-md-6 d-flex e-timebox min1"></div>
                        <div class="form-group col-md-6 d-flex e-timebox min2"></div>
                    </div>
                    <div class="form-group col-md-3 col-sm-12 d-flex h-100">
                        <div class="form-group col-md-6 d-flex e-timebox sec1"></div>
                        <div class="form-group col-md-6 d-flex e-timebox sec2"></div>
                    </div>
                </div>
            </div>
            <!-- <div class="form-group col-md-6" style="position: absolute;margin-left: 31%;margin-top:2%;">
                <img src="./assets/images/first/12.png" style="width:70%;" alt="">
            </div> -->
        </div>
    </div>
    <script src="./assets/js/jquery.min.js"></script>
    <script>
        var leftSecond = <?php echo $leftSecond; ?>;
        if (leftSecond <= 0) {
            location.href = "/dapps";
        }
        setInterval(function() {
            console.log(leftSecond);
            leftSecond = leftSecond - 1;
            var leftDay = Math.floor(leftSecond / 24 / 3600);
            var leftSecond2 = leftSecond - 24 * 3600 * leftDay;
            var leftHour = Math.floor(leftSecond2 / 3600) + "";
            var leftSecond3 = leftSecond2 - 3600 * leftHour;
            var leftMin = Math.floor(leftSecond3 / 60) + "";
            var leftSec = Math.floor(leftSecond3 % 60) + "";
            $(".day1").text(0);
            $(".day2").text(leftDay);
            if (leftHour * 1 < 10) {
                $(".time1").text(0);
                $(".time2").text(leftHour);
            } else {
                $(".time1").text(leftHour[0]);
                $(".time2").text(leftHour[1]);
            }
            if (leftMin * 1 < 10) {
                $(".min1").text(0);
                $(".min2").text(leftMin);
            } else {
                $(".min1").text(leftMin[0]);
                $(".min2").text(leftMin[1]);
            }
            if (leftSec * 1 < 10) {
                $(".sec1").text(0);
                $(".sec2").text(leftSec);
            } else {
                $(".sec1").text(leftSec[0]);
                $(".sec2").text(leftSec[1]);
            }
            if (leftSecond <= 0) {
                location.href = "/dapps";
            }
        }, 1000);
    </script>
</body>

</html>