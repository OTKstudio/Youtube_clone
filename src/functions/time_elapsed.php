<?php

function time_elapsed_string($datetime){
    $now=new DateTime;  // current datetime
    $ago=new DateTime($datetime);  // user datetime
    if($now<$ago){return "Unexpected future datetime value";}
    $diff=$now->diff($ago);  // datetime difference
    $diff->w=intval(floor($diff->d/7));  // add weeks to diff output
    $diff->d-=$diff->w*7;  // reduce days based on weeks calculation
    $units=[
        'y'=>'year',
        'm'=>'month',
        'w'=>'week',
        'd'=>'day',
        'h'=>'hour'
    ];
    $kept_diff=array_intersect_key((array)$diff,$units);  // omit unwanted elements of diff()'s output
    if(!max($kept_diff)){  // if y, m, w, d, & h all = 0, show default
        return 'default: 1 hour ago';  // inserted "default: " for demo.  Remove in production.
    }else{
        $diffs=array_filter(array_merge($units,$kept_diff)); // sort by $units order, then omit elements with 0 value
        return current($diffs).' '.$units[key($diffs)].(current($diffs)>1?'s':'').' ago'; // return highest unit data in plain English
    }
}
?>