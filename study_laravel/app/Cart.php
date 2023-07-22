<?php
namespace App;

class Cart
{
	public $products = null;
	public $totalPrice = 0;
	public $totalQty = 0;
	public function __construct($cart)
	{
		if ($cart) {
			$this->products = $cart->products;
			$this->totalPrice = $cart->totalPrice;
			$this->totalQty = $cart->totalQty;
		}
	}
	public function AddCart($product, $id){
		$newProduct = ['quantity' => 0, 'productInfo' => $product]; 
		if($this->products){
			if(array_key_exists($id, $products)){
				$newProduct = $products[$id];
			}
		}
		else{

		}
	}
}
?>