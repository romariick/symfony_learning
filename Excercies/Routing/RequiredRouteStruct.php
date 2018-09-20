<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader;

//$route = new Route('/foo', ['_controller' => 'MyController']);
/*$route = new Route(
    '/archive/{month}', // path
    array('controller' => 'showArchive'), // default values
    array('month' => '[0-9]{4}-[0-9]{2}', 'subdomain' => 'www|m'), // requirements
    array(), // options
    '', // host
    array(), // schemes
    array() // methods
);*/
//$route = new Route(
//    '/blog/{id}/{slug}.{_format}',
//    ['controller' => 'blogPost', 'format' => 'html'],
//    ['id' => '\d+', 'format' => 'html|json']
//);

$route = new Route(
    '/blog/{id}',
    [],
    []
);
$routes = new RouteCollection();
$routes->add('route_name', $route);
//$routes->add('archive_name', $routeArchive);
$context = new RequestContext('/');
$matcher = new UrlMatcher($routes, $context);

//$parameters = $matcher->match('/foo'); // Exception,ResourceNotFoundException
//var_dump($routes); die;
$parameters2 = $matcher->match('/blog/11');
var_dump($parameters2); die;
// Genearate Url
$routes->add('generate_route', new Route('/show/{slug}'));
$generator = new Symfony\Component\Routing\Generator\UrlGenerator($routes, $context);
$url = $generator->generate('generate_route', ['slug' => 'my-blog-post']);
var_dump($url);

// Load route from a file YMAL ou XML ou PHP
$locator = new FileLocator([__DIR__]);
$loader = new YamlFileLoader($locator);
$collection = $loader->load('routes.yml');

var_dump($collection); die;
