<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;


    public function abilities()
    {
        return $this->belongsToMany(Ability::class)->withTimestamps();
    }


    public function assingAbility($ability)
    {
        if(is_string($ability)){

            $ability =  Ability::where('name',$ability)->firstOrFail();
        }
        
        $this->abilities()->sync($ability,false);
    }

}
