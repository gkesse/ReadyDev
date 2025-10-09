<?php

namespace callback;

class Clipboard
{
    public function __construct() {}

    public function run(string $_method, $_params)
    {
        $oTools = new \base\Tools;

        if ($_method == "paste") {
            $this->onPaste($_params);
        } else if ($_method == "paste") {
            $this->onPaste($_params);
        } else if ($_method == "update_data_image_video") {
            $this->onUpdateDataIMageVideo($_params);
        } else {
            $oTools->sendError("La méthode de la requête est invalide.");
        }
    }

    private function onPaste($_params): void
    {
        $oTools = new \base\Tools;

        if (!isset($_params["mimetype"])) {
            $oTools->sendError("Le format des paramètres est invalide.");
            return;
        }

        $mimeType = $_params["mimetype"];

        if (str_starts_with($mimeType, "image/")) {
            $this->onPasteImage($_params);
        } else if (str_starts_with($mimeType, "video/")) {
            $this->onPasteVideo($_params);
        } else {
            $oTools->sendError("Le type des données est invalide.");
        }
    }

    private function onPasteImage($_params): void
    {
        $oConfig = \base\Config::Instance();
        $oTools = new \base\Tools;

        if (!isset($_params["filename"])) {
            $oTools->sendError("Le format des paramètres est invalide.");
            return;
        }

        if (!isset($_params["image"])) {
            $oTools->sendError("Le format des paramètres est invalide.");
            return;
        }

        if (!isset($_params["size"])) {
            $oTools->sendError("Le format des paramètres est invalide.");
            return;
        }

        $root = $_params["root"];
        $path = $_params["path"];
        $filename = $_params["filename"];
        $name = $_params["name"];
        $image = $_params["image"];
        $size = $_params["size"];

        $rootPath = $oTools->joinPath($root, $path, "data");
        $rootPathFull = $oTools->rootPath($rootPath);
        if (!file_exists($rootPathFull)) {
            mkdir($rootPathFull, 0755);
        }

        if ($size >= $oConfig->img_max_size) {
            $oTools->sendError("La taille des données est invalide.");
            return;
        }

        list(, $image) = explode(':', $image);
        list(, $image) = explode(';', $image);
        list(, $image) = explode(',', $image);
        $image = base64_decode($image);

        $filepath = $oTools->joinSep($rootPath, "/", $filename, "-", $name);
        $filepathFull = $oTools->rootPath($filepath);
        file_put_contents($filepathFull, $image);

        $source = $oTools->joinSep($root, $path, "/data/", $filename, "-", $name);
        $rep = [];
        $rep["source"] = $source;

        $oTools->sendSuccess($rep);
    }

    private function onPasteVideo($_params): void
    {
        $oConfig = \base\Config::Instance();
        $oTools = new \base\Tools;

        if (!isset($_params["filename"])) {
            $oTools->sendError("Le format des paramètres est invalide.");
            return;
        }

        if (!isset($_params["video"])) {
            $oTools->sendError("Le format des paramètres est invalide.");
            return;
        }

        if (!isset($_params["size"])) {
            $oTools->sendError("Le format des paramètres est invalide.");
            return;
        }

        $root = $_params["root"];
        $path = $_params["path"];
        $filename = $_params["filename"];
        $name = $_params["name"];
        $video = $_params["video"];
        $size = $_params["size"];

        if ($size >= $oConfig->video_max_size) {
            $oTools->sendError("La taille des données est invalide.");
            return;
        }

        $rootPath = $oTools->joinPath($root, $path, "data");
        $rootPathFull = $oTools->rootPath($rootPath);
        if (!file_exists($rootPathFull)) {
            mkdir($rootPathFull, 0755);
        }

        list(, $video) = explode(':', $video);
        list(, $video) = explode(';', $video);
        list(, $video) = explode(',', $video);
        $video = base64_decode($video);

        $filepath = $oTools->joinSep($rootPath, "/", $filename, "-", $name);
        $filepathFull = $oTools->rootPath($filepath);
        file_put_contents($filepathFull, $video);

        $source = $oTools->joinSep($root, $path, "/data/", $filename, "-", $name);
        $rep = [];
        $rep["source"] = $source;

        $oTools->sendSuccess($rep);
    }

    private function onUpdateDataImageVideo($_params): void
    {
        $oTools = new \base\Tools;

        if (!isset($_params["white_list"])) {
            $oTools->sendError("Le format des paramètres est invalide.");
            return;
        }

        $whiteList = $_params["white_list"];

        if (empty($whiteList)) {
            $oTools->sendError("Le nombre de paramètres est invalide.");
            return;
        }

        $rootPath = $oTools->rootPath(dirname($whiteList[0]));

        foreach (glob($rootPath . '/*') as $file) {
            if ($oTools->whiteListContains($whiteList, $file)) {
                continue;
            }
            unlink($file);
        }

        $oTools->defaultSuccess();
    }
}
