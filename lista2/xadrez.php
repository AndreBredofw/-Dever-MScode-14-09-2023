<?php 

function torreAtaca($torre1, $torre2) {
    if (similar_text($torre1, $torre2) == 1 ) {
       echo "TRUE"; 
       
    }else {
       echo "FALSE";
    }
    
    
}
echo torreAtaca("A5", "A7");

?>