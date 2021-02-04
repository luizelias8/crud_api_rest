<?php

require_once __DIR__ . '/vendor/autoload.php';

$url = explode("/", filter_input(INPUT_GET, "url", FILTER_DEFAULT));

$controller = "Webslesson\\Controller\\" . ucfirst($url[0]) . "Controller";

$method = strtolower($_SERVER["REQUEST_METHOD"]);

$param = isset($url[1]) ? $url[1] : null;

$data = call_user_func([new $controller, $method], $param);

header("Content-Type: application/json; charset=utf-8");

echo json_encode(["status" => "success", "data" => $data]);