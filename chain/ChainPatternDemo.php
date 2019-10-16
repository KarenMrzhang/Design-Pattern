<?php
require_once "./AbstractLogger.php";

/**
 * Author: Karen
 * Date: 2019/10/16 0016
 */
function getChainOfLoggers(){
      $errorLogger = new ErrorLogger(AbstractLogger::$ERROR);
      $fileLogger = new FileLogger(AbstractLogger::$DEBUG);
      $consoleLogger = new ConsoleLogger(AbstractLogger::$INFO);

      $errorLogger->setNextLogger($fileLogger);
      $fileLogger->setNextLogger($consoleLogger);

      return $errorLogger;
}

$loggerChain = getChainOfLoggers();
$loggerChain->logMessage(AbstractLogger::$INFO, "This is an information.");
$loggerChain->logMessage(AbstractLogger::$DEBUG, "This is a debug level information.");
$loggerChain->logMessage(AbstractLogger::$ERROR, "This is an error information.");