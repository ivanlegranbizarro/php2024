<?php

declare(strict_types=1);

$products = [
    ['name' => 'T-shirt', 'color' => 'red', 'size' => 'medium'],
    ['name' => 'T-shirt', 'color' => 'blue', 'size' => 'large'],
    ['name' => 'Jeans', 'color' => 'blue', 'size' => 'medium'],
    ['name' => 'Sweater', 'color' => 'red', 'size' => 'small'],
    ['name' => 'Dress', 'color' => 'blue', 'size' => 'small'],
    ['name' => 'Jacket', 'color' => 'red', 'size' => 'large'],
];

$color = $_GET["color"] ?? '';
$size = $_GET["size"] ?? '';

$filteredProducts = array_filter(
    $products,
    function ($product) use ($color, $size) {
        return $product['color'] === $color && $product['size'] === $size;
    }
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Query Parameters</title>
</head>

<body>
    <h1>Filter Products</h1>

    <form method="get">
        <label for="size">Size:</label>
        <select name="size" id="size">
            <option value="">Any</option>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>

        <label for="color">Color:</label>
        <select name="color" id="color">
            <option value="">Any</option>
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
        </select>

        <button>Filter</button>
    </form>

    <a href="<?= $_SERVER['PHP_SELF'] ?>">Reset Filter</a>

    <h2>Products</h2>

    <?php if (!empty($filteredProducts)): ?>
        <ul>
            <?php foreach ($filteredProducts as $product) : ?>
                <li>
                    <?= htmlspecialchars($product['name']) ?>
                    - Color:
                    <?= htmlspecialchars($product['color']) ?>, Size:
                    <?= htmlspecialchars($product['size']) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No products found matching the filter.</p>
    <?php endif; ?>
</body>

</html>
