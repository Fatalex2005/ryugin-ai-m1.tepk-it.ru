<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'material_type_id' => 'required|numeric',  // Тип материала
            'name' => 'required|string|max:255',  // Имя
            'price' => 'required|numeric|min:0',  // Цена
            'warehouse' => 'required|numeric|min:0',  // Количество на складе
            'minimum' => 'required|numeric|min:0',  // Минимальное количество
            'packaging' => 'required|numeric|min:0',  // Количество в упаковке
            'unit_id' => 'required|numeric',  // Единица измерения
        ];
    }
    public function messages()
    {
        return [
            'material_type_id' => 'Тип материала обязателен',

            'name.required' => 'Имя материала обязательно',
            'name.max' => 'Имя не должно превышать 255 символов',

            'price.required' => 'Цена обязательно',
            'price.max' => 'Цена не должна быть меньше 0',

            'warehouse.required' => 'Количество на складе обязательно',
            'warehouse.max' => 'Количество на складе не должно быть меньше 0',

            'minimum.required' => 'Минимальное количество материала обязательно',
            'minimum.max' => 'Минимальное количество не должно быть меньше 0',

            'packaging.required' => 'Количество в упаковке обязательно',
            'packaging.max' => 'Количество в упаковке не должно быть меньше 0',

            'unit_id.required' => 'Единица измерения обязательна',
        ];
    }

}
