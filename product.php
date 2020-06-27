$productData = file_get_contents('product-data.json');
$data = array('item0', 'item1', 'item3');    
view('product', $data);


function view($path, $data) {
    include($path . '-view.php');
}