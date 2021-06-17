<?php

namespace Zeggriim\Logger;


class Log4Php
{
    public $loggers = array();
    public $current = 'root';


    public function __construct($config_path = null)
    {
        if (is_null($config_path)){
            \Logger::configure(dirname(__DIR__,2) . DIRECTORY_SEPARATOR .'log4php.xml');
        }
        $this->loggers[$this->current] = \Logger::getRootLogger();
    }

    public function hclog($logger,string $level, $msg)
    {

        if (is_array($msg)) {
            $msg = print_r($msg, true);
        }

        $levels = [
            'tra'=> 'trace',
            'deb'=> 'debug',
            'inf'=> 'info',
            'war'=> 'warn',
            'err'=> 'error',
            'fat'=> 'fatal'
        ];

        if (array_key_exists($level, $levels))
        {
            $level = $levels[$level];
            $this->$level($msg, $logger);
        } elseif (in_array($level, $levels))
        {
            $this->$level($msg,$logger);
        }
    }


    private function load(string $logger)
    {
        $this->loggers[$logger] = \Logger::getLogger($logger);
    }


    public function fatal(string $msg, $logger = NULL): string
    {
        $logger = $logger ?: $this->current;
        if (!isset($this->loggers[$logger]))
            $this->load($logger);
        $this->loggers[$logger]->fatal($msg);
        return $msg;
    }


    public function error(string $msg, $logger = NULL): string
    {
        $logger = $logger ?: $this->current;
        if (!isset($this->loggers[$logger]))
            $this->load($logger);
        $this->loggers[$logger]->error($msg);
        return $msg;
    }


    public function warn(string $msg, $logger = NULL): string
    {
        $logger = $logger ?: $this->current;
        if (!isset($this->loggers[$logger]))
            $this->load($logger);
        $this->loggers[$logger]->warn($msg);
        return $msg;
    }


    public function info(string $msg, $logger = NULL): string
    {
        $logger = $logger ?: $this->current;
        if (!isset($this->loggers[$logger]))
            $this->load($logger);
        $this->loggers[$logger]->info($msg);
        return $msg;
    }


    public function debug(string $msg, $logger = NULL): string
    {
        $logger = $logger ?: $this->current;
        if (!isset($this->loggers[$logger]))
            $this->load($logger);
        $this->loggers[$logger]->debug($msg);
        return $msg;
    }


    public function trace(string $msg, $logger = NULL): string
    {
        $logger = $logger ?: $this->current;
        if (!isset($this->loggers[$logger]))
            $this->load($logger);
        $this->loggers[$logger]->trace($msg);
        return $msg;
    }

}
