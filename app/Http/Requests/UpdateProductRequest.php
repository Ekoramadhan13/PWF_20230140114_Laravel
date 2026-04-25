<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name'        => 'required|string|min:3|max:255',
            'category_id' => 'required|exists:category,id',
            'quantity'    => 'required|integer|min:0',
            'price'       => 'required|numeric|min:0',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'        => 'Nama produk wajib diisi.',
            'name.min'             => 'Nama produk minimal 3 karakter.',
            'name.max'             => 'Nama produk maksimal 255 karakter.',
            'category_id.required' => 'Kategori wajib dipilih.',
            'category_id.exists'   => 'Kategori yang dipilih tidak valid.',
            'quantity.required'    => 'Jumlah stok wajib diisi.',
            'quantity.integer'     => 'Jumlah stok harus berupa angka bulat.',
            'quantity.min'         => 'Jumlah stok tidak boleh negatif.',
            'price.required'       => 'Harga wajib diisi.',
            'price.numeric'        => 'Harga harus berupa angka.',
            'price.min'            => 'Harga tidak boleh negatif.',
        ];
    }
}