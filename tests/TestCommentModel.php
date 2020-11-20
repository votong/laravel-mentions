<?php

namespace VoTong\Mentions\Test;

use Illuminate\Database\Eloquent\Model;
use VoTong\Mentions\Traits\HasMentions;

class TestCommentModel extends Model
{
    use HasMentions;

    protected $table = 'test_mention_comments';
    protected $guarded = [];
    public $timestamps = false;
}
