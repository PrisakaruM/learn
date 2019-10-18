<?php
function debug($data, $die = false)
{
    echo('<pre>');
        print_r($data);
    echo('</pre>');

    $die ? die : '';
}
?>