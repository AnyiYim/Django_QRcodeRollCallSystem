<?php
include_once 'sdk/lib/BmobObject.class.php';
include_once 'sdk/lib/BmobUser.class.php';
include_once 'sdk/lib/BmobBatch.class.php';
include_once 'sdk/lib/BmobFile.class.php';
include_once 'sdk/lib/BmobImage.class.php';
include_once 'sdk/lib/BmobRole.class.php';
include_once 'sdk/lib/BmobPush.class.php';
include_once 'sdk/lib/BmobPay.class.php';
include_once 'sdk/lib/BmobSms.class.php';
include_once 'sdk/lib/BmobApp.class.php';
include_once 'sdk/lib/BmobSchemas.class.php';
include_once 'sdk/lib/BmobTimestamp.class.php';
include_once 'sdk/lib/BmobCloudCode.class.php';
include_once 'sdk/lib/BmobBql.class.php';



$className = $_GET["name"];
$lng = $_GET["lng"];
$lat = $_GET["lat"];

try {
	$bmobObj = new BmobObject("gpsitem");
	$res=$bmobObj->create(array("classname"=>$className,"lng"=>floatval ($lng),"lat"=>floatval ($lat))); //添加对象"geo": "{""longitude"":24.52065,""latitude"":50.934755}"
	var_dump($res);
} catch (Exception $e) {
	echo $e;
}

 ?>