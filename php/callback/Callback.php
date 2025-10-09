<?php

namespace callback;

class Callback
{
    public function __construct() {}

    public function run()
    {
        $oConfig = \base\Config::Instance();
        $oTools = new \base\Tools;

        $reqText = file_get_contents("php://input");
        $reqSize = $_SERVER['CONTENT_LENGTH'];

        if ($reqSize >= $oConfig->req_max_size) {
            $oTools->sendError("La taille de la requête est invalide.");
            return;
        }

        $reqJSON = json_decode($reqText, true);

        if (!$reqJSON) {
            $oTools->sendError("Le format de la requête est invalide.");
            return;
        }

        if (!isset($reqJSON["module"])) {
            $oTools->sendError("Les paramètres de la requête sont invalides.");
            return;
        }

        if (!isset($reqJSON["method"])) {
            $oTools->sendError("Le paramètres de la requête sont invalides.");
            return;
        }

        $module = $reqJSON["module"];
        $method = $reqJSON["method"];
        $params = null;

        if (isset($reqJSON["params"])) {
            $params = $reqJSON["params"];
        }

        $this->onModule($module, $method, $params);
    }

    private function onModule(string $_module, string $_method, $_params): void
    {
        $oTools = new \base\Tools;

        if ($_module == "clipboard") {
            $this->onClipboard($_method, $_params);
        } else if ($_module == "clipboard") {
            $this->onClipboard($_method, $_params);
        } else {
            $oTools->sendError("Le module de la requête est invalide.");
        }
    }

    private function onClipboard(string $_method, $_params): void
    {
        $obj = new Clipboard();
        $obj->run($_method, $_params);
    }
}
