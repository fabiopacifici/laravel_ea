<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{



    /**
     * Get all of the games for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function games(): HasMany
    {
        return $this->hasMany(Game::class);
    }


}
