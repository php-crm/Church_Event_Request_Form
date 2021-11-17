<?php
if(ISSET($_POST))
{
	$event_name=$_POST['event_name'];
  $event_stime=$_POST['event_stime'];
	$date=$_POST['date'];
	$event_etime=$_POST['event_etime'];
  $name_attendees=$_POST['name_attendees'];
  $ministry=$_POST['ministry'];
   $name=$_POST['name'];
  $email=$_POST['email'];
	$radio1=$_POST['radio1'];
	$stime=$_POST['stime'];
  $phone=$_POST['phone'];
  $radio2=$_POST['radio2'];
  $etime=$_POST['etime'];
   $message=$_POST['message'];
  $radio3=$_POST['radio3'];
  $property1=$_POST['property1'];
  $property2=$_POST['property2'];
  $property3=$_POST['property3'];
  $property4=$_POST['property4'];
  $message1=$_POST['message1'];
  $message2=$_POST['message2'];
  $radio4=$_POST['radio4'];
  $registration_date=$_POST['registration_date'];
  $event_fee=$_POST['event_fee'];
  $payment_method=$_POST['payment_method'];
  $message3=$_POST['message3'];
$agree=$_POST['agree'];
  

  $field1="<b>Event Name:</b> ".$event_name."<br>"."<b>Event Start Time:</b> ".$event_stime."<br>"."<b>Event End Time:</b> ".$event_etime."<br>"."<b>Event Date:</b> ".$date."<br>"."<b>Name of Attendees:</b> ".$name_attendees."<br>"."<b>Ministry:</b> ".$ministry."<br>"."<b>Will there be food at the event?:</b> ".$radio1."<br>"."<b>Do you need child care?:</b> ".$radio2."<br>"."<b>Child Care Start Time:</b> ".$stime."<br>"."<b>Child Care End Time:</b> ".$etime."<br>"."<b>Other Condition/details:</b> ".$message."<br>"."<b>Do you need A/V equipment:</b> ".$radio3."<br>"."<b>Check all that apply:</b> ".$property1.",".$property2.",".$property3.",".$property4."<br>"."<b>Other Equipment Needs:</b> ".$message1."<br>"."<b>Who will be attending this event:</b> ".$message2."<br>"."<b>Do participants need to pre register for the event:</b> ".$radio4."<br>"."<b>If yes, What are the dates of registration:</b> ".$registration_date."<br>"."<b>If yes, what are event fee:</b> ".$event_fee."<br>"."<b>Payment Method:</b> ".$payment_method."<br>"."<b>Event description:</b> ".$message3."<br>"."<b>I agree with:</b> ".$agree;

  

}
else
{
echo "Thanks";	
exit();	
}
$Token_Key='#'; // Located in admin section under setup
$WebURL='#'; // CRM Url like https://www.abc.com/crm-folder
//Lead Fields
$post_data=array('name'=>$name,'phone'=>$phone,'email'=>$email, 'field_1'=>$field1);
$PHPCRM = curl_init();
curl_setopt_array($PHPCRM, array(
  CURLOPT_URL=>$WebURL.'/index.php/crm_api/leads/add_lead/'.$Token_Key,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $post_data,
));

$response = curl_exec($PHPCRM);
curl_close($PHPCRM);
header("Location:thanks.php");
exit();
//echo $response;
?>