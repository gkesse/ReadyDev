<?php

namespace base;

class Tools
{
    public function __construct() {}

    public function sendError(string | array $_msg): void
    {
        $rep = [];
        $rep["status"] = "error";
        $rep["data"] = $_msg;
        $repText = json_encode($rep);
        echo $repText;
    }

    public function sendSuccess(string | array $_msg): void
    {
        $rep = [];
        $rep["status"] = "success";
        $rep["data"] = $_msg;
        $repText = json_encode($rep);
        echo $repText;
    }

    public function defaultError(): void
    {
        $this->sendError("Un probleme a ete rencontre.");
    }

    public function defaultSuccess(): void
    {
        $this->sendSuccess("L'operation s'est bien deroule.");
    }

    public function rootPath(string $_path): string
    {
        return $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . $_path;
    }

    public function joinPath(...$_path): string
    {
        $path = "";
        $hasPath = false;
        foreach ($_path as $item) {
            if ($hasPath) {
                $path .= DIRECTORY_SEPARATOR;
            }
            $path .= $item;
            $hasPath = true;
        }
        return $path;
    }

    public function joinSep(...$_path): string
    {
        $path = "";
        foreach ($_path as $item) {
            $path .= $item;
        }
        return $path;
    }

    public function whiteListContains($_whiteList, $_path): bool
    {
        $root = $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR;
        $size = strlen($root);
        $path = substr($_path, $size);
        return in_array($path, $_whiteList);
    }
}
