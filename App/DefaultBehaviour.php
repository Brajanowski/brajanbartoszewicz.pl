<?php

require_once 'Engine/IViewBehaviour.php';

class DefaultBehaviour implements IViewBehaviour
{
    public function BuildViewData($engine)
    {
        $builtData = array();
        $builtData["title"] = $this->GetPageTitle();
        return $builtData;
    }

    protected function GetPageTitle()
    {
        return "Brajan Bartoszewicz";
    }
}
