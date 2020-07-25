<?php

namespace Goodechilde\GcNotes\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NoteType extends Model
{
     use SoftDeletes;

    protected $guarded = [ 'id' ];
    //
}
