<?php
// include the ip address tracker file
include_once('libs/ip.inc.php');

// connect to the api
function ip_details($ipAddress){
    $details = file_get_contents("http://ipinfo.io/{$ipAddress}");
    return $details;
}

// get the ip address
$ipAddress = ip();

// get the details of ip address
$details = ip_details($ipAddress);

// echo $details;
$details = json_decode($details, true);

// print_r($details);
$country = strtolower($details['country']) . ".png";
?>

<img src="flags/128x128/<?php echo $country; ?>" width="30" alt="country not found!">