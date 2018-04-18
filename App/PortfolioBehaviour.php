<?php

require_once 'Engine/IViewBehaviour.php';
require_once 'App/DefaultBehaviour.php';

class PortfolioBehaviour extends DefaultBehaviour
{
    public function BuildViewData($engine)
    {
        $builtData = array();
        $builtData["title"] = $this->GetPageTitle();

        $bodyView = new View("portfolio.view", new DefaultBehaviour);
        $builtData["body"] = $bodyView->FlushAsString($engine);

        return $builtData;
    }
}
