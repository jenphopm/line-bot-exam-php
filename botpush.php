<?php



require "vendor/autoload.php";

$access_token = '/TnPR5O9jmL64Ij/yc6S5TAx646T1BUdPBlkyZwzj6lPBKKmsE0mgYz2z3o42tqKzqQ/XpYDPKUoPvfpUGovWZ7KYdgrNEHk2zbs+Pvq0BHOE1TNCjgtFVyEUNdqMU+JmXbsBFWSc2fzfaAW3iDKSQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'e6ed024f06a756e7a93ce98a4d47b98c';

$pushID = 'Ua517a6fa0522be09c7a74b970b1ed7f8';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Hello World');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







