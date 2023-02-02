<?php

  // Check if show is present in the GET request
  if(isset($_GET['show'])) {
    // Get the 'show' date from the GET request
    $showDate = $_GET['show'];

    // Sanitize the show date to remove any special characters
    $showDate = filter_var($showDate, FILTER_SANITIZE_SPECIAL_CHARS);

    // Define the API endpoint URL
    $url = "https://api.phish.net/v5/setlists/showdate/" . $showDate . ".json?apikey=1D0A891F8076BD89B4BD&order_by=showdate";

  // Set the API key
  $apiKey = "1D0A891F8076BD89B4BD";

  // Start a cURL session
  $ch = curl_init();

  // Set cURL options to make a GET request to the API endpoint
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "X-API-Key: $apiKey"
  ]);

  // Execute the cURL request
  $response = curl_exec($ch);

  // Check if there was an error with the cURL request
  if (curl_errno($ch)) {
    // Print the error message
    echo "cURL error: " . curl_error($ch);
    exit;
  }

  // Close the cURL session
  curl_close($ch);

  // Decode the JSON response into a PHP array
  $data = json_decode($response, true);

  //var_dump($data);

  // Check if the response has any data
  if (count($data["data"]) > 0) {
    // Check if the decoded JSON response is not empty
    if (!empty($data)) {
      // Initialize variables for use in SQL insert statement
        $country = [$data["data"][0]['country']];
        $state = [$data["data"][0]['state']];
        $city = [$data["data"][0]['city']];
        $venue = [$data["data"][0]['venue']];
    }
  }
  }


?>