<?php

$products = [
    "phone" => [
        "description" => "Smartphone with great features",
        "rating" => 4.5,
        "reviews" =>10
    ],
    "laptop" => [
        "description" => "Powerful laptop for productivity",
        "rating" => 4.2,
        "reviews" =>10
    ],
    "tablet" => [
        "description" => "Portable tablet for entertainment",
        "rating" => 4.0,
        "review" =>6
    ]
];

function displayProductInfo($products, $productName) {
    if(isset($products[$productName])) {
        $product = $products[$productName];
        echo "ürün adı: " . $productName ."\n";
        echo "açıklama: " .$product["description"]."\n";
        echo "rating: " . $product["rating"]."\n";
        echo "review: " . $product["reviews"];
    }
    
}

function addReviewAndRating($products, $productName, $review, $rating) {
    if(isset($products[$productName])) {
        $product = $products[$productName];
        $currentRating = $product["rating"];
        $currentReview = $product["reviews"];
        $newRating = ($currentRating * $currentReview + $rating) / ($currentReview + 1);
        $products[$productName]["rating"] = $newRating;
        $products[$productName]["reviews"] = $currentReview + 1;
    }
    return $products;
}

$productName = "phone";
displayProductInfo($products, $productName);

$userReview = "Great Job";
$userRating = "4.0";

$products = addReviewAndRating($products, $productName, $userReview, $userRating);

displayProductInfo($products, $productName);




?>