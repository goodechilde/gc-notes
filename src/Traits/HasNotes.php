<?php

namespace Goodechilde\GcNotes\Traits;

use Goodechilde\GcNotes\Models\Note;

trait HasNotes
{
    public function addresses()
    {
        return $this->morphMany(Note::class, 'noteable');
    }
}
