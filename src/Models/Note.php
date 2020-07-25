<?php

namespace Goodechilde\GcNotes\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
     use SoftDeletes;

    protected $guarded = [ 'id' ];
    protected $with = ['noteType'];

    public function noteType()
    {
        return $this->hasOne(NoteType::class, 'id', 'note_type_id');
    }

    public function noteable()
    {
        return $this->morphTo();
    }
}
