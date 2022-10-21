<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css" />
<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top">
        <ul class="navbar-nav mr-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link toggle-menu" href="javascript:void();">
                    <i class="icon-menu menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://t.me/defidetective" style="padding: 3px 6px 3px 6px;background-color: #216894;border-radius: 4px;" target="_blank"><span>Join Defi Detective Group</span></a>
                <!-- <form class="search-bar">
                    <input type="text" class="form-control" placeholder="Enter keywords">
                    <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                </form> -->
            </li>
        </ul>
        <ul class="navbar-nav align-items-center right-nav-link">
            <li class="nav-item">
                <a class="nav-link" style="cursor:pointer;" data-toggle="modal" data-target="#change_pwd_modal">
                    <span class="user-profile"><i class="icon-key mr-2"></i></span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav align-items-center right-nav-link">
            <li class="nav-item">
                <a class="nav-link" style="cursor:pointer;" onClick="logout()">
                    <span class="user-profile"><i class="icon-logout mr-2"></i></span>
                </a>
            </li>
        </ul>
    </nav>
</header>
<div class="modal fade" id="change_pwd_modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="background-color: rgb(2 28 38);">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Password Change</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="new_password">New Password</label>
                                <input type="password" class="form-control" name="new_password" id="new_password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success pwd_save_btn">Save</button>
                        <button type="button" class="btn btn-secondary pwd_close_btn" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function logout() {
        sessionStorage.removeItem("x-t");
        sessionStorage.removeItem("user");
        location.href = "/";
    }
</script>