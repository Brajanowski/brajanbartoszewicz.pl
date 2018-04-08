<?php

require_once 'Engine/IViewBehaviour.php';

class IndexViewBehaviour implements IViewBehaviour
{
    public function BuildViewData($engine)
    {
        $db = $engine->DatabaseInstance();
        $results = $db->Query("SELECT * FROM protips");

        $builtData = array();
        $builtData["title"] = "Brajan Bartoszewicz";
        $builtData["content"] = $results[0]->content;

        return $builtData;
    }
}
