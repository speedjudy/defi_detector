$(function () {
    getData();
    var normalRowStyle = "vertical-align: middle;padding-right:5px !important;padding-left:5px !important;text-align:center;";
    
    const getTVL = async (contractAddress, tokenKind) => {
        try {
            if (tokenKind == 'BUSD') {
                let res = await axios.get(`https://api.bscscan.com/api?module=account&action=tokenbalance&contractaddress=0xe9e7CEA3DedcA5984780Bafc599bD69ADd087D56&address=${contractAddress}&tag=latest&apikey=YGKJFMK5FW1H9T9GR9VTGIT2UC5PXUTDTB`);
                var formatter = new Intl.NumberFormat('en-US', {
                    style: 'currency',
                    currency: 'USD',
                });
                
                return formatter.format(res.data.result / 1000000000000000000);
            } else if (tokenKind == 'BNB') {
                let res = await axios.get(`https://api.bscscan.com/api?module=stats&action=bnbprice`);
                let res2 = await axios.get(`https://api.bscscan.com/api?module=account&action=balance&address=${contractAddress}&tag=latest&apikey=YGKJFMK5FW1H9T9GR9VTGIT2UC5PXUTDTB`);
                var formatter = new Intl.NumberFormat('en-US', {
                    style: 'currency',
                    currency: 'USD',
                });
                console.log("BNB Price: ", res.data.result.ethusd);
                var bnbPrice = res.data.result.ethusd;
                var bnbAmount = res2.data.result / 1000000000000000000;
                console.log("BNB amount: ", res2.data.result / 1000000000000000000);
                return formatter.format(bnbPrice * bnbAmount);
            }
        } catch (e) {
            console.log(e);
            return 0;
        }
    }

    async function getData() {
        const result = await axios.get("/admin/dapps/get");
        const res = result.data;
        if (res) {
            $("#dappsTbody").html("");
            if (res.length == 0) {
                $("#dappsTbody").html('<tr><th scope="col" colspan=15 style="text-align:center;vertical-align:middle;">No Data</th></tr>');
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

                console.log("yyyyyyyyyyyContract: ", res[i]['contract']);
                var contractAddress = res[i]['contract'];
                contractAddress = contractAddress.slice(contractAddress.length-42);
                var tokenKind = res[i]['coin_token'];
                console.log("xxxxxxxxxxxtokenKind: ", tokenKind);

                var contractTVL = await getTVL(contractAddress, tokenKind);
                var row = "";
                var tg = '<a href="' + res[i]['tg_group'] + '" target="_blank"><span class="badge badge-pill badge-primary">telegram</span></a>';
                var discode = '<a href="' + res[i]['discode_link'] + '" target="_blank"><span class="badge badge-pill badge-primary">discord</span></a>';
                var twitter = '<a href="' + res[i]['twitter_link'] + '" target="_blank"><span class="badge badge-pill badge-primary">twitter</span></a>';
                var audit = '<a href="' + res[i]['audit'] + '" target="_blank"><span class="badge badge-pill badge-primary">audit</span></a>';
                var contract = '<a href="' + res[i]['contract'] + '" target="_blank"><span class="badge badge-pill badge-primary">contract</span></a>';
                var defiBadge = '<a href="' + res[i]['kyc'] + '" target="_blank"><span class="badge badge-pill badge-primary">defi badge</span></a>';
                row += "<tr style='" + rowLevelStyle + "' rid='" + res[i]['id'] + "'>";
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
                row += '<td style="' + normalRowStyle + '">' + (res[i]['ages'] ? moment(res[i]['ages'], "").fromNow(true) : "") + '</td>';
                row += '<td style="' + normalRowStyle + '">' + (res[i]['daily'] ? res[i]['daily'] : "") + '</td>';
                row += '<td style="' + normalRowStyle + '">' + (contractTVL) + '</td>';
                // row += '<td style="' + normalRowStyle + '">' + (res[i]['tvl_24h'] ? res[i]['tvl_24h'] : "") + '</td>';
                // row += '<td style="' + normalRowStyle + '"><a href="'+res[i]['mining_group_url']+'" target="_blank"><button type="button" class="btn btn-light px-3 ' + buyBtnBG + '">Buy</button></a></td>';
                row += "</tr>";
                $("#dappsTbody").append(row);
            }
        }

        // $.get(
        //     "/admin/dapps/get",
        //     {}, function (res) {
        //         if (res) {
        //             $("#dappsTbody").html("");
        //             if (res.length == 0) {
        //                 $("#dappsTbody").html('<tr><th scope="col" colspan=15 style="text-align:center;vertical-align:middle;">No Data</th></tr>');
        //             }
        //             for (var i = 0; i < res.length; i++) {
        //                 var rowLevelStyle = "";
        //                 var color = "color: #ffffff";
        //                 var buyBtnBG = "";
        //                 switch (res[i]['level']) {
        //                     case 1:
        //                         rowLevelStyle = "background: black; color: yellow;";
        //                         color = "color: yellow;";
        //                         buyBtnBG = "bg-warning";
        //                         break;
        //                     case 2:
        //                         if (res[i - 1]) {
        //                             if (res[i - 1]['level'] == 1) {
        //                                 rowLevelStyle = "border-top: solid 2px yellow !important;color: yellow;";
        //                             }
        //                         }
        //                         if (res[i + 1]) {
        //                             if (res[i + 1]['level'] == 3) {
        //                                 rowLevelStyle = "border-bottom: solid 2px yellow !important;color: yellow;";
        //                             }
        //                         } else {
        //                             rowLevelStyle = "border-bottom: solid 2px yellow !important;color: yellow;";
        //                         }
        //                         if (res[i - 1] && res[i + 1]) {
        //                             if (res[i - 1]['level'] == 1 && res[i + 1]['level'] == 3) {
        //                                 rowLevelStyle = "border-top: solid 2px yellow !important;border-bottom: solid 2px yellow !important;color: yellow;";
        //                             }
        //                         }
        //                         if (res[i - 1] && !res[i + 1]) {
        //                             if (res[i - 1]['level'] == 1) {
        //                                 rowLevelStyle = "border-top: solid 2px yellow !important;border-bottom: solid 2px yellow !important;color: yellow;";
        //                             }
        //                         }
        //                         color = "color: yellow;";
        //                         break;
        //                     default:
        //                         break;
        //                 }
        //                 var row = "";
        //                 var tg = '<a href="' + res[i]['tg_group'] + '" target="_blank"><span class="badge badge-pill badge-primary">telegram</span></a>';
        //                 var discode = '<a href="' + res[i]['discode_link'] + '" target="_blank"><span class="badge badge-pill badge-primary">discord</span></a>';
        //                 var twitter = '<a href="' + res[i]['twitter_link'] + '" target="_blank"><span class="badge badge-pill badge-primary">twitter</span></a>';
        //                 var audit = '<a href="' + res[i]['audit'] + '" target="_blank"><span class="badge badge-pill badge-primary">audit</span></a>';
        //                 var contract = '<a href="' + res[i]['contract'] + '" target="_blank"><span class="badge badge-pill badge-primary">contract</span></a>';
        //                 var kyc = '<a href="' + res[i]['kyc'] + '" target="_blank"><span class="badge badge-pill badge-primary">KYC</span></a>';
        //                 row += "<tr style='" + rowLevelStyle + "' rid='" + res[i]['id'] + "'>";
        //                 row += '<th style="' + normalRowStyle + '" scope="row"><a target="_blank" href="' + res[i]['mining_group_url'] + '" style="' + color + '">' + res[i]['mining_group'] + '</a></th>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['tg_group'] ? tg : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['discode_link'] ? discode : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['twitter_link'] ? twitter : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['coin_token'] ? res[i]['coin_token'] : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['contract'] ? contract : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['audit'] ? audit : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['kyc'] ? kyc : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['fees'] ? res[i]['fees'] : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['ages'] ? moment(res[i]['ages'], "").fromNow(true) : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['daily'] ? res[i]['daily'] : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['tvl'] != "$" ? res[i]['tvl'] : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['tvl_24h'] ? res[i]['tvl_24h'] : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '"><a href="'+res[i]['mining_group_url']+'" target="_blank"><button type="button" class="btn btn-light px-3 ' + buyBtnBG + '">Buy</button></a></td>';
        //                 row += "</tr>";
        //                 $("#dappsTbody").append(row);
        //             }
        //         }
        //     }, "json"
        // )
    }
});

