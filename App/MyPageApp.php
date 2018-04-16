<?php

require_once 'Engine/IApplication.php';
require_once 'App/DefaultBehaviour.php';
require_once 'App/PortfolioBehaviour.php';

class MyPage implements IApplication
{
    public function Proceed($engine)
    {
        // Connect to database
        //$engine->SetDatabaseConnection("localhost", "brajanbartoszewicz", "root", "");

        $engine->RegisterView("/", "Layouts/home", new DefaultBehaviour);
        $engine->RegisterView("Portfolio", "Layouts/portfolio", new PortfolioBehaviour);
    }
}
