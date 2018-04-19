<?php

require_once 'Engine/Engine.php';

class Template
{
    private $content = null;

    public function LoadFromFile($filename)
    {
        $templateFile = fopen($filename, "r") or die("Unable to open file! \"" . $filename . "\"");
        $this->content = fread($templateFile, filesize($filename));
        fclose($templateFile);
    }

    public function Render($data = array())
    {
        if ($this->content != null)
        {
            $contentToRender = $this->content;

            // Replace built in variables
            $contentToRender = str_replace("@url", Engine::URL(), $contentToRender);

            // Replace user data
            foreach ($data as $key => $value)
            {
                $keyToReplace = "@dynamic(" . $key . ")";
                $contentToRender = str_replace($keyToReplace, $value, $contentToRender);
            }

            return $contentToRender;
        }
        else
        {
            return "Template: Null.";
        }

        return "Unknown error!";
    }
}
