<?php
  // Configuration
  // Your oAuth 2.0 token, Agency ID (For Agency Clients only), Artist ID and Date range
  $token      = '';
  $agencyId   = '';
  $projectId  = '';
  $from       = date("Y-m-d");
  $to         = date('Y-m-d', strtotime(date("d-m-Y", time()) . " + 365 day"));

  // Call for Artist clients
  // $url = "https://data.a-boss.net/v1/artist/" . $projectId . "/public_events?from=" . $from . "&to=" . $to;
  // Call for Agency clients
  $url = "https://data.a-boss.net/v1/agency/" . $agencyId . "/" . $projectId . "/public_events?from=" . $from . "&to=" . $to;

  // create a new cURL resource
  $ch = curl_init();

  // set Header, URL and other appropriate options
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , "Authorization: Bearer " . $token));
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  // grab URL and pass it to the browser
  $curlOut = curl_exec($ch);

  // Decode JSON Response
  $response = json_decode($curlOut, true);

  // Loop through each response item
  foreach($response as $event) {
    print_r($event);
  }

  // close cURL resource, and free up system resources
  curl_close($ch);
?>
