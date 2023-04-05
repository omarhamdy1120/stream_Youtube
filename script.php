<?php
  /*
  // Get the JSON data from the URL
  $url = "https://dahabmasr.com/pub/running/plu/CurrPrice.json";

  $response = file_get_contents($url);

  // Check if the response is successful
  if ($response !== false) {
      // Decode the JSON data into a PHP object
      $data = json_decode($response);

      // Check if the data is valid JSON and an array of objects
      if (json_last_error() == JSON_ERROR_NONE && is_array($data)) {
          // Extract the value of LocalPrice24 and LocalSellPrice24 from the first object
          $local_price_24 = $data[0]->LocalPrice24;
          $Local_Sell_Price24 = $data[0]->LocalSellPrice24;

          // Create an array with a key and a value
          $array = array(
              "LocalPrice24" => $local_price_24,
              "LocalSellPrice24" => $Local_Sell_Price24
          );

          // Encode the array into a JSON string
          $json_string = json_encode($array);

          // Try to write the string into another JSON file
          try {
              file_put_contents("Local_Price.json", $json_string);
          } catch (Exception $e) {
              // Handle error in writing data
              echo "Error: " . $e->getMessage();
          }
      } else {
          // Handle error in decoding or validating data
          echo "Error: Invalid or malformed JSON data";
      }
  } else {
      // Handle error in getting data
      echo "Error: Failed to get data from URL";
  }
  */
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Embed YouTube</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
  <div class="container">
    <div class="video-wrapper">
      <span id="player"></span>
    </div>
    <div id="message" style="display: none;">
      <h1>Live stream has ended!</h1>
      <p>Subscribe to our channel to be notified of future live streams</p>
      <div class="g-ytsubscribe" data-channelid="UCDF8swGFhmIOm0PY_iGopaA" data-layout="full" data-count="hidden"></div>
    </div>
    <div class="chat-wrapper">
      <iframe id="chat" src="" frameborder="0"></iframe>
    </div>
    
  </div>
  <script src="https://apis.google.com/js/platform.js"></script>
  <script src="script.js"></script>
  </body>



</html>