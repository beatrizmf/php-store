<?php

class App
{

  private static $app;
  private $routes;

  private function __construct($routes)
  {
    $this->routes = $routes;
    $this->processRoute($this->getSegments());
  }

  public function getRoutes()
  {
    return $this->routes;
  }

  private function getSegments()
  {
    $url = "http" . (isset($_SERVER["HTTPS"]) ? (($_SERVER["HTTPS"] == "on") ? "s" : "") : "") . "://" . "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $segment = explode("/", explode(BASE_URL . "/", $url)[1])[0];

    return $segment;
  }

  private function processRoute($url)
  {
    $controllerExists = false;

    foreach ($this->routes as $route) {
      if ("/" . $url == $route["route"]) {
        $pathClass = PATH_APP . "/controllers/" . $route["controller"] . ".php";
        $nameClass = $route["controller"];


        if (file_exists($pathClass)) {
          require_once $pathClass;
          $controller = new $nameClass();

          if (method_exists($controller, $route["method"])) {
            $method = $route["method"];
            $controller->$method();
            $controllerExists = true;
            break;
          }
        }
      }
    }

    if (!$controllerExists) {
      require_once PATH_APP . '/controllers/PageController.php';
      (new PageController())->notFound();
    }
  }

  public static function getInstance($routes)
  {
    if (!isset(self::$app)) {
      self::$app = new App($routes);
    }
    return self::$app;
  }
}
