<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Allergy;

class GetMealRecommendationRule implements Rule
{
    /**
     * Variable to hold error message
     *
     * @var string $info
     */
    private $info;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $values)
    {
        if(count($values) == 0){
            $this->info = "Please supply allergies using a nexted array payload";
            return false;
        }
       
        $outerCount = 0;
        foreach ($values as $value){
            $innerCount = 0;
           
            if (gettype($value) !== "array"){
                $this->info = 'Allergies should come in nexted arrays to accommodate multiple meals recommendation';
                return false;
            }
          
            if(count($value) == 0){
                $this->info = "Allergy  [{$outerCount}] [{$innerCount}] array is empty, please ensure you have comma separated list for each allergy array";
                return false;
            }
 
            foreach($value as $allergyUid){
               $allergy = Allergy::findByUid($allergyUid);
               
               if(is_null($allergy)){
                $this->info = "Allergy [{$outerCount}] [{$innerCount}] does not exist";
                return false;
               }
               $innerCount++;
            }
            $outerCount++;
            
        }

        return true;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->info;
    }
}
