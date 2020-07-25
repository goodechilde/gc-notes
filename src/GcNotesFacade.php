<?php

namespace Goodechilde\GcNotes;

use Illuminate\Support\Facades\Facade;

/**
 * @see
 */
class GcNotesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'gc-notes';
    }
}
