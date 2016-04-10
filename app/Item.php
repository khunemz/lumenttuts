<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillble = [
        'title', 'description', 'price' , 'slug' ,'url1',
        'url2', 'url3' ,'url4'
    ];

}