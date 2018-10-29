<?php
/**
 * Created by PhpStorm.
 * User: man1c
 * Date: 29-10-18
 * Time: 18:34
 */

require_once( 'DBSettings.php' );
//Database class to connect to database and fire queries
class DBClass extends DatabaseSettings
{
    var $classQuery;
    var $link;

    var $errno = '';
    var $error = '';

    // Connects to the database
    function DBClass()
    {
        // Load settings from parent class
        $settings = DatabaseSettings::getSettings();

        // Get the main settings from the array we just loaded
        $host = $settings['dbhost'];
        $name = $settings['dbname'];
        $user = $settings['dbusername'];
        $pass = $settings['dbpassword'];

        // Connect to the database
        $this->link = new mysqli( $host , $user , $pass , $name );
    }

    function insert(){
        $settings = DatabaseSettings::getSettings();

        $host = $settings['dbhost'];
        $name = $settings['dbname'];
        $user = $settings['dbusername'];
        $pass = $settings['dbpassword'];

        $this->link = new mysqli( $host , $user , $pass , $name );




    }

}