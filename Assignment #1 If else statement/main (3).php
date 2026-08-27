<?php
$paymentMethod = "gshock";

switch ($paymentMethod) {
    case "Credit Card":
        echo "Processing payment via Credit Card...";
        break;
    case "PayPal":
        echo "Processing payment via PayPal...";
        break;
    case "Bank Transfer":
        echo "Processing payment via Bank Transfer...";
        break;
    default:
        echo "Invalid payment method selected.";
}
?>