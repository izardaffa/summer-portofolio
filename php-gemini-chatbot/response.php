<?php

require 'vendor/autoload.php';

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$data = json_decode(file_get_contents('php://input'));

$text = $data->text;

$client = new Client($_ENV['GEMINI_API_KEY']);

$response = $client->geminiProFlash1_5()->generateContent(
  new TextPart($text),
);

echo $response->text();
