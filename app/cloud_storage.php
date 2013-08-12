<h1>Cloud Storage</h1>

See from <a href='https://developers.google.com/appengine/docs/php/googlestorage/' >this docs</a>.

<?php

$riccardo_file = "gs://rcarlesso/README.txt" ;
$options = [ "gs" => [ "Content-Type" => "text/plain" ]];
$ctx = stream_context_create($options);
file_put_contents("gs://rcarlesso/README.txt", "README", 0, $ctx);

?>

<h2>CLI</h2>

<pre>
    $ gsutil cat <? print $riccardo_file ?>
</pre>
