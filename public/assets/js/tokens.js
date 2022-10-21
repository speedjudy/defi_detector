$(function () {

    const tokenAbi = {
        "abi": [
            {
            "inputs": [],
            "stateMutability": "nonpayable",
            "type": "constructor"
            },
            {
            "anonymous": false,
            "inputs": [
                { "indexed": true, "internalType": "address", "name": "owner", "type": "address" },
                { "indexed": true, "internalType": "address", "name": "spender", "type": "address" },
                { "indexed": false, "internalType": "uint256", "name": "value", "type": "uint256" }
            ],
            "name": "Approval",
            "type": "event"
            },
            {
            "anonymous": false,
            "inputs": [
                { "indexed": true, "internalType": "address", "name": "issuer", "type": "address" },
                { "indexed": false, "internalType": "bool", "name": "value", "type": "bool" }
            ],
            "name": "IssuerRights",
            "type": "event"
            },
            {
            "anonymous": false,
            "inputs": [
                { "indexed": true, "internalType": "address", "name": "from", "type": "address" },
                { "indexed": true, "internalType": "address", "name": "to", "type": "address" },
                { "indexed": false, "internalType": "uint256", "name": "value", "type": "uint256" }
            ],
            "name": "Transfer",
            "type": "event"
            },
            {
            "anonymous": false,
            "inputs": [
                { "indexed": true, "internalType": "address", "name": "previousOwner", "type": "address" },
                { "indexed": true, "internalType": "address", "name": "newOwner", "type": "address" }
            ],
            "name": "TransferOwnership",
            "type": "event"
            },
            {
            "inputs": [
                { "internalType": "address", "name": "", "type": "address" },
                { "internalType": "address", "name": "", "type": "address" }
            ],
            "name": "allowance",
            "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }],
            "stateMutability": "view",
            "type": "function"
            },
            {
            "inputs": [{ "internalType": "address", "name": "", "type": "address" }],
            "name": "balanceOf",
            "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }],
            "stateMutability": "view",
            "type": "function"
            },
            {
            "inputs": [],
            "name": "decimals",
            "outputs": [{ "internalType": "uint8", "name": "", "type": "uint8" }],
            "stateMutability": "view",
            "type": "function"
            },
            {
            "inputs": [],
            "name": "name",
            "outputs": [{ "internalType": "string", "name": "", "type": "string" }],
            "stateMutability": "view",
            "type": "function"
            },
            {
            "inputs": [],
            "name": "symbol",
            "outputs": [{ "internalType": "string", "name": "", "type": "string" }],
            "stateMutability": "view",
            "type": "function"
            },
            {
            "inputs": [],
            "name": "totalSupply",
            "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }],
            "stateMutability": "view",
            "type": "function"
            },
            {
            "inputs": [
                { "internalType": "address", "name": "_to", "type": "address" },
                { "internalType": "uint256", "name": "_amount", "type": "uint256" }
            ],
            "name": "mint",
            "outputs": [{ "internalType": "bool", "name": "success", "type": "bool" }],
            "stateMutability": "nonpayable",
            "type": "function"
            },
            {
            "inputs": [{ "internalType": "uint256", "name": "_amount", "type": "uint256" }],
            "name": "burn",
            "outputs": [{ "internalType": "bool", "name": "success", "type": "bool" }],
            "stateMutability": "nonpayable",
            "type": "function"
            },
            {
            "inputs": [
                { "internalType": "address", "name": "_from", "type": "address" },
                { "internalType": "uint256", "name": "_amount", "type": "uint256" }
            ],
            "name": "burnFrom",
            "outputs": [{ "internalType": "bool", "name": "success", "type": "bool" }],
            "stateMutability": "nonpayable",
            "type": "function"
            },
            {
            "inputs": [
                { "internalType": "address", "name": "_spender", "type": "address" },
                { "internalType": "uint256", "name": "_amount", "type": "uint256" }
            ],
            "name": "approve",
            "outputs": [{ "internalType": "bool", "name": "success", "type": "bool" }],
            "stateMutability": "nonpayable",
            "type": "function"
            },
            {
            "inputs": [
                { "internalType": "address", "name": "_to", "type": "address" },
                { "internalType": "uint256", "name": "_amount", "type": "uint256" }
            ],
            "name": "transfer",
            "outputs": [{ "internalType": "bool", "name": "success", "type": "bool" }],
            "stateMutability": "nonpayable",
            "type": "function"
            },
            {
            "inputs": [
                { "internalType": "address", "name": "_from", "type": "address" },
                { "internalType": "address", "name": "_to", "type": "address" },
                { "internalType": "uint256", "name": "_amount", "type": "uint256" }
            ],
            "name": "transferFrom",
            "outputs": [{ "internalType": "bool", "name": "success", "type": "bool" }],
            "stateMutability": "nonpayable",
            "type": "function"
            },
            {
            "inputs": [],
            "name": "owner",
            "outputs": [{ "internalType": "address", "name": "", "type": "address" }],
            "stateMutability": "view",
            "type": "function"
            },
            {
            "inputs": [],
            "name": "getOwner",
            "outputs": [{ "internalType": "address", "name": "", "type": "address" }],
            "stateMutability": "view",
            "type": "function"
            },
            {
            "inputs": [{ "internalType": "address", "name": "_newOwner", "type": "address" }],
            "name": "transferOwnership",
            "outputs": [],
            "stateMutability": "nonpayable",
            "type": "function"
            },
            {
            "inputs": [
                { "internalType": "address", "name": "_issuer", "type": "address" },
                { "internalType": "bool", "name": "_value", "type": "bool" }
            ],
            "name": "setIssuerRights",
            "outputs": [],
            "stateMutability": "nonpayable",
            "type": "function"
            }
        ]
    };

    getData();
    var normalRowStyle = "vertical-align: middle;padding-right:5px !important;padding-left:5px !important;text-align:center;";
    const providerB = new ethers.providers.JsonRpcProvider("https://data-seed-prebsc-1-s1.binance.org:8545/"); // for reading contracts
    const providerE = new ethers.providers.InfuraProvider(3, "976b8b2358be48468b36d8739e79414e"); // for reading contracts
    function _wait(ms = 500) {
        return new Promise((resolve) => setTimeout(resolve, ms));
    }

    const getTokenPrice = async (tokenAddress) => {
        try {
            let res = await axios.get(`https://api.coingecko.com/api/v3/simple/token_price/binance-smart-chain?contract_addresses=${tokenAddress}&vs_currencies=usd`);
            console.log("yyyyyyyyyyyyy: ", res.data);
            if (res.data[tokenAddress.toLowerCase()] != undefined) {
                if (res.data[tokenAddress.toLowerCase()].usd != undefined)
                    return res.data[tokenAddress.toLowerCase()].usd;
            }
        } catch (e) {
            console.log(e);
            return 0;
        }
    }

    const getTotalSupply = async (tokenAddress, chainName) => {
        try {
            if (chainName == "ETH") {
                // const TokenContract = new ethers.Contract(tokenAddress, tokenAbi.abi, providerE);
                // console.log("TokenContract: ", TokenContract);
                let res = await axios.get(`https://api.etherscan.io/api?module=stats&action=tokensupply&contractaddress=${tokenAddress}`);
                console.log("ETH: ", res.data.result);
                return res.data.result;
            } else if (chainName == "BSC") {
                // const TokenContract = new ethers.Contract(tokenAddress, tokenAbi.abi, providerB);
                // const [decimals, totalSupply] = await Promise.all([TokenContract.decimals(), TokenContract.totalSupply()]);
                // console.log("decimals: ", decimals);
                // console.log("totalSupply: ", totalSupply);
                let res = await axios.get(`https://api.bscscan.com/api?module=stats&action=tokensupply&contractaddress=${tokenAddress}&apikey=YGKJFMK5FW1H9T9GR9VTGIT2UC5PXUTDTB`);
                console.log("BSC: ", res.data.result);
                return res.data.result;
            } else {
                return 0;
            }
        } catch (e) {
            console.log(e);
            return 0;
        }
    }
    
    async function getData() {
        const result = await axios.get("/admin/token/get");
        const res = result.data;
        if( res ){
            $("#tokenTbody").html("");
            if (res.length == 0) {
                $("#tokenTbody").html('<tr><th scope="col" colspan=17 style="text-align:center;vertical-align:middle;">No Data</th></tr>');
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
                
                var token_address = res[i]['contract'];
                token_address = token_address.slice(token_address.length - 42);
                await _wait();
                var token_price = await getTokenPrice(token_address.toLowerCase());
                // var token_price = await getTokenPrice('0x5a119762B09Ed0bcB3b16075159AE43A62651383');
                var chainName = res[i]['chain'];
                var totalSupply = await getTotalSupply(token_address, chainName);
                var decimals = res[i]['price'];
                console.log("decimals: ", decimals);
                console.log("totalSupply: ", totalSupply, " : ", totalSupply / (10 ** decimals));
                totalSupply = totalSupply / (10 ** decimals);
                var mCap = token_price * totalSupply;

                console.log("mCap: ", mCap);

                var formatter = new Intl.NumberFormat('en-US', {
                    style: 'currency',
                    currency: 'USD',
                });
                
                mcap = formatter.format(mCap);

                var row = "";
                var audit = '<a href="' + res[i]['audit'] + '" target="_blank"><span class="badge badge-pill badge-primary">audit</span></a>';
                var contract = '<a href="' + res[i]['contract'] + '" target="_blank"><span class="badge badge-pill badge-primary">contract</span></a>';
                var defiBadge = '<a href="' + res[i]['kyc'] + '" target="_blank"><span class="badge badge-pill badge-primary">defi badge</span></a>';
                var chart = '<a href="' + res[i]['chart'] + '" target="_blank"><span class="badge badge-pill badge-primary">chart</span></a>';
                var telegram = '<a href="' + res[i]['telegram'] + '" target="_blank"><span class="badge badge-pill badge-primary">telegram</span></a>';
                var discord = '<a href="' + res[i]['discord'] + '" target="_blank"><span class="badge badge-pill badge-primary">discord</span></a>';
                var twitter = '<a href="' + res[i]['twitter'] + '" target="_blank"><span class="badge badge-pill badge-primary">twitter</span></a>';
                var website = '<a href="' + res[i]['website'] + '" target="_blank"><span class="badge badge-pill badge-primary">website</span></a>';
                var presale_buy = '<a href="' + res[i]['presale_buy'] + '" target="_blank"><span class="badge badge-pill badge-primary">presale/buy</span></a>';
                row += "<tr style='" + rowLevelStyle + "' rid='" + res[i]['id'] + "'>";
                row += '<th style="' + normalRowStyle + '" scope="row">' + (i + 1) + '</th>';
                row += '<td style="' + normalRowStyle + '"><img src="' + res[i]['coin'] + '" alt="" height="50" data-xblocker="passed" style="visibility: visible;"></td>';
                row += '<td style="' + normalRowStyle + '">' + res[i]['name'] + '</td>';
                row += '<td style="' + normalRowStyle + '">' + (res[i]['website']?website:"") + '</td>';
                row += '<td style="' + normalRowStyle + '">' + (res[i]['kyc'] ? defiBadge : "") + '</td>';
                row += '<td style="' + normalRowStyle + '">' + (res[i]['presale_buy']?presale_buy:"") + '</td>';
                row += '<td style="' + normalRowStyle + '">' + (res[i]['chart']?chart:"") + '</td>';
                row += '<td style="' + normalRowStyle + '">' + (res[i]['chain'] ? res[i]['chain'] : "") + '</td>';
                row += '<td style="' + normalRowStyle + '">' + (res[i]['telegram'] ? telegram : "") + '</td>';
                row += '<td style="' + normalRowStyle + '">' + (res[i]['discord'] ? discord : "") + '</td>';
                row += '<td style="' + normalRowStyle + '">' + (res[i]['twitter'] ? twitter : "") + '</td>';
                row += '<td style="' + normalRowStyle + '">' + (res[i]['audit'] ? audit : "") + '</td>';
                row += '<td style="' + normalRowStyle + '">' + (res[i]['contract'] ? contract : "") + '</td>';
                row += '<td style="' + normalRowStyle + '">' + (res[i]['launch'] ? moment(res[i]['launch'], "").fromNow(true) : "") + '</td>';
                row += '<td style="' + normalRowStyle + '">' + ( mcap=="$NaN"?"":mcap ) + '</td>';
                row += '<td style="' + normalRowStyle + '">' + (token_price?`$${token_price}`:"") + '</td>';
                // row += '<td style="' + normalRowStyle + '">' + (res[i]['change_24h'] ? res[i]['change_24h'] : "") + '</td>';
                row += "</tr>";
                $("#tokenTbody").append(row);
            }
        }

        // $.get(
        //     "/admin/token/get",
        //     {}, async function (res) {
        //         if (res) {
        //             $("#tokenTbody").html("");
        //             if (res.length == 0) {
        //                 $("#tokenTbody").html('<tr><th scope="col" colspan=13 style="text-align:center;vertical-align:middle;">No Data</th></tr>');
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
        //                 var audit = '<a href="' + res[i]['audit'] + '" target="_blank"><span class="badge badge-pill badge-primary">audit</span></a>';
        //                 var contract = '<a href="' + res[i]['contract'] + '" target="_blank"><span class="badge badge-pill badge-primary">contract</span></a>';
        //                 var kyc = '<a href="' + res[i]['kyc'] + '" target="_blank"><span class="badge badge-pill badge-primary">KYC</span></a>';
        //                 var chart = '<a href="' + res[i]['chart'] + '" target="_blank"><span class="badge badge-pill badge-primary">chart</span></a>';
        //                 var telegram = '<a href="' + res[i]['telegram'] + '" target="_blank"><span class="badge badge-pill badge-primary">telegram</span></a>';
        //                 var discord = '<a href="' + res[i]['discord'] + '" target="_blank"><span class="badge badge-pill badge-primary">discord</span></a>';
        //                 var twitter = '<a href="' + res[i]['twitter'] + '" target="_blank"><span class="badge badge-pill badge-primary">twitter</span></a>';
        //                 row += "<tr style='" + rowLevelStyle + "' rid='" + res[i]['id'] + "'>";
        //                 row += '<th style="' + normalRowStyle + '" scope="row">' + (i + 1) + '</th>';
        //                 row += '<td style="' + normalRowStyle + '"><img src="' + res[i]['coin'] + '" alt="" height="50" data-xblocker="passed" style="visibility: visible;"></td>';
        //                 row += '<td style="' + normalRowStyle + '">' + res[i]['name'] + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['website']? "<a href='"+res[i]['website']+"' target='_blank'>"+res[i]['website']+"</a>":"") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['presale_buy']?"<a href='"+res[i]['presale_buy']+"' target='_blank'>"+res[i]['presale_buy']+"</a>":"") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['chart']?chart:"") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['chain'] ? res[i]['chain'] : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['telegram'] ? telegram : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['discord'] ? discord : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['twitter'] ? twitter : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['audit'] ? audit : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['contract'] ? contract : "") + '</td>';
        //                 var token_address = res[i]['contract'] ? contract : "";
        //                 var token_price = await getTokenPrice('0x5a119762B09Ed0bcB3b16075159AE43A62651383');

        //                 console.log("xxxxxxxxxxx: ", token_price);
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['kyc'] ? kyc : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['launch'] ? moment(res[i]['launch'], "").fromNow(true) : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['market_cap'] ? res[i]['market_cap'] : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['price'] ? res[i]['price'] : "") + '</td>';
        //                 row += '<td style="' + normalRowStyle + '">' + (res[i]['change_24h'] ? res[i]['change_24h'] : "") + '</td>';
        //                 row += "</tr>";
        //                 $("#tokenTbody").append(row);
        //             }
        //         }
        //     }, "json"
        // )
    }
});

