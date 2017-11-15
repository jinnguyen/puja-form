<?php
namespace Puja\Form;
class Form
{
    protected $attributes;
    public function __construct($data = null)
    {
        $this->attributes = $data;
    }

    protected function rules()
    {
        return array();
    }

    public function validate()
    {
        return true;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }
}
