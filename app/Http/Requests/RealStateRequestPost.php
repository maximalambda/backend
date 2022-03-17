<?php

namespace App\Http\Requests;

use App\Services\ISOCodeService;
use Illuminate\Foundation\Http\FormRequest;

class RealStateRequestPost extends FormRequest
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
        // $realStateType = $this->input('real_state_type');
        $bathrooms =  $this->route()->parameter('bathrooms');
        // $this->request->get('bathrooms');
        // $isoCode = (new ISOCodeService())->validateISO3166Code($this->input('country'));
        return [
            'name' => 'required',
            'real_state_type' => 'required',
            'street' => 'required',
            'external_number' => 'required',
            // 'internal_number' => $realStateType === 'department'  || $realStateType === 'commercial_ground'   ? 'required' : null,
            'neighborhood' => 'required',
            'city' => 'required',
            // 'country' => !empty($isoCode) ? $isoCode : null, //$this->faker->country,
            'rooms' => 'required',
            'bathrooms' => $bathrooms == 'land' || $bathrooms == 'commercial_ground'  ? 'required' : null,
            'comments' =>'required',
        ];
    }
}
