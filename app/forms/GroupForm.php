<?php

class GroupForm extends BaseForm
{
    public function isValidForAdd()
    {
        return $this->isValid(array(
            "name" => "required"
        ));
    }
    public function isValidForEdit()
    {
        return $this->isValid(array(
            "id"   => "exists:group,id",
            "name" => "required"
        ));
    }
    public function isValidForDelete()
    {
        return $this->isValid(array(
            "id" => "notin:1,2|exists:group,id"
        ));
    }
}