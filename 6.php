<?php 
    print "<h3>REFRESH THE PAGE </H3>";

    $name = "count.txt";

    $file = fopen($name,'r');
    $hits = fscanf($file,"%d");
    fclose($file);

    $hits[0]++;

    $file = fopen($name,'w');
    fprintf($file,"%d",$hits[0]);
    fclose($file);

    print "Total number of viwes:".$hits[0];

?>
