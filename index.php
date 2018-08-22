<?php 
require __DIR__ . '/vendor/autoload.php';


use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://stu.party',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);

$response = $client->request('GET', '/');
$response = $response->getBody();

?>
<?= $response ?>