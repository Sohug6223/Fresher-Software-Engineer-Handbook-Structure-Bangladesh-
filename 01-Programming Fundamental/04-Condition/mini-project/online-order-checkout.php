<?php

/*


Online Order Checkout System
*/

// Constants
define("FREE_DELIVERY_LIMIT", 3000);
define("DHAKA_DELIVERY_CHARGE", 60);
define("OUTSIDE_DHAKA_DELIVERY_CHARGE", 130);

// Variables
$cartTotal = 3200;
$deliveryLocation = "Dhaka";
$isVipMember = false;

$shippingCost = 0;

// Calculate Shipping Cost
if ($isVipMember) {

    $shippingCost = 0;

} 
else {

    if ($deliveryLocation === "Dhaka") {

        $shippingCost = ($cartTotal >= FREE_DELIVERY_LIMIT)
            ? 0
            : DHAKA_DELIVERY_CHARGE;

    } 
    else {

        $shippingCost = OUTSIDE_DHAKA_DELIVERY_CHARGE;

    }
}

// Grand Total
$grandTotal = $cartTotal + $shippingCost;

// Delivery Status
$deliveryStatus = ($deliveryLocation === "Dhaka")
    ? "Delivery within 24 Hours"
    : "Delivery within 2-3 Days";

// Member Status
$memberStatus = $isVipMember
    ? "VIP Member"
    : "Regular Member";

// Output

echo "\n";
echo "ONLINE ORDER CHECKOUT \n";
echo "\n";

echo "Cart Total         : $cartTotal BDT \n";
echo "Member Status      : $memberStatus \n";
echo "Delivery Location  : $deliveryLocation \n";
echo "Shipping Charge    : $shippingCost BDT \n";
echo "Grand Total        : $grandTotal BDT \n";
echo "Delivery Status    : $deliveryStatus \n";

echo "\n";
echo "Order Process Completed Successfully. \n";