<?php

namespace core;


use Exception;

class Router
{
    protected array $routes = [], $params = [];
    protected array $convertTypes = [
        'd' => 'int',
        'D' => 'string'
    ];

    public function add(string $route, array $params)
    {
        $route = preg_replace('/\//', '\\/', $route);
        $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);
        $route = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route);//id

        $route = '/^' . $route . '$/i';

        $this->routes[$route] = $params;

    }

    public function dispatch($url)
    {
        $url = trim($url, "/");
        $url = $this->remove_query_string_variables($url);
        if ($this->match($url)) {

            if (isset($this->params["method"]) && $_SERVER["REQUEST_METHOD"] !== $this->params["method"]) throw new Exception("method not supported this route");
            unset($this->params["method"]);

            if (class_exists($this->params["controller"])) {
                $controller = $this->params["controller"];
                unset($this->params["controller"]);

                if (method_exists($controller, $this->params["action"])) {
                    $controller = new $controller;
                    $action = $this->params["action"];
                    unset($this->params["action"]);
                    call_user_func_array([$controller, $action], $this->params);
                } else throw new Exception("action {$this->params["action"]} not found",);

            } else throw new Exception("Controller class {$this->params["controller"]} not found",);

        } else throw new Exception("No route match", 404);
    }

    protected function remove_query_string_variables(string $url): string
    {
        if ($url != "") {
            $parts = explode("?", $url, 2);
            $url = $parts[0];
        }
        return $url;
    }

    protected function match(string $url): bool
    {
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                preg_match_all('|\(\?P<[\w]+>\\\\(\w[\+])\)|', $route, $types);
                $step = 0;
                if (!empty($types)) {
                    foreach ($matches as $key => $match) {
                        if (is_string($key)) {
                            $lastKey = count($types) - 1;
                            $types[$lastKey] = str_replace('+', '', $types[$lastKey]);
                            settype($match, $this->convertTypes[$types[$lastKey][$step]]);
                            $params[$key] = $match;
                            $step++;
                        }
                    }
                }

                $this->params = $params;
                return true;
            }
        }

        return false;
    }
}


