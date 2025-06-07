<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncController extends Controller
{
    public function method(ProductType $productType, MaterialType $materialType, int $quantity, float $p1, float $p2) {
        try {
            $need_quantity = $p1 * $p2 * $productType->coefficient * (1 + $productType->materialType->defective) ;
            return $need_quantity;
        }
        catch (\Exception $exception) {
            return -1;
        }
    }
}
