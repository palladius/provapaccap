<h2>Cloud Storage</h2>

See from <a href='https://developers.google.com/appengine/docs/php/googlestorage/' >this docs</a>.

<?php

$options = [ "gs" => [ "Content-Type" => "text/plain" ]];
$ctx = stream_context_create($options);
file_put_contents("gs://rcarlesso/README.txt", "README", 0, $ctx);

?>

<h2>Cloud SQL</h2>

TODO.

<a href='https://developers.google.com/appengine/docs/php/cloud-sql/' >Look here</a>.

<?php
# http://stackoverflow.com/questions/17025605/google-app-engine-php-and-cloud-sql

    define('MYSQL_HOST', "/cloudsql/sample-project:sample-sql-instance");
    define('MYSQL_LOGIN', "sample-login");
    define('MYSQL_PASSWORD', "sample-pass");
    define('MYSQL_DB', "sample-db");

    echo "\nfunction_exists('mysql_connect'):\n"; 
    var_dump(function_exists('mysql_connect'));

    echo "\nclass_exists('mysqli'):\n"; 
    var_dump(class_exists('mysqli'));   

    try{

        echo "\nUse PDO\n";
        $db = new PDO(
            'mysql:unix_socket='.MYSQL_HOST.';dbname='.MYSQL_DB.';charset=utf8',
            MYSQL_LOGIN,
            MYSQL_PASSWORD
        );
    }catch(Exception $e){
        var_dump($e->__toString());
    }

?>