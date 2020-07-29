<?php

namespace Goodechilde\GcNotes\Traits;

use Goodechilde\GcNotes\Models\Note;

trait HasNotes
{
    public function notes()
    {
        return $this->morphMany(Note::class, 'noteable');
    }
}
