$(function () {
    getData();
    $(".save_btn").click(function () {
        var mining_group_url = $("#mining_group_url").val();
        var mining_group_name = $("#mining_group_name").val();
        var logo_url = $("#logo_url").val();
        var tg_group = $("#tg_group").val();
        var discode_link = $("#discord_link").val();
        var twitter_link = $("#twitter_link").val();
        var audit = $("#audit").val();
        var contract = $("#contract").val();
        var defi_badge = $("#kyc").val();
        var token = $(".token").val();
        var fees = $("#fees").val();
        var age = $("#age").val();
        var daily = $("#daily").val();
        var tvl = "$" + $("#tvl").val();
        // var tvl24h = $("#tvl24h").val();
        var level = $("#level").val();
        var showflag = $("#showflag").val();
        if (mining_group_url == "") {
            toastr.warning("Mining group url must be filled out!");
            $("#mining_group_url").focus();
        } else if (mining_group_name == "") {
            toastr.warning("Mining group must be filled out!");
            $("#mining_group_name").focus();
        } else if (level == "") {
            toastr.warning("Level must be filled out!");
        } else if (showflag == "") {
            toastr.warning("Show flag must be filled out!");
        } else if (token == "") {
            toastr.warning("Token must be filled out!");
        } else if (contract == "") {
            toastr.warning("Contract must be filled out!");
        } else {
            $.get(
                "/admin/dapps/add",
                {
                    mining_group_url: mining_group_url,
                    mining_group_name: mining_group_name,
                    logo_url: logo_url,
                    tg_group: tg_group,
                    discode_link: discode_link,
                    twitter_link: twitter_link,
                    audit: audit,
                    contract: contract,
                    kyc: defi_badge,
                    token: token,
                    fees: fees,
                    age: age,
                    daily: daily,
                    tvl: tvl,
                    // tvl24h: tvl24h,
                    level: level,
                    showflag: showflag,
                    rid: $("#row_id").val()
                }, function (res) {
                    if (res === "Success") {
                        toastr.success("added successly!");
                        dataFormat();
                        // $("#tvl24h").val("");
                        // $(".close_btn").click();
                        getData();
                    }
                }
            )
        }
    });
    $(document).on("click", ".delete_btn", function () {
        var rowId = $(this).parent().parent().attr("rid");
        $.get(
            "/admin/dapps/delete",
            {
                rid: rowId
            }, function (res) {
                if (res == "Success") {
                    toastr.success("deleted successly!");
                    getData();
                }
            }
        );
    });
    $(".open_btn").click(function () {
        dataFormat();
    });
    $(document).on("click", ".edit_btn", function () {
        var rowId = $(this).parent().parent().attr("rid");
        var rows = $(this).parent().parent().children();
        var logo_url = rows[0].lastChild;
        var website_a = rows[1].lastChild;
        var kyc_a = rows[2].lastChild;
        var telegram_a = rows[3].lastChild;
        var discord_a = rows[4].lastChild;
        var twitter_a = rows[5].lastChild;
        var token_a = rows[6];
        var contract_a = rows[7].lastChild;
        var audit_a = rows[8].lastChild;
        var fees_a = rows[9];
        var age_a = rows[10];
        var daily_a = rows[11];
        var website_url = $(website_a).attr("href");
        var website = $(website_a).text();
        console.log(website_url, website);
        $("#mining_group_url").val(website_url);
        $("#mining_group_name").val(website);
        $("#logo_url").val($(logo_url).attr("src"));
        $("#tg_group").val($(telegram_a).attr("href"));
        $("#discord_link").val($(discord_a).attr("href"));
        $("#twitter_link").val($(twitter_a).attr("href"));
        $(".token").val($(token_a).text());
        $("#contract").val($(contract_a).attr("href"));
        $("#audit").val($(audit_a).attr("href"));
        $("#kyc").val($(kyc_a).attr("href"));
        $("#fees").val($(fees_a).text());
        $("#age").val($(age_a).attr("id"));
        $("#daily").val($(daily_a).text());
        $("#level").val($(this).parent().parent().attr("lid"));
        $("#row_id").val(rowId);
        $(".modal-title").text("Edit ROI dApp");
    });
    var normalRowStyle = "vertical-align: middle;padding-right:5px !important;padding-left:5px !important;text-align:center;";
    function getData() {
        $.get(
            "/admin/dapps/get",
            {}, function (res) {
                if (res) {
                    $("#dappsTbody").html("");
                    if (res.length == 0) {
                        $("#dappsTbody").html('<tr><th scope="col" colspan=16 style="text-align:center;vertical-align:middle;">No Data</th></tr>');
                    }
                    for (var i = 0; i < res.length; i++) {
                        var rowLevelStyle = "";
                        var color = "color: #ffffff";
                        var buyBtnBG = "";
                        switch (res[i]['level']) {
                            case 1:
                                rowLevelStyle = "background: #00004e; color: yellow;";
                                color = "color: yellow;";
                                buyBtnBG = "bg-warning";
                                break;
                            case 2:
                                if (res[i - 1]) {
                                    if (res[i - 1]['level'] == 1) {
                                        rowLevelStyle = "border-top: solid 10px white !important;color: yellow; ";
                                    }
                                }
                                if (res[i + 1]) {
                                    if (res[i + 1]['level'] == 3) {
                                        // rowLevelStyle = "border-bottom: solid 10px white !important;color: yellow;";
                                    }
                                } else {
                                    rowLevelStyle = "border-bottom: solid 10px white !important;color: yellow;";
                                }
                                if (res[i - 1] && res[i + 1]) {
                                    if (res[i - 1]['level'] == 1 && res[i + 1]['level'] == 3) {
                                        rowLevelStyle = "border-top: solid 10px white !important;border-bottom: solid 10px white !important;color: yellow;";
                                    }
                                }
                                if (res[i - 1] && !res[i + 1]) {
                                    if (res[i - 1]['level'] == 1) {
                                        rowLevelStyle = "border-top: solid 10px white !important;border-bottom: solid 10px white !important;color: yellow;";
                                    }
                                }
                                color = "color: yellow;";
                                break;
                            case 3:
                                if (res[i - 1]) {
                                    if (res[i - 1]['level'] == 1) {
                                        rowLevelStyle = "border-top: solid 10px white !important;color: yellow; ";
                                    }
                                }
                                break;
                            default:
                                break;
                        }
                        var row = "";
                        var tg = '<a href="' + res[i]['tg_group'] + '" target="_blank"><span class="badge badge-pill badge-primary">telegram</span></a>';
                        var discode = '<a href="' + res[i]['discode_link'] + '" target="_blank"><span class="badge badge-pill badge-primary">discord</span></a>';
                        var twitter = '<a href="' + res[i]['twitter_link'] + '" target="_blank"><span class="badge badge-pill badge-primary">twitter</span></a>';
                        var audit = '<a href="' + res[i]['audit'] + '" target="_blank"><span class="badge badge-pill badge-primary">audit</span></a>';
                        var contract = '<a href="' + res[i]['contract'] + '" target="_blank"><span class="badge badge-pill badge-primary">contract</span></a>';
                        var defiBadge = '<a href="' + res[i]['kyc'] + '" target="_blank"><span class="badge badge-pill badge-primary">defi badge</span></a>';
                        row += "<tr style='" + rowLevelStyle + "' rid='" + res[i]['id'] + "' lid='"+res[i]['level']+"'>";
                        row += '<td style="' + normalRowStyle + '"><img src="' + res[i]['logo_url'] + '" alt="" height="50" data-xblocker="passed" style="visibility: visible;"></td>';
                        row += '<th style="' + normalRowStyle + '" scope="row"><a target="_blank" href="' + res[i]['mining_group_url'] + '" style="' + color + '">' + res[i]['mining_group'] + '</a></th>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['kyc'] ? defiBadge : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['tg_group'] ? tg : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['discode_link'] ? discode : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['twitter_link'] ? twitter : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['coin_token'] ? res[i]['coin_token'] : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['contract'] ? contract : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['audit'] ? audit : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['fees'] ? res[i]['fees'] : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '" id="'+res[i]['ages']+'">' + (res[i]['ages'] ? moment(res[i]['ages'], "").fromNow(true) : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['daily'] ? res[i]['daily'] : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['tvl'] != "$" ? res[i]['tvl'] : "") + '</td>';
                        // row += '<td style="' + normalRowStyle + '">' + (res[i]['tvl_24h'] ? res[i]['tvl_24h'] : "") + '</td>';
                        // row += '<td style="' + normalRowStyle + '"><a href="' + res[i]['mining_group_url'] + '" target="_blank"><button type="button" class="btn btn-light px-3 ' + buyBtnBG + '">Buy</button></a></td>';
                        row += '<td style="' + normalRowStyle + '"><button type="button" class="btn btn-light px-3 ' + buyBtnBG + ' delete_btn"><i class="zmdi zmdi-delete"></i></button><button type="button" class="btn btn-light px-3 ' + buyBtnBG + ' edit_btn" data-toggle="modal" data-target="#myModal"><i class="zmdi zmdi-edit"></i></button></td>';
                        row += "</tr>";
                        $("#dappsTbody").append(row);
                    }
                }
            }, "json"
        )
    }
    function dataFormat() {
        $("#mining_group_url").val("");
        $("#logo_url").val("");
        $("#mining_group_name").val("");
        $("#tg_group").val("");
        $("#discord_link").val("");
        $("#twitter_link").val("");
        $("#audit").val("");
        $("#contract").val("");
        $("#kyc").val("");
        $(".token").val("");
        $("#fees").val("");
        $("#age").val("");
        $("#daily").val("");
        $("#tvl").val("");
        $("#row_id").val("");
        $(".modal-title").text("Add ROI dApp");
    }
});

