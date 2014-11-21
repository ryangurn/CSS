<?php

class CoreValidator extends Illuminate\Validation\Validator
{

    protected $implicitRules = array('Required', 'RequiredWith', 'RequiredWithout', 'RequiredIf', 'Accepted', 'RequiredWithoutField');

    public function __construct(\Symfony\Component\Translation\TranslatorInterface $translator, $data, $rules, $messages = array())
    {
        parent::__construct($translator, $data, $rules, $messages);
        $this->isImplicit('fail');
    }

    public function validateUniqueness($attribute, $value, $parameters = null)
    {
        $table = $parameters[0];
        $column = isset($parameters[1]) ? $parameters[1] : $attribute;

        $finder = "find_by_".$column;
        $info = $table::$finder($value);
        if(count($info) == 0){
            return true;
        }elseif(count($info) != 0){
            return false;
        }

    }
}