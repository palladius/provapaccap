
<h1>Posts</h1>

Vedi tutti gli oggetti di tipo Post

<?php
    define('MYSQL_HOST', "/cloudsql/google.com:discoproject:provapaccap");
    define('MYSQL_LOGIN', "riccardo");
    define('MYSQL_PASSWORD', "attenzione_pubblicissima");
    #define('MYSQL_DB', "riccardo_test"); # 
    define('MYSQL_DB', "provapaccap");
    try{
        $db = new PDO('mysql:unix_socket='.MYSQL_HOST.';dbname='.MYSQL_DB.';charset=utf8', MYSQL_LOGIN, MYSQL_PASSWORD);
    } catch(Exception $e) {
        print "Exception! ";
        var_dump($e->__toString());
    }
    $sql = "SELECT * FROM posts";
    foreach($db->query($sql) as $row) {
?>
    <h2 class='posts_title' >
        <? print $row['title'] ?>
    </h2>
    <em class='posts_body'>
        <? print  $row['body'] ?>
    </em>
<?
      # print_r($row);
    }
    mysql_close($con);
?>