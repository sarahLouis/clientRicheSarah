<?php
namespace controllers;

use Ubiquity\controllers\rest\api\jsonapi\JsonApiResponseFormatter;
use Ubiquity\controllers\rest\ResponseFormatter;
use Ubiquity\controllers\rest\RestServer;
/**
*Rest API Controller MyRestController
*@route("/rest", "inherited"=>true, "automated"=>true)
*@rest
*/

#[Rest()]
#[Route(path: "/rest/")]


class MyRestController extends \Ubiquity\controllers\rest\api\jsonapi\JsonApiRestController {
	protected function getResponseFormatter(): ResponseFormatter{
		return new JsonApiResponseFormatter('/rest');
	}
	
	protected function getRestServer(): RestServer {
        $srv=parent::getRestServer();
        $srv->setAllowedOrigin('http://127.0.0.1:4200');
        return $srv;
    }
	
}