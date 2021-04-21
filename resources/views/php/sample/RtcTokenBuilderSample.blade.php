@include('php/src/RtcTokenBuilder')
<?php
$appID = "229e3bdfe52e432b86e27f442b1cf04a";
$appCertificate = "8731cf7600124d0a8166b9b50d0bb018";
$channelName = "abc";
$uid = 2882341271;
$uidStr = "";
$role = RtcTokenBuilder::RoleAttendee;
$expireTimeInSeconds = 33600;
$currentTimestamp = (new DateTime("now", new DateTimeZone('UTC')))->getTimestamp();
$privilegeExpiredTs = $currentTimestamp + $expireTimeInSeconds;

// $token = RtcTokenBuilder::buildTokenWithUid($appID, $appCertificate, $channelName, $uid, $role, $privilegeExpiredTs);
// echo 'Token with int uid: ' . $token . PHP_EOL;

$token = RtcTokenBuilder::buildTokenWithUserAccount($appID, $appCertificate, $channelName, $uidStr, $role, $privilegeExpiredTs);
// echo 'Token with user account: ' . $token . PHP_EOL;
echo $token . PHP_EOL;
 
?>
