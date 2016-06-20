<?php

namespace App;

class Word extends \Eloquent
{
    protected $fillable = [
        'title', 'text', 'password','url','finish_date','delete_date','note_type','background_color','uid'
    ];
}