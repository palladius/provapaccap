<?php

// from redirect to hello
if($_SERVER['REQUEST_URI'] =="/redirect") {
  header( "HTTP/1.1 301 Moved Permanently" );
  header( "Location: /index?note=from_redirect" );
  exit;
}
?>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="/stylesheets/main.css" />
</head>

<body>
<div align='center' class='header' >
[
 <a href='/'>index</a> |
 <a href='/hello'>hello</a> |
 <a href='/cloud_storage'>GCS</a> |
 <a href='/cloud_sql'>CSql</a> |
 <a href='/posts'>posts</a> |
 <a href='/redirect'>redirect</a> |  
 <a href='/phpinfo'>phpinfo</a> 
]
</div>
