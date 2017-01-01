<?php
include_once('libs/ip.inc.php');

function ip_details($ipAddress){
    $details = file_get_contents("http://ipinfo.io/{$ipAddress}");
    return $details;
}

$ipAddress = "149.56.64.166"; // ip();
$details = ip_details($ipAddress);

echo $details;
$details = json_decode($details, true);
$country = strtolower($details['country']) . ".png";
?>

<img src="flags/128x128/<?php echo $country; ?>" width="30" alt="country not found!">