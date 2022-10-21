$(function () {
    getData();
    $(".save_btn").click(function () {
        var influencer_name = $("#influencer_name").val();
        var influencer_url = $("#influencer_url").val();
        var influencer_telegram = $("#influencer_telegram").val();
        var influencer_twitter = $("#influencer_twitter").val();
        var influencer_youtube = $("#influencer_youtube").val();
        
        var logo_url = $("#logo_url").val();
        if (influencer_name == "") {
            toastr.warning("influencer name must be filled out!");
            $("#influencer_name").focus();
        } else {
            $.get(
                "/admin/influencer/add",
                {
                    influencer_name: influencer_name,
                    influencer_url: influencer_url,
                    influencer_telegram: influencer_telegram,
                    influencer_twitter: influencer_twitter,
                    influencer_youtube: influencer_youtube,
                    logo_url: logo_url
                }, function (res) {
                    if (res === "Success") {
                        toastr.success("added successly!");
                        $("#influencer_name").val("");
                        $("#influencer_url").val("");
                        $("#influencer_telegram").val("");
                        $("#influencer_twitter").val("");
                        $("#influencer_youtube").val("");
                        $("#logo_url").val("");
                        getData();
                    }
                }
            )
        }
    });
    $(document).on("click", ".delete_btn", function () {
        var rowId = $(this).parent().parent().attr("rid");
        $.get(
            "/admin/influencer/delete",
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
            "/admin/influencer/get",
            {}, function (res) {
                if (res) {
                    $("#influencerTbody").html("");
                    if (res.length == 0) {
                        $("#influencerTbody").html('<tr><th scope="col" colspan=4 style="text-align:center;vertical-align:middle;">No Data</th></tr>');
                    }
                    for (var i = 0; i < res.length; i++) {
                        var row = "";
                        row += "<tr rid='" + res[i]['id'] + "'>";
                        row += '<td style="' + normalRowStyle + '"><img src="' + res[i]['logo_url'] + '" alt="" height="50" data-xblocker="passed" style="visibility: visible;"></td>';
                        row += '<th style="' + normalRowStyle + '" scope="row"><a target="_blank" href="' + res[i]['url'] + '">' + res[i]['name'] + '</a></th>';
                        row += '<td style="' + normalRowStyle + '"><a target="_blank" href="' + res[i]['youtube'] + '"><img src="../assets/images/youtube.svg" style="width:30px;"></img></a> &nbsp;<a target="_blank" href="' + res[i]['telegram'] + '"><img src="../assets/images/telegram.svg" style="width:30px;"></img></a> &nbsp;<a target="_blank" href="' + res[i]['twitter'] + '"><img src="../assets/images/twitter.svg" style="width:30px;"></img></a></td>';
                        row += '<td style="' + normalRowStyle + '"><a href="https://t.me/DefiDetectiveapp" target="_blank"><button type="button" class="btn btn-light px-3">Contact</button></a></td>';
                        row += '<td style="' + normalRowStyle + '"><button type="button" class="btn btn-light px-3 delete_btn">Delete</button></td>';
                        row += "</tr>";
                        $("#influencerTbody").append(row);
                    }
                }
            }, "json"
        )
    }
});