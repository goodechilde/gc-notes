<?php

namespace Goodechilde\CommonContact\Traits;

use Goodechilde\CommonContact\Models\Note;

trait HasNotes
{
    public function addresses()
    {
        return $this->morphMany(Note::class, 'noteable');
    }
}
