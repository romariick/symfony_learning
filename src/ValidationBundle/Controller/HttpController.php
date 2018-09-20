<?php

namespace ValidationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HttpController
{
    public function indexAction()
    {
        $request = new Request();

        $session = new \Symfony\Component\HttpFoundation\Session\Session();
        $request->setSession($session);

        $session->getBag($name);
        $session->getFlashBag();
        $session->save();
        $session->clear();
        $session->remove($name);
        $session->all();
        $session->getId();
        $session->getMetadataBag();
        $session->migrate();
        $session->getId();
        $session->invalidate();
        $session->start();

        $request->create($uri);
        $request->create($uri, $method);
        $request->createFromGlobals();
        $request->getBaseUrl();
        $request->getAcceptableContentTypes();
        $request->getHttpHost();
        $request->getClientIps(); // $request->server->get('REMOTE_ADDR')
        $request->server->getHeaders();
        $request->isMethodSafe();
        $request->getUser();
        $request->getPreferredLanguage();
        $request->getLocale();
        $request->getLanguages();
        $request->getSession();
        $request->getPathInfo();

        $request->server;
        $request->query;
        $request->cookies;
        $request->get($key);
        $request->files;
        $request->headers->get($key);

        $response = new Response();
        $response->setStatusCode($code);
        $response->setContent($response);
        $response->getContent();
        $response->getStatusCode();
        $response->getAge();
        $response->setExpires();
        $response->setEtag();
        $response->setMaxAge($value);
        $response->setLastModified();
        $response->setSharedMaxAge($value);
        $response->prepare($request);
        $response->expire();
        $response->getProtocolVersion();
        $response->isCacheable();
        $response->mustRevalidate();

        /*
         * 1xx : Informational
         * 100 : Continue
         * 101 : Switch protocol
         * 2xx : Success
         * 200 : Ok
         * 201/ Created
         * 202 : Accepted
         * 203 : Non Authoritatio
         * 204 : Non content
         * 205 : Reset content
         * 206 : Partial content
         *
         * 3xx : Redirection
         * 300 : Multiple choice
         * 301 : Move permanently
         * 302 : Found
         * 303 : See other
         * 304 : Not modified
         *
         * 4xx : Client Error
         * 400 : Band request
         * 401 : Unauthoriized
         * 402 : Paiment required
         * 403 : Forbidden
         * 404 : Not found
         * 405 : Method not allowed
         * 406 : Not acceptable
         * 409 : Conflict
         * 4010 : Gone
         *
         * 5xx : Server Error
         *
         * 500 : Server error
         * 501 : Not implemented
         * 502 : Bad gateway
         * 503 : Service unvalaible
         * 504 : Gatewary timeout
         * 505 : Protocot not supported
         *
         *
         * Response header :
         *  - Location
         *  - Retry-After
         *  - Vary
         *  - WWW-Authenticate
         *  - Proxy-Authenticate
         *  - Server
         *  - Age
         *  - Accpte-Range
         *  - Etag
         */
    }
}
