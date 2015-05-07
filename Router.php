<?php
class Router
{
private $routes = null;
private static $_instances = null;
//private static $profiles = null;
private function __construct(){
 $this->routes = array();
}
public static function Instances(){
 if (is_null(self::$_instances)){
  self::$_instances = new Router();
 }
 return self::$_instances;
}
public function get($pattern, $callback){
 $this->set('GET', $pattern, $callback);
}
public function post($pattern, $callback){
 $this->set('POST', $pattern, $callback);
}
public function set($method, $pattern, $callback){
 if (!function_exists($callback)){
  new Exception("Method $callback doesn't exist");
 }
 $this->routes[$method][$pattern] = $callback;
}
public function process($method, $uri){
 if (!in_array($method, array('GET', 'POST'))){
  new Exception("Request method should be GET or POST");
 }

$active_routes = $this->routes[$method];

/*foreach ($active_routes as $pattern => $callback)
{
	print($pattern . '</br>');
}*/

foreach ($active_routes as $pattern => $callback){
 if ((preg_match_all("/$pattern/", $uri, $matches)) != false) {
	if ($callback == 'profile_memberName'){
		//print('blah blah </br>');
		$profName = explode('/', $uri);
		$callback($profName);
		break;
	}
	$callback();
	break;
      }
	  elseif ((preg_match_all("/$pattern/", $uri, $matches)) == false){
	  print('Route doesn\'t exist');
	  break;
	  }
      //$matches = array();
    }
 }
}
?>