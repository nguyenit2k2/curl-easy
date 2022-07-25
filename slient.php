<?php
require __DIR__ . '/vendor/autoload.php';

$queue = new \cURL\RequestsQueue;

$queue->getDefaultOptions()
    ->set(CURLOPT_TIMEOUT, 10)
    ->set(CURLOPT_RETURNTRANSFER, true);

$queue->addListener('complete', function (\cURL\Event $event) {
    $response = $event->response;
    echo PHP_EOL . $response->getContent();
});


$urls = [
    'http://localhost/still-curleasy/server.php?idx=0',
    'http://localhost/still-curleasy/server.php?idx=1',
    'http://localhost/still-curleasy/server.php?idx=2',
    'http://localhost/still-curleasy/server.php?idx=3',
    'http://localhost/still-curleasy/server.php?idx=4',
];

foreach ($urls as $url) {
    $queue->attach(new \cURL\Request($url));
}

while ($queue->socketPerform()) {
    usleep(5000);
    echo '.';
}
