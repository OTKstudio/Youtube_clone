<?php  
function nbr_vue($vue){
    if( $vue < 1000){
        $vueVal = $vue;
        return $vueVal;
       }
    if($vue >= 1000 && $vue < 10000){
     $subVue=substr($vue,0,1);
     $vueVal = "$subVue.K";
     return $vueVal;
    }
    if($vue >= 10000 && $vue < 100000){
        $subVue=substr($vue,0,2);
        $vueVal = "$subVue.K";
        return $vueVal; 
    }
    if($vue >= 100000 && $vue < 1000000){
        $subVue=substr($vue,0,3);
        $vueVal = "$subVue.K";
        return $vueVal;
    }
    if($vue >= 1000000 && $vue < 10000000){
        $subVue=substr($vue,0,1);
        $vueVal = "$subVue.M";
        return $vueVal;
    }
    if($vue >= 10000000 && $vue < 100000000){
        $subVue=substr($vue,0,2);
        $vueVal = "$subVue.M";
        return $vueVal;
    }
    if($vue >= 100000000){
        $subVue=substr($vue,0,3);
        $vueVal = "$subVue.M";
        return $vueVal;
    }

}

?>
