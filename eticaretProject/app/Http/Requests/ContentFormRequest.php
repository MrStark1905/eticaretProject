<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
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
            "name"=>"required|string|min:3",
            "email"=>"required|email",
            "subject"=>"required",
            "message"=>"required",
        ];
    }

    public function messages(): array
    {
        return [
            "name.required"=>"Ad Soyad Alanı Boş Bırakılamaz",
            "name.string"=>"Ad Soyad Karakterlerden Oluşmalıdır",
            "name.min"=>"Ad Soyad Minimum 3 Karakterden oluşmalıdır",
            "email.required"=>"E-posta Alanı Boş Bırakılamaz",
            "email.email"=>"Geçersiz E-posta Adresi",
            "subject.required"=>"Konu Alanı Boş Bırakılamaz",
            "message.required"=>"Mesaj Alanı Boş Bırakılamaz",
        ];
    }
}
