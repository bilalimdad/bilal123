<?php

//singleton is a design pattern which is used to create only one instance of class in entire lifecycle of an application.
//Its very useful,like we want configuration class in our application to only create one instance in a complete run(complete lifecycle).
//So only one object is creted of this class.Also constructor is private because we don't want to create object outside the class.

class Singleton
{
    private static $instance;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    private __construct()
    {

    }
    
}

$obj = Singleton::getInstance();
echo '<pre>';
var_dump($obj);
echo '</pre>';
