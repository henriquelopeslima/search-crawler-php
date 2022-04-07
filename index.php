<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Henrique\Search\Search;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br']);
$crawler = new Crawler();

$search = new Search($client, $crawler);
$courses = $search->search('/cursos-online-programacao/php');
var_dump($courses);
