<?php

namespace App\Models;

use Illuminate\Validation\Factory as ValidatorFactory;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Symfony\Component\Translation\Translator;

class Elegant extends Eloquent
{
    protected $rules = array();

    protected $errors;


    public function validate($data)
    {
        // make a new validator object
        $factory = new ValidatorFactory(new Translator('en'));
        $v = $factory->make($data, $this->rules);

        // check for failure
        if ($v->fails()) {
            // set errors and return false
            $this->errors = $v->errors();
            return false;
        }

        // validation pass
        return true;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function save(array $options = [])
    {
        $data = $this->toArray();
        if( $this->validate($data)){
            return parent::save($options);
        }else{
            return false;
        }
    }
}