<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class CustomValidation implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function passes($attribute, $value)
    {
        $validator = Validator::make([$attribute => $value], [
            $attribute => app()->environment('testing') ? 'email' : 'email:rfc,dns,filter',
        ]);
 
        return !$validator->fails();
    }




        public function message()
    {
        return "The email must be a valid email address.";
    }






}
