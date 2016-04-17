<?php
require_once 'google-api-php-client/vendor/autoload.php';

$client = new Google_Client();
$client->setApplicationName("WICC-Cal");
$client->setDeveloperKey();

$service = new Google_Service_Books($client);
$optParams = array('filter' => 'free-ebooks');
$results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

foreach ($results as $item) {
  echo $item['volumeInfo']['title'], "<br /> \n";
}

?>