<?php

class View
{
    private $templateName = null;
    private $viewBehaviour = null;

    public function __construct($templateName, $viewBehaviour)
    {
        $this->templateName = $templateName;
        $this->viewBehaviour = $viewBehaviour;
    }

    public function FlushAsString($engine)
    {
        $template = new Template;
        $template->LoadFromFile("./Views/" . $this->templateName . ".template.php");

        $data = null;
        if ($this->viewBehaviour != null)
        {
            $data = $this->viewBehaviour->BuildViewData($engine);
        }

        return $template->Render($data != null ? $data : []);
    }

    public function Flush($engine)
    {
        echo $this->FlushAsString($engine);
    }
}
