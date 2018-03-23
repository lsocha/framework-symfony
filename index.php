<?php
// framework/index.php
// http://lx.pandora.caps.pl/_rozne/framework/index.php?name=Lukasz

// require_once __DIR__.'/vendor/autoload.php';

// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Response;

// $request = Request::createFromGlobals();
// // simulate request 
// $request = Request::create('/index.php?name=lukeskywalker');

// $name = $request->get('name', 'World');

// $response = new Response(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));

// $response->send();

// Request::setTrustedProxies(array('10.0.0.1'));

// if ($myIp === $request->getClientIp()) {
//     // the client is a known one, so give it some more privilege
//     echo "trusted ip";
// }

require_once __DIR__.'/init.php';

$name = $request->get('name', 'Luke Skywalker');

$response->setContent(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));
$response->send();