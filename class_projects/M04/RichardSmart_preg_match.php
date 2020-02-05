
<?php
//removes everything before sdev
$site = "http://www.sdev253.net/home.html";
preg_match('@^(?:http://)?([^/]+)@i',"$site", $matches);
$sitetwo = $matches[1];
//removes everything after .net
preg_match('/[^.]+\.[^.]+$/', $sitetwo, $matches);
//displat site address as original
echo "site address is: $site <br />";
//display extracted domain name
echo "domain name is: {$matches[0]}\n";
?>
