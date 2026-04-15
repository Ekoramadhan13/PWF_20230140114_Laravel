<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Tentukan apakah user berhak melakukan request ini
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Aturan validasi untuk update (edit produk)
     */
    public function rules(): array
    {
        return [
            'name'     => 'required|string|min:3|max:255',
            'quantity' => 'required|integer|min:0',
            'price'    => 'required|numeric|min:0',
        ];
    }

    /**
     * Pesan error kustom dalam Bahasa Indonesia
     */
    public function messages(): array
    {
        return [
            'name.required'     => 'Nama produk wajib diisi.',
            'name.min'          => 'Nama produk minimal 3 karakter.',
            'name.max'          => 'Nama produk maksimal 255 karakter.',
            'quantity.required' => 'Jumlah stok wajib diisi.',
            'quantity.integer'  => 'Jumlah stok harus berupa angka bulat.',
            'quantity.min'      => 'Jumlah stok tidak boleh negatif.',
            'price.required'    => 'Harga wajib diisi.',
            'price.numeric'     => 'Harga harus berupa angka.',
            'price.min'         => 'Harga tidak boleh negatif.',
        ];
    }
}