$(function () {
    $(document).on("click", ".delete_btn", function () {
        var rowId = $(this).parent().parent().attr("rid");
        $.get(
            "/admin/adsmanage/delete",
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
    getData();
    var normalRowStyle = "vertical-align:middle;padding-right:5px !important;padding-left:5px !important;text-align:center;";
    function getData() {
        $.get(
            "/admin/adsmanage/get",
            {}, function (res) {
                if (res) {
                    $("#adsmanageTbody").html("");
                    if (res.length == 0) {
                        $("#adsmanageTbody").html('<tr><th scope="col" colspan=2 style="text-align:center;vertical-align:middle;">No Data</th></tr>');
                    }
                    for (var i = 0; i < res.length; i++) {
                        var row = "";
                        row += "<tr rid='" + res[i]['id'] + "'>";
                        row += '<th style="' + normalRowStyle + '" scope="row"><a target="_blank" href="' + res[i]['link'] + '"><img src="../uploads/' + res[i]['image'] + '" alt="no image" data-xblocker="passed" style="visibility: visible; width: 50%;"></img></a></th>';
                        row += '<td style="' + normalRowStyle + '">level ' + res[i]['level'] + '</td>';
                        row += '<td style="' + normalRowStyle + '"><button type="button" class="btn btn-light px-3 delete_btn">Delete</button></td>';
                        row += "</tr>";
                        $("#adsmanageTbody").append(row);
                    }
                }
            }, "json"
        )
    }
});