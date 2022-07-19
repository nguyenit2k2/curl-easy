<?php
require './vendor/autoload.php';
// We will check current Bitcoin price via API.
$request = new \cURL\Request('https://jsonplaceholder.typicode.com/posts');
$request->getOptions()
    ->set(CURLOPT_TIMEOUT, 5)
    ->set(CURLOPT_RETURNTRANSFER, true);
$response = $request->send();
$feed = json_decode($response->getContent(), true);
echo "Current Bitcoin price: " . $feed['title'] . " " . $feed['body'] . "\n";