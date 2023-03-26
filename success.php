<?php 
session_start(); 
// include dbconnection 
include('./dbConnection.php');
if(!isset($_SESSION['is_login'])){
header('Location:./index.php');
}else{ 
// $stuLogEmail  = $_SESSION['stuLogEmail'];
// echo $stuLogEmail;
//  $course_id=$_SESSION['course_id'];
//  echo $course_id;


$val_id=urlencode($_POST['val_id']);
$store_id=urlencode("didar63a1b0f004df2");
$store_passwd=urlencode("didar63a1b0f004df2@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

	# TO CONVERT AS ARRAY
	# $result = json_decode($result, true);
	# $status = $result['status'];

	# TO CONVERT AS OBJECT
	$result = json_decode($result);

	# TRANSACTION INFO
	$status = $result->status;
	$tran_date = $result->tran_date;
	$tran_id = $result->tran_id;
	$val_id = $result->val_id;
	$amount = $result->amount;
	$store_amount = $result->store_amount;
	$bank_tran_id = $result->bank_tran_id;
	$card_type = $result->card_type;

	# EMI INFO
	$emi_instalment = $result->emi_instalment;
	$emi_amount = $result->emi_amount;
	$emi_description = $result->emi_description;
	$emi_issuer = $result->emi_issuer;

	# ISSUER INFO
	$card_no = $result->card_no;
	$card_issuer = $result->card_issuer;
	$card_brand = $result->card_brand;
	$card_issuer_country = $result->card_issuer_country;
	$card_issuer_country_code = $result->card_issuer_country_code;

	# API AUTHENTICATION
	$APIConnect = $result->APIConnect;
	$validated_on = $result->validated_on;
	$gw_version = $result->gw_version;

    // echo $status." ". $tran_date." ". $tran_id." ". $card_type." ". $amount;
	$stuLogEmail  = $_SESSION['stuLogEmail'];
	$course_id=$_SESSION['course_id'];

   $sql="INSERT INTO `courseorder`(`stu_email`, `course_id`, `status`, `amount`, `order_date`, `card_type`, `tran_id`) VALUES ('$stuLogEmail','$course_id','$status','$amount','$tran_date','$card_type','$tran_id')";

   if($conn->query($sql)==TRUE){
	  echo"Redricting to my profile...";
	 echo" <script>
	 setTimeout(()=>{
		window.location.href='./student/myCourse.php';
	 },1000);
	 </script>";
   }
       

}
else {

	echo "Failed to connect with SSLCOMMERZ";
}

}
 






?>