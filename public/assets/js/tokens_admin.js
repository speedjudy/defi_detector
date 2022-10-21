$(function () {
    getData();
    $(".save_btn").click(function () {
        var token_name = $("#token_name").val();
        var coin = $("#coin").val();
        var chain = $(".chain").val();
        var website = $("#website").val();
        var presale_buy = $("#presale_buy").val();
        var chart = $("#chart").val();
        var telegram = $("#telegram").val();
        var discord = $("#discord").val();
        var twitter = $("#twitter").val();
        var audit = $("#audit").val();
        var contract = $("#contract").val();
        var defi_badge = $("#kyc").val();
        var launch = $("#launch").val();
        var price = $("#price").val();
        // var change_24h = $("#change_24h").val();
        var level = $("#level").val();
        var showflag = $("#showflag").val();
        if (token_name == "") {
            toastr.warning("Name must be filled out!");
            $("#token_name").focus();
        } else if (level == "") {
            toastr.warning("Level must be filled out!");
        } else if (showflag == "") {
            toastr.warning("Show flag must be filled out!");
        } else if (chain == "") {
            toastr.warning("Chain flag must be filled out!");
        } else if (contract == "") {
            toastr.warning("Contract must be filled out!");
        } else if (price == "") {
            toastr.warning("Decimals must be filled out!");
        } else {
            $.get(
                "/admin/token/add",
                {
                    token_name: token_name,
                    website: website,
                    presale_buy: presale_buy,
                    telegram: telegram,
                    discord: discord,
                    twitter: twitter,
                    launch: launch,
                    coin: coin,
                    chain: chain,
                    audit: audit,
                    contract: contract,
                    kyc: defi_badge,
                    chart: chart,
                    price: price,
                    // change_24h: change_24h,
                    level: level,
                    showflag: showflag,
                    rid: $("#row_id").val()
                }, function (res) {
                    if (res === "Success") {
                        toastr.success("added successly!");
                        dataFormat();
                        // $("#change_24h").val("");
                        getData();
                    }
                }
            )
        }
    });
    $(document).on("click", ".delete_btn", function () {
        var rowId = $(this).parent().parent().attr("rid");
        $.get(
            "/admin/token/delete",
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
        var coin_a = rows[1].lastChild;
        var name_a = rows[2];
        var website_a = rows[3].lastChild;
        var kyc_a = rows[4].lastChild;
        var presale_a = rows[5].lastChild;
        var chart_a = rows[6].lastChild;
        var chain_a = rows[7];
        var telegram_a = rows[8].lastChild;
        var discord_a = rows[9].lastChild;
        var twitter_a = rows[10].lastChild;
        var audit_a = rows[11].lastChild;
        var contract_a = rows[12].lastChild;
        var launch_a = rows[13];
        $("#token_name").val($(name_a).text());
        $("#coin").val($(coin_a).attr("src"));
        $("#telegram").val($(telegram_a).attr("href"));
        $("#discord").val($(discord_a).attr("href"));
        $("#twitter").val($(twitter_a).attr("href"));
        $("#contract").val($(contract_a).attr("href"));
        $("#audit").val($(audit_a).attr("href"));
        $("#kyc").val($(kyc_a).attr("href"));
        $("#website").val($(website_a).attr("href"));
        $("#presale_buy").val($(presale_a).attr("href"));
        $("#chart").val($(chart_a).attr("href"));
        $(".chain").val($(chain_a).text());
        $("#launch").val($(launch_a).attr("id"));
        $("#level").val($(this).parent().parent().attr("lid"));
        $("#row_id").val(rowId);
        $(".modal-title").text("Edit Token");
    });
    var normalRowStyle = "vertical-align: middle;padding-right:5px !important;padding-left:5px !important;text-align:center;";
    function getData() {
        $.get(
            "/admin/token/get",
            {}, function (res) {
                if (res) {
                    $("#tokenTbody").html("");
                    if (res.length == 0) {
                        $("#tokenTbody").html('<tr><th scope="col" colspan=18 style="text-align:center;vertical-align:middle;">No Data</th></tr>');
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
                                        rowLevelStyle = "border-bottom: solid 10px white !important;color: yellow;";
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
                        console.log(rowLevelStyle);
                        var row = "";
                        var audit = '<a href="' + res[i]['audit'] + '" target="_blank"><span class="badge badge-pill badge-primary">audit</span></a>';
                        var contract = '<a href="' + res[i]['contract'] + '" target="_blank"><span class="badge badge-pill badge-primary">contract</span></a>';
                        var kyc = '<a href="' + res[i]['kyc'] + '" target="_blank"><span class="badge badge-pill badge-primary">defi badge</span></a>';
                        var chart = '<a href="' + res[i]['chart'] + '" target="_blank"><span class="badge badge-pill badge-primary">chart</span></a>';
                        var telegram = '<a href="' + res[i]['telegram'] + '" target="_blank"><span class="badge badge-pill badge-primary">telegram</span></a>';
                        var discord = '<a href="' + res[i]['discord'] + '" target="_blank"><span class="badge badge-pill badge-primary">discord</span></a>';
                        var twitter = '<a href="' + res[i]['twitter'] + '" target="_blank"><span class="badge badge-pill badge-primary">twitter</span></a>';
                        var website = '<a href="' + res[i]['website'] + '" target="_blank"><span class="badge badge-pill badge-primary">website</span></a>';
                        var presale_buy = '<a href="' + res[i]['presale_buy'] + '" target="_blank"><span class="badge badge-pill badge-primary">presale/buy</span></a>';
                        row += "<tr style='" + rowLevelStyle + "' rid='" + res[i]['id'] + "' lid='"+res[i]['level']+"'>";
                        row += '<th style="' + normalRowStyle + '" scope="row">' + (i + 1) + '</th>';
                        row += '<td style="' + normalRowStyle + '"><img src="' + res[i]['coin'] + '" alt="" height="50" data-xblocker="passed" style="visibility: visible;"></td>';
                        row += '<td style="' + normalRowStyle + '">' + res[i]['name'] + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['website'] ? website : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['kyc'] ? kyc : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['presale_buy'] ? presale_buy : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['chart'] ? chart : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['chain'] ? res[i]['chain'] : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['telegram'] ? telegram : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['discord'] ? discord : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['twitter'] ? twitter : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['audit'] ? audit : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['contract'] ? contract : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '" id="' + res[i]['launch'] + '">' + (res[i]['launch'] ? moment(res[i]['launch'], "").fromNow(true) : "") + '</td>';
                        // row += '<td style="' + normalRowStyle + '">' + (res[i]['market_cap'] ? res[i]['market_cap'] : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '">' + (res[i]['price'] ? res[i]['price'] : "") + '</td>';
                        // row += '<td style="' + normalRowStyle + '">' + (res[i]['change_24h'] ? res[i]['change_24h'] : "") + '</td>';
                        row += '<td style="' + normalRowStyle + '"><button type="button" class="btn btn-light px-3 ' + buyBtnBG + ' delete_btn"><i class="zmdi zmdi-delete"></i></button><button type="button" class="btn btn-light px-3 ' + buyBtnBG + ' edit_btn" data-toggle="modal" data-target="#myModal"><i class="zmdi zmdi-edit"></i></button></td>';
                        row += "</tr>";
                        $("#tokenTbody").append(row);
                    }
                }
            }, "json"
        )
    }
    function dataFormat() {
        $("#token_name").val("");
        $("#coin").val("");
        $(".chain").val("");
        $("#website").val("");
        $("#presale_buy").val("");
        $("#telegram").val("");
        $("#discord").val("");
        $("#twitter").val("");
        $("#audit").val("");
        $("#contract").val("");
        $("#kyc").val("");
        $("#launch").val("");
        $("#chart").val("");
        $("#price").val("");
        $("#row_id").val("");
        $(".modal-title").text("Add Token");
    }
});
