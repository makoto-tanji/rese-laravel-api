<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationUpdateRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user() !== null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 以下追加
            'number_of_people' => 'required',
            'reservation_date' => 'required | date | after:now + 1hours'
        ];
    }
    // messages()追加
    public function messages()
    {
        return [
            'number_of_people.required' => '人数を選択してください',
            'reservation_date.required' => '日時を選択してください',
            'reservation_date.date' => '日時を選択してください',
            'reservation_date.after' => '現時刻から1時間後よりお選びください',
        ];
    }
}
