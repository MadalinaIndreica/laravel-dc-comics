<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:250',
            'description' => 'nullable',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required'
        ];
    }
    public function messages() {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve essere lungo almeno :min caratteri',
            'title.max' =>'Il titolo deve essere lungo massimo :max caratteri',
            'thumb.required' => 'è obbligatorio inserire una foto',
            'price.required' => 'è obbligatorio inserire il prezzo dell\'articolo',
            'series.required' => 'è obbligatorio inserire una serie',
            'sale_date.required' => 'è obbligatorio inserire una data di pubblicazione',
            'type.required' => 'è obbligatorio selezionare una tipologia '
        ];
    }
}
