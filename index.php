<?php
namespace CCPayment;

use CCPayment;
use WpOrg\Requests\Autoload;

require './vendor/autoload.php';

Autoload::register();

header('Content-type: application/json');

//$postStr = $GLOBALS["HTTP_RAW_POST_DATA"] ?? "";
//
//print_r($postStr);
//$data = json_decode(file_get_contents('php://input'), true);
//
//var_dump($data);
//echo 111;



// php -S localhost:8080
// 创建订单
// $resp =  CCPay::CreateOrder( [
//      "remark"=>"",
//      "token_id"=>"f36ad1cf-222a-4933-9ad0-86df8069f916",
//      "amount"=>"0.5",
//      "merchant_order_id"=>strval(time()).strval(rand(0,1000)),
//      "fiat_currency"=> "USD"
//     ],"202302010636261620672405236006912","62fbff1f796c42c50bb44d4d3d065390");
//   var_dump($resp);

// url
$resp =  CCPay::CheckUrl( [
    "return_url"=>"https://cwallet.com/pay/callback",
    "valid_timestamp"=>4566,
    "amount"=>"0.5",
    "merchant_order_id"=>strval(time()).strval(rand(0,1000)),
    "product_name"=> "knowledge is power"
],"202302170720061626481598627262464","7cf112b55f9c76bc704e800a46b2b68e"); // "202301310325561620262074393440256","c4600b8125b7ed23b5b7b8ee4acb42f4"
var_dump($resp);

//return
// 获取token 列表
//$resp =  CCPay::GetSupportToken("202302010636261620672405236006912","62fbff1f796c42c50bb44d4d3d065390");
//var_dump($resp);

// 获取链列表
//$resp =  CCPay::GetTokenChain(["token_id"=>"58f93c4d-ce0b-4c7c-af77-b4b299718715"],"202301310325561620262074393440256","c4600b8125b7ed23b5b7b8ee4acb42f4");
//var_dump($resp);
//
//$resp =  CCPay::GetTokenRate(["token_id"=>"e8f64d3d-df5b-411d-897f-c6d8d30206b7","amount"=>"12"],"202302010636261620672405236006912","62fbff1f796c42c50bb44d4d3d065390");
////var_dump($resp);
//
//$resp =  CCPay::Withdraw( [
////    "token_id"=>"0912e09a-d8e2-41d7-a0bc-a25530892988",//Trc20
////    "address"=>"TKWFdnbhgjno7ACQvZx1r4BZc7hkyeyLk8",
////    "token_id"=>"f137d42c-f3a6-4f23-9402-76f0395d0cfe",//POLYGON
////    "address"=>"0x4aa884f207c2e4003c450eb14a5e93d16a60e730",
//    // 85db36af-3282-4501-9357-67da32691ab7
//    "token_id"=>"85db36af-3282-4501-9357-67da32691ab7",//matic POLYGON
//    "address"=>"0x4aa884f207c2e4003c450eb14a5e93d16a60e730",
////    "token_id"=>"8e5741cf-6e51-4892-9d04-3d40e1dd0128",//POLYGON  f137d42c-f3a6-4f23-9402-76f0395d0cfe
////    "address"=>"9454818",
//    "value"=>"0.045",
//    "memo"=>"",
//    "merchant_order_id"=>strval(time()).strval(rand(0,1000)),
//],"202301310325561620262074393440256","c4600b8125b7ed23b5b7b8ee4acb42f4");
//var_dump($resp);

// 检测url
$resp =  CCPay::CheckUser("9454818","202302010636261620672405236006912","62fbff1f796c42c50bb44d4d3d065390");
var_dump($resp);

// 拉取资产
//$resp =  CCPay::Assets("202302010636261620672405236006912","62fbff1f796c42c50bb44d4d3d065390","");
//var_dump($resp);

// 获取网络费用
//$resp =  CCPay::NetworkFee(["token_id"=>"0912e09a-d8e2-41d7-a0bc-a25530892988"],"202302010636261620672405236006912","62fbff1f796c42c50bb44d4d3d065390");
//var_dump($resp);
