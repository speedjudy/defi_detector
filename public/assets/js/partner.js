$(function () {
    getData();
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
                        row += '<th style="' + normalRowStyle + '" scope="row"><a target="_blank" href="'+res[i]['url']+'">'+res[i]['name']+'</a></th>';
                        row += '<td style="' + normalRowStyle + '"><a target="_blank" href="' + res[i]['website'] + '"><img src="../assets/images/website.svg" style="width:30px;"></img></a> &nbsp;<a target="_blank" href="'+res[i]['telegram']+'"><img src="../assets/images/telegram.svg" style="width:30px;"></img></a> &nbsp;<a target="_blank" href="'+res[i]['twitter']+'"><img src="../assets/images/twitter.svg" style="width:30px;"></img></a></td>';
                        row += '<td style="' + normalRowStyle + '"><a href="https://t.me/DefiDetectiveapp" target="_blank"><button type="button" class="btn btn-light px-3">Contact</button></a></td>';
                        row += "</tr>";
                        $("#partnerTbody").append(row);
                    }
                }
            }, "json"
        )
    }
});