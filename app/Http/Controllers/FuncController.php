<?php

namespace App\Http\Controllers;

use App\Models\MaterialType;
use App\Models\ProductType;
use Illuminate\Http\Request;

class FuncController extends Controller
{
    public function calculate(ProductType $product_type, MaterialType $material_type, int $available_material, float $p1, float $p2): int {
        try {
            if ($available_material <= 0 || $p1 <= 0 || $p2 <= 0) {
                return -1;
            }
            $product_type = ProductType::findOrFail($productTypeId);
            $material_type = MaterialType::findOrFail($materialTypeId);

            // Сырьё на одну единицу продукции
            $raw_per_product = $p1 * $p2 * $product_type->coefficient;

            // Потери материала
            $loss_percent = $material_type->loss;
            $raw_with_loss = $raw_per_product * (1 + $loss_percent / 100);

            // Максимальное количество продукции
            $production_count = floor($available_material / $raw_with_loss);

            return $production_count >= 0 ? (int)$production_count : 0;

        } catch (\Exception $e) {
            return -1;
        }
    }

}
