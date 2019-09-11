<?php
//if else lồng nhau
$tuoi = 35;
if ( ($tuoi > 0 ) && ($tuoi < 18)) {
    echo "<br> trẻ em";
} elseif ( ($tuoi >= 18 ) && ($tuoi < 30) ) {
    echo "<br> thanh niên";
} elseif ( ($tuoi >= 30 ) && ($tuoi < 50) ) {
    echo "<br> trung niên";
} else {
    echo "<br> tuổi già";
}

$tuoi = 35;
if ( ($tuoi > 0 ) && ($tuoi < 18)) :
    echo "<br> trẻ em";
elseif ( ($tuoi >= 18 ) && ($tuoi < 30) ) :
    echo "<br> thanh niên";
elseif ( ($tuoi >= 30 ) && ($tuoi < 50) ) :
    echo "<br> trung niên";
else :
    echo "<br> tuổi già";
endif;