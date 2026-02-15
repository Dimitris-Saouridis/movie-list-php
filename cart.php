php -v<?php

// Πίνακας με προϊόντα στο καλάθι
$cart = [
    ['name' => 'Laptop', 'price' => 1000],
    ['name' => 'Smartphone', 'price' => 800],
    ['name' => 'Headphones', 'price' => 150],
    ['name' => 'Mouse', 'price' => 30],
    ['name' => 'Keyboard', 'price' => 60]
];

// Συνάρτηση εμφάνισης των προϊόντων
function showCart($cart) {
    echo "Προϊόντα στο καλάθι:\n";
    foreach ($cart as $item) {
        echo "- " . $item['name'] . " (€" . $item['price'] . ")\n";
    }
    echo "\n";
}

// Συνάρτηση υπολογισμού συνολικής τιμής
function calculateTotal($cart) {
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'];
    }
    echo "Συνολική τιμή καλαθιού: €$total\n\n";
}

// Συνάρτηση ταξινόμησης προϊόντων κατά τιμή (αύξουσα)
function sortByPrice(&$cart) {
    usort($cart, function ($a, $b) {
        return $a['price'] <=> $b['price'];
    });
}

// Συνάρτηση προσθήκης προϊόντος
function addItem(&$cart, $name, $price) {
    $cart[] = ['name' => $name, 'price' => $price];
    echo "Προστέθηκε το προϊόν: $name (€$price)\n\n";
}

// Συνάρτηση αφαίρεσης προϊόντος
function removeItem(&$cart, $name) {
    foreach ($cart as $index => $item) {
        if (strtolower($item['name']) == strtolower($name)) {
            unset($cart[$index]);
            $cart = array_values($cart); // Επαναταξινόμηση index
            echo "Αφαιρέθηκε το προϊόν: $name\n\n";
            return;
        }
    }
    echo "Το προϊόν '$name' δεν βρέθηκε.\n\n";
}

// --- Χρήση των συναρτήσεων ---

showCart($cart);
calculateTotal($cart);

sortByPrice($cart);
echo "Καλάθι ταξινομημένο κατά τιμή:\n";
showCart($cart);

addItem($cart, "USB Stick", 20);
removeItem($cart, "Mouse");

showCart($cart);
calculateTotal($cart);
?>