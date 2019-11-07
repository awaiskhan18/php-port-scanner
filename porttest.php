<?php

$host = 'google.com';
$ports = array(80,443,44398,21,22,23);

foreach ($ports as $port)
{
    $connection = @fsockopen($host, $port);

    if (is_resource($connection))
    {
        echo '<h3>' . $host . ': <span style="color:green"> ' . $port . ' </span> ' . '(' . getservbyport($port, 'tcp') . ') is open.</h3>' . "\n";

        fclose($connection);
    }

    else
    {
        echo '<h3>' . $host . ' :<span style="color:red"> ' . $port . '</span> is not responding.</h3>' . "\n";
    }
}

echo "<hr>";

$host = 'localhost';
$ports = array(80,443,44398,21,22,23);

foreach ($ports as $port)
{
    $connection = @fsockopen($host, $port);

    if (is_resource($connection))
    {
        echo '<h3>' . $host . ': <span style="color:green"> ' . $port . ' </span> ' . '(' . getservbyport($port, 'tcp') . ') is open.</h3>' . "\n";

        fclose($connection);
    }

    else
    {
        echo '<h3>' . $host . ' :<span style="color:red"> ' . $port . '</span> is not responding.</h3>' . "\n";
    }
}
