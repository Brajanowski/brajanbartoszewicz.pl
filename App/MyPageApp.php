<?php

require_once 'Engine/IApplication.php';
require_once 'App/IndexViewBehaviour.php';
require_once 'App/DefaultBehaviour.php';

class MyPage implements IApplication
{
    public function Proceed($engine)
    {
        // Connect to database
        $engine->SetDatabaseConnection("localhost", "brajanbartoszewicz", "root", "");

        //$engine->RegisterView("/", "Layouts/main", new IndexViewBehaviour);
        $engine->RegisterView("/", "Layouts/home", new DefaultBehaviour);
    }
}
