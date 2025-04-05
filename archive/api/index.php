<?php
// set the content type to JSON
header('Content-Type: application/json');

// check if the request method is GET
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
  // Create response array
  $response = array (
    'messeage' => 'Hello there, this msg from server!'
  );

  // Encode the response array to JSON and print it
  echo json_encode($response);
} else {
  // if the request method is not GET, return an error response
  http_response_code(405); // method not allowed
  echo json_encode(array('error' => 'Method Not Allowed'));
}
?>