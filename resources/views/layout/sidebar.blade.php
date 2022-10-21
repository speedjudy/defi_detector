<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Defi detective</title>
    <!-- loader-->
    <link href="./assets/css/pace.min.css" rel="stylesheet" />
    <script src="./assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="./assets/images/logo-icon.png" type="image/x-icon">
    <!-- <link rel="shortcut icon" href="./assets/images/favicon.ico" /> -->
    <!-- Vector CSS -->
    <link href="./assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="./assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="./assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="./assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="./assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="./assets/css/app-style.css" rel="stylesheet" />

</head>
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo" style="text-align:left;padding-left: 20px;">
        <a href="https://t.me/DefiDetectiveapp" target="_blank">
            <img src="./assets/images/logo-icon.png" class="logo-icon" alt="logo icon" style="width: 40%;">
            <!-- <h5 class="logo-text">Defi detective</h5> -->
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">HOME</li>
        @if($status =='dapps')
        <li class="active">
            @else
        <li>
            @endif
            <a href="dapps">
                <i class="zmdi zmdi-home"></i> <span>ROI Dapp & Miner</span>
            </a>
        </li>
        @if($status =='token')
        <li class="active">
            @else
        <li>
            @endif
            <a href="token">
                <i class="zmdi zmdi-home"></i> <span>Token</span>
            </a>
        </li>
        <li class="sidebar-header">Services</li>
        <li>
            <a href="https://t.me/DefiDetectiveapp" target="_blank">
                <i class="zmdi zmdi-speaker"></i> <span>Advertisement</span>
            </a>
        </li>
        <li>
            <a href="https://t.me/DefiDetectiveapp" target="_blank">
                <i class="zmdi zmdi-coffee"></i> <span>Project development</span>
            </a>
        </li>
        <li>
            <a href="https://t.me/DefiDetectiveapp" target="_blank">
                <i class="zmdi zmdi-account-circle"></i> <span>Marketing</span>
            </a>
        </li>
        <li>
            <a href="https://t.me/DefiBadge" target="_blank">
                <img src="./assets/images/badge.png" width=22 style="margin-left:-4px;"></img> <span style="margin-left:8px;">DEFI BADGE</span>
            </a>
        </li>
        @if($status =='influencer')
        <li class="active">
            @else
        <li>
            @endif
            <a href="influencer">
                <i class="zmdi zmdi-view-dashboard"></i> <span>Influencers</span>
            </a>
        </li>
        @if($status =='partner')
        <li class="active">
            @else
        <li>
            @endif
            <a href="partner">
                <i class="zmdi zmdi-face"></i> <span>Partnership</span>
            </a>
        </li>

    </ul>

</div>
