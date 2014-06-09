<?php

/***************************************************************
* Copyright notice
*
* (c) 2014 Chi Hoang (info@chihoang.de)
*  All rights reserved
*
***************************************************************/
require_once("main.php");
 
 // Turn off all error reporting
error_reporting(0);

// example 1
/*$tri=new voronoi();
$set=$tri->main();
list($tree,$size)=$tri->buildtree($set); 
$nearest=new nearestneighbor();
//$p=new Point(12,322);
$p=new Point(60,60);
//$p=new Point(26,229);
$find=$nearest->main($tri,$tree,$p);
$nearest->show($tri,$find,0,$p);*/
      
//example2
$set=array();
$tree=array(172,31,238,106,233,397,118,206,58,28,268,382,10,380,342,26,67,371,380,14,382,200,24,200,194,190,10,88,276,331);
for ($i=0,$end=count($tree);$i<$end;$i+=2)
{
    $set[]=array($tree[$i],$tree[$i+1]);    
}
$tri=new voronoi();
list($tree,$size)=$tri->buildtree($set); 

$nearest=new nearestneighbor();
$p=new Point(12,322);
//$p=new Point(160,160);
$p=new Point(326,229);
//$p=new Point(188,298);
//$p=new Point(112,211);

// hierarchical search
$find=$nearest->main($tri,$tree,$p);
$nearest->show($tri,$find,$size-4,$p);

// Polytest
$find=$nearest->polytest($tri,$size-4,$p);
$find=$nearest->polytest($tri,0,$p);



?>