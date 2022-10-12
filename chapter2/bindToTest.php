<?php

namespace Studies\ClosCallback;

class ClosureClass {
  protected $routes = array();
  protected $responseStatus = '200 OK';
  protected $responseContentType = 'text/html';
  protected $responseBody = '<div>Tree House</div>';

  public function addRoute($routePath, $routeCallback) {
    $this->routes[$routePath] = $routeCallback->bindTo($this, __CLASS__);
  }

  public function dispatch($currentPath) {
    foreach ($this->routes as $routePath => $callback) {
      if ($routePath === $currentPath) {
        $callback();
      }
    }

    header('HTTP/1.1 ' . $this->responseStatus);
    header('Content-type: ' . $this->responseContentType);
    header('Content-length: ' . mb_strlen($this->responseBody));

    echo $this->responseBody;
  }
}

