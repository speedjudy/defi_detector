$(function () {
    getData();
    $(".save_btn").click(function () {
        var partner_name = $("#partner_name").val();
        var partner_url = $("#partner_url").val();
        var partner_telegram = $("#partner_telegram").val();
        var partner_twitter = $("#partner_twitter").val();
        var logo_url = $("#logo_url").val();
        var partner_website = $("#partner_website").val();
        if (partner_name == "") {
            toastr.warning("partner name must be filled out!");
            $("#partner_name").focus();
        } else {
            $.get(
                "/admin/partner/add",
                {
                    partner_name: partner_name,
                    partner_url: partner_url,
                    partner_telegram: partner_telegram,
                    logo_url: logo_url,
                    partner_website: partner_website,
                    partner_twitter: partner_twitter
                }, function (res) {
                    if (res === "Success") {
                        toastr.success("added successly!");
                        $("#partner_name").val("");
                        $("#partner_url").val("");
                        $("#partner_telegram").val("");
                        $("#partner_website").val("");
                        $("#logo_url").val("");
                        $("#partner_twitter").val("");
                        getData();
                    }
                }
            )
        }
    });
    $(document).on("click", ".delete_btn", function () {
        var rowId = $(this).parent().parent().attr("rid");
        $.get(
            "/admin/partner/delete",
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

    var normalRowStyle = "vertical-align:middle;padding-right:5px !important;padding-left:5px !important;text-align:center;";
    function getData() {
        $.get(
            "/admin/partner/get",
            {}, function (res) {
                if (res) {
                    $("#partnerTbody").html("");
                    if (res.length == 0) {
                        $("#partnerTbody").html('<tr><th scope="col" colspan=3 style="text-align:center;vertical-align:middle;">No Data</th></tr>');
                    }
                    for (var i = 0; i < res.length; i++) {
                        var row = "";
                        row += "<tr rid='" + res[i]['id'] + "'>";
                        row += '<td style="' + normalRowStyle + '"><img src="' + res[i]['logo_url'] + '" alt="" height="50" data-xblocker="passed" style="visibility: visible;"></td>';
                        row += '<th style="' + normalRowStyle + '" scope="row"><a target="_blank" href="' + res[i]['url'] + '">' + res[i]['name'] + '</a></th>';
                        row += '<td style="' + normalRowStyle + '"><a target="_blank" href="' + res[i]['website'] + '"><img src="../assets/images/website.svg" style="width:30px;"></img></a> &nbsp;<a target="_blank" href="' + res[i]['telegram'] + '"><img src="../assets/images/telegram.svg" style="width:30px;"></img></a> &nbsp;<a target="_blank" href="' + res[i]['twitter'] + '"><img src="../assets/images/twitter.svg" style="width:30px;"></img></a></td>';
                        row += '<td style="' + normalRowStyle + '"><a href="https://t.me/DefiDetectiveapp" target="_blank"><button type="button" class="btn btn-light px-3">Contact</button></a></td>';
                        row += '<td style="' + normalRowStyle + '"><button type="button" class="btn btn-light px-3 delete_btn">Delete</button></td>';
                        row += "</tr>";
                        $("#partnerTbody").append(row);
                    }
                }
            }, "json"
        )
    }
});