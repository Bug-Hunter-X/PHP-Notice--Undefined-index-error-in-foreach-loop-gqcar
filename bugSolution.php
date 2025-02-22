```php
<?php
function calculate_total_safe($items) {
  $total = 0;
  foreach ($items as $item) {
    // Check if the 'quantity' key exists before accessing it
    $quantity = isset($item['quantity']) ? $item['quantity'] : 0;
    $total += $item['price'] * $quantity; 
  }
  return $total;
}

//Alternative using null coalescing operator
function calculate_total_safe2($items) {
  $total = 0;
  foreach ($items as $item) {
    $total += $item['price'] * ($item['quantity'] ?? 0);
  }
  return $total;
}

$items = [
  ['name' => 'Item A', 'price' => 10],
  ['name' => 'Item B', 'price' => 5, 'quantity' => 5],
  ['name' => 'Item C', 'price' => 20, 'quantity' => 1],
];

$total = calculate_total_safe($items);
echo "Total (Safe): ".$total;

$total2 = calculate_total_safe2($items);
echo "Total (Safe2): ".$total2;
?>
```