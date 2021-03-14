<?php
return array(
	"siteUrl"=>"http://127.0.0.1/store-api/",
	"database"=>array(
			"type"=>"mysql",
			"dbName"=>"store",
			"serverName"=>"127.0.0.1",
			"port"=>8889,
			"user"=>"root",
			"password"=>"root",
			"options"=>array(),
			"cache"=>false
			),
	"sessionName"=>"store-api",
	"namespaces"=>array(),
	"templateEngine"=>"Ubiquity\\views\\engine\\Twig",
	"templateEngineOptions"=>array(
			"cache"=>false
			),
	"test"=>false,
	"debug"=>false,
	"logger"=>function (){return new \Ubiquity\log\libraries\UMonolog("store-api",\Monolog\Logger::INFO);},
	"di"=>array(
			"@exec"=>array(
					"jquery"=>function ($controller){
						return \Ubiquity\core\Framework::diSemantic($controller);
					}
					)
			),
	"cache"=>array(
			"directory"=>"cache/",
			"system"=>"Ubiquity\\cache\\system\\ArrayCache",
			"params"=>array()
			),
	"mvcNS"=>array(
			"models"=>"models",
			"controllers"=>"controllers",
			"rest"=>""
			),
	"isRest"=>function (){
			return \Ubiquity\utils\http\URequest::getUrlParts()[0]==="rest";
		}
	);