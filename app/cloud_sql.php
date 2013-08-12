<h2>Cloud SQL</h2>


<a href='https://developers.google.com/appengine/docs/php/cloud-sql/' >Look here</a>.

Output: <br/>

<pre class='debug' >
<?php
# http://stackoverflow.com/questions/17025605/google-app-engine-php-and-cloud-sql

#  CREATE USER 'riccardo'@'localhost' IDENTIFIED BY 'attenzione_pubblicissima';
#  GRANT ALL PRIVILEGES ON * . * TO 'riccardo'@'localhost';
#  FLUSH PRIVILEGES;

# Creato DB google.com:discoproject:provapaccap attaccato alla app 'provapaccap'
    define('MYSQL_HOST', "/cloudsql/google.com:discoproject:provapaccap");
    define('MYSQL_LOGIN', "riccardo");
    define('MYSQL_PASSWORD', "attenzione_pubblicissima");
    #define('MYSQL_DB', "riccardo_test"); # 
    define('MYSQL_DB', "provapaccap");

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
</pre>