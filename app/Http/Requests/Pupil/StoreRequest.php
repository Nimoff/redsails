<?php

namespace App\Http\Requests\Pupil;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'surname' => 'required|string',
            'name' => 'required|string',
            'father_name' => 'required|string',
            'sex' => 'required|string',
            'birthday' => 'required|date',
            'entrance' => 'required|date',
            'registration' => 'nullable|string',
            'study' => 'nullable|string',
            'corpus' => 'nullable|string',
            'room' => 'nullable|integer',
            'disability' => 'nullable|string',
            'ovz' => 'nullable|string',
            'placement' => 'nullable|string',
            'identification' => 'nullable|string',
            'identification_number' => 'nullable|string',
            'date_get' => 'nullable|date',
            'who_get' => 'nullable|string',
            'SNILS' => 'nullable|string',
            'oszn' => 'nullable|string',
            'status' => 'nullable|string'
        ];
    }

    public function messages()
    {
        return[
            'surname.required' => 'Это поле является обязательным для заполнения',
            'name.required' => 'Это поле является обязательным для заполнения',
            'father_name.required' => 'Это поле является обязательным для заполнения',
            'birthday.required' => 'Это поле является обязательным для заполнения',
            'birthday.date' => 'Поле должно быть формата - 01.01.2000',
            'entrance.required' => 'Это поле является обязательным для заполнения',
            'entrance.date' => 'Поле должно быть формата - 01.01.2000',
            'room.required' => 'Поле должно быть числом',
        ];
    }
}
