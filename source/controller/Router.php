<?php

namespace Kanban\Controller;

class Router
{
    private string $httpMethod;
    private string $uri;
    private array $registeredRoutes = [];
    
    public function __construct(string $httpMethod, string $uri)
    {
        $this->httpMethod = $httpMethod;
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $this->uri = rawurldecode($uri);
        if ($this->uri === "/") {
            $this->uri = "/kanban";
        }
    }
    
    public function registerRoute(string $method, string $uri, string $controller): void
    {
        $this->registeredRoutes[] = [
            "method" => $method,
            "uri" => $uri,
            "controller" => $controller
        ];
    }
    
    public function validateRoute(): array
    {
        // Validar método primeiro
        $rota = [];
        foreach ($this->registeredRoutes as $rotaValida) {
            if ($this->httpMethod === $rotaValida["method"] && $this->uri === $rotaValida["uri"]) {
                $rota["situation"] = "OK";
                $rota["uri"] = $rotaValida["uri"];
                $rota["controller"] = $rotaValida["controller"];
                return $rota;
            }
        }
        $rota["situation"] = "NOT_FOUND";
        return $rota;
    }
    
    public function redirect(string $page): void
    {
        require "../source/view/template-header.php";
        require "../source/view/$page.php";
        require "../source/view/template-footer.php";
        exit;
    }
}
