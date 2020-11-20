<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use VoTong\Mentions\Traits\HasMentions;

class Comment extends Model
{
    use HasMentions;

    /**
     * Guarded attributes.
     *
     * @var array
     */
    protected $guarded = [];
}
