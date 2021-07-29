<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Platform extends Model
{


    /**
     * The games that belong to the Platform
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Game::class);
    }
}
