<?php
$points = 1200;

if ($points >= 2000) {
    echo "Membership Level: Pro";
} elseif ($points >= 1000) {
    echo "Membership Level: Veteran";
} elseif ($points >= 500) {
    echo "Membership Level: legend";
} else {
    echo "Membership Level: Newbie";
}
?>
