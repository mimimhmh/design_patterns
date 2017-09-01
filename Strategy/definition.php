<?php

// Define a family of algorithms.

class LogToFile implements Logger
{

    public function log($data) {

        var_dump('log a data to file.');
    }

}

class LogToDatabase implements Logger
{

    public function log($data) {

        var_dump('log a data to database.');
    }

}

class LogToXWebService implements Logger
{

    public function log($data) {

        var_dump('log a data to Saas.');
    }

}


// Encapsulate and make them interchangeable.

interface Logger
{

    public function log($data);

}


// App
class App
{

    public function log($data, Logger $logger = null) {

        $logger = $logger ?: new LogToFile();
        $logger->log($data);
    }
}

$app = new App();

$app->log('Some data here', new LogToXWebService);