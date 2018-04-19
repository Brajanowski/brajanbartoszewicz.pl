<?php

require_once 'Engine/Engine.php';

class Menu
{
    private static $navigation = array(
        "Home" => "",
        "Portfolio" => "Portfolio",
        "Skills" => "Skills",
        "Contact" => "Contact"
    );

    public static function SetMenuContent(&$buildData, $engine)
    {
        $buildData["menu_css"] = '<link rel="stylesheet" href="./css/menu.css">';
        $buildData["menu"] = Menu::GenerateMenuCode($engine);
    }

    private static function GenerateMenuCode($engine)
    {
        $menuCode = '<div id="menu">';
        foreach (Menu::$navigation as $key => $value)
        {
            $menuCode .= "<a ";

            if ($engine->GetParsedPath()[0] == $key)
            {
                $menuCode .= 'class="bold" ';
            }

            $menuCode .= "href='" . Engine::URL() . "/" . $value . "'>" . $key . "</a> ";
        }
        $menuCode .= "</div>";

        return $menuCode;
    }
}