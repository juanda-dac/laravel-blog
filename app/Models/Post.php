<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    // Casting
    protected function casts():array
    {
        return [
            'published_at'=>'datetime',
        ];
    }


    // Mutator

    protected function title(): Attribute{
        return Attribute::make(
            set: function($value){
                /**
                 * This is a mutator => Change the value before saving it to the database in lowercase
                 */
                return strtolower($value);
            },
            get: function($value){
                /**
                 * This is an accessor => Change the value before returning the first symbol in uppercase
                 */
                return ucfirst($value);
            }
        );
    }
}
