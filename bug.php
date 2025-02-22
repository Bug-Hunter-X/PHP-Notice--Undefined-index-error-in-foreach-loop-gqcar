```php
function calculate_total($items) {
  $total = 0;
  foreach ($items as $item) {
    $total += $item['price'] * $item['quantity'];
  }
  return $total;
}

$items = [
  ['name' => 'Item A', 'price' => 10, 'quantity' => 2],
  ['name' => 'Item B', 'price' => 5, 'quantity' => 5],
  ['name' => 'Item C', 'price' => 20, 'quantity' => 1],
];

$total = calculate_total($items);
echo "Total: ".$total; //This will output the correct total

//The following code is vulnerable to undefined index error
function calculate_total_vulnerable($items) {
  $total = 0;
  foreach ($items as $item) {
    $total += $item['price'] * $item['quantity'];
  }
  return $total;
}

$items_vulnerable = [
  ['name' => 'Item A', 'price' => 10],
  ['name' => 'Item B', 'price' => 5, 'quantity' => 5],
  ['name' => 'Item C', 'price' => 20, 'quantity' => 1],
];

$total_vulnerable = calculate_total_vulnerable($items_vulnerable); // Notice the missing 'quantity' key in the first item
echo "Total Vulnerable: ".$total_vulnerable;//This will throw an error because of the undefined index
```