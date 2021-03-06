<?php

spl_autoload_register(
    function (string $namespace): void
    {
        $namespace = str_replace("Kanban\\", "", $namespace);
        $namespace = str_replace("Controller\\", "controller\\", $namespace);
        $namespace = str_replace("DAO\\", "dao\\", $namespace);
        $namespace = str_replace("Model\\", "model\\", $namespace);
        $namespace = str_replace("\\", DIRECTORY_SEPARATOR, $namespace);
        $path = str_replace("public", "source", getcwd()) . DIRECTORY_SEPARATOR . $namespace . ".php";

        include_once $path;
    }
);
