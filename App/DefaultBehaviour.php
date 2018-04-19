<?php

require_once 'Engine/IViewBehaviour.php';
require_once 'App/Menu.php';

class DefaultBehaviour implements IViewBehaviour
{
    public function BuildViewData($engine)
    {
        $builtData = array();
        $builtData["title"] = $this->GetPageTitle();

        Menu::SetMenuContent($builtData, $engine);
        return $builtData;
    }

    protected function GetPageTitle()
    {
        return "Brajan Bartoszewicz";
    }
}
