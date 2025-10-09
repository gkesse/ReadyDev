<?php

namespace base;

class Config
{
    private static ?Config $m_instance = null;
    private Config\_Config $m_config;

    private function __construct()
    {
        $this->m_config = new Config\_Config;
        $this->m_config->req_max_size = 40 * 1024 * 1024;
        $this->m_config->img_max_size = 1 * 1024 * 1024;
        $this->m_config->video_max_size = 20 * 1024 * 1024;
    }

    public static function Instance(): Config\_Config
    {
        if (self::$m_instance == null) {
            self::$m_instance = new Config();
        }

        return self::$m_instance->m_config;
    }
}

namespace base\Config;

class _Config
{
    public int $req_max_size;
    public int $img_max_size;
    public int $video_max_size;
}
