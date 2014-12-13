<?php

class Rule extends Eloquent
{
    protected $table = 'rule';
    protected $fillable = array('rule', 'user_id', 'group_id', 'state');

    public function group()
    {
        return $this->belongsTo('Group');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}