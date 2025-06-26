<?php
require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo "=== PRODUCTS IN DATABASE ===\n";
$products = App\Models\Product::all();

if ($products->count() > 0) {
    foreach ($products as $product) {
        echo "ID: " . $product->id . "\n";
        echo "Name: " . $product->name . "\n";
        echo "Description: " . $product->description . "\n";
        echo "Price: $" . number_format($product->price, 2) . "\n";
        echo "Created: " . $product->created_at . "\n";
        echo "---\n";
    }
} else {
    echo "No products found in database.\n";
}
?>
