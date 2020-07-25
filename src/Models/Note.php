<?php

namespace Goodechilde\CommonContact\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
     use SoftDeletes;

    protected $guarded = [ 'id' ];

    public function noteType()
    {
        return $this->hasOne(NoteType::class, 'id', 'note_type_id');
    }

    public function noteable()
    {
        return $this->morphTo();
    }
}