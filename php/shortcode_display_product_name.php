// WC - displayProductName
function displayProductName($item) {
    $productName = get_the_title($item['id']);
    return $productName;
}

add_shortcode('product_name', 'displayProductName');
