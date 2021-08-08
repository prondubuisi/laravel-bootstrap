<?php

namespace App\Domains\Meals\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\GetMealRecommendationRule;

class RecommendMealsRequest extends FormRequest
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
            'allergies' => ['nullable', 'array', new GetMealRecommendationRule()],
            'length' => ['nullable','integer'],
        ];
    }
}
