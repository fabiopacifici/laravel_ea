<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameDetail extends Model
{
    //

    /**
     * Get the game that owns the GameDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }
}
