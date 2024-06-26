<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    
    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'email'],
            'tell' => ['required', 'integer|max:5'],
            'address' => ['required'],
            /*'content'は、categoryテーブルから持ってくるので、処理を調べる必要あり*/
            'content' => ['required'],
            'detail' => ['required', 'string|max:120'],
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'tell.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            /*'content'は、categoryテーブルから持ってくるので、処理を調べる必要あり*/
            'content.required' => 'お問い合わせの種類を入力してください',
            'deteil.required' => 'お問い合わせを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tell.max'=> '電話番号は5桁までの数字を入力してください',
            'deteil.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
