<?php

require_once 'Template.php';
require_once 'View.php';
require_once 'Database.php';

class Engine
{
    private $views = array();
    private $database = null;

    public function Run($app)
    {
        $app->Proceed($this);
        $this->GetDesiredView()->Flush($this);
    }

    public function RegisterView($url, $templateName, $behaviour)
    {
        $this->views[$url] = new View($templateName, $behaviour);
    }

    public function SetDatabaseConnection($hostname, $dbname, $user, $password)
    {
        $this->database = new Database($hostname, $dbname, $user, $password);
    }

    public function DatabaseInstance()
    {
        if ($this->database == null)
        {
            die("CRITICAL ERROR: You are not connected to any database and you try to use one!");
        }

        return $this->database;
    }

    private function GetDesiredView()
    {
        $path = $this->ParsePath();
        
        $viewName = $path[0];
        if ($viewName == null)
        {
            return $this->views["/"];
        }
        else
        {
            if (array_key_exists($viewName, $this->views))
            {
                return $this->views[$viewName];
            }
            else
            {
                return $this->views["/"];
            }
        }
    }

    private function ParsePath()
    {
        $basePath = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['SCRIPT_NAME'], "index.php"));
        return explode("/", $basePath);
    }
}