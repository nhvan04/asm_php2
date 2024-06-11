<?php 

namespace Vanch\FpolyBase\Controllers\Client;

use Vanch\FpolyBase\Commons\Controller;
use Vanch\FpolyBase\Models\Product;

class HomeController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    
    public function index() {
        $name = 'Hải Văn';

        $products = $this->product->all();

        $this->renderViewClient('home', [
            'name' => $name,
            'products' => $products
        ]);
    }
}