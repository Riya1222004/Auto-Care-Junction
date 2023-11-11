<?php
$con = mysqli_connect("localhost","root","","acj");

$bid=$_REQUEST['name'];
echo $bid."ht";
$sqlc = "select Service_Cost from bill1 where Bill_Id= $bid";
$resultc = mysqli_query($con,$sqlc);
$rowc=mysqli_fetch_array($resultc);
$cost=$rowc['Service_Cost'];

$sqlu = "select U_Id from bill1 where Bill_Id= $bid";
$resultu = mysqli_query($con,$sqlu);
$rowu=mysqli_fetch_array($resultu);
$uid=$rowu['U_Id'];

$sqln = "select * from user where U_Id= $uid";
$resultn = mysqli_query($con,$sqln);
$rown=mysqli_fetch_array($resultn);

$uname=$rown['uname'];
$mob = $rown['number'];
$email = $rown['email'];


session_start();
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_fbc99555221ddf9eda2f2cc01b5",
                  "X-Auth-Token:test_3b7f4689f356d99c2f4677d218f"));
$payload = Array(
    'purpose' => 'Bill',
    'amount' => $cost,
    'phone' => $mob,
    'buyer_name' => $uname,
    'redirect_url' => 'http://localhost/php_practicle/Project/User/Admin/redirect.php',
    'send_email' => true,
    'webhook' => 'http://www.example.com/webhook/',
    'send_sms' => true,
    'email' => $email,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$response=json_decode($response);
echo '<pre>';
print_r($response);

$_SESSION['TID']=$response->payment_request->id;
setcookie('BID',$bid,time()+120);
header('location:'.$response->payment_request->longurl);
die();
?>