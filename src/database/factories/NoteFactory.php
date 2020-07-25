<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\Goodechilde\GcNotes\Models\Note::class, function (Faker $faker) {
    return [
        'note_type_id' => \Goodechilde\GcNotes\Models\NoteType::inRandomOrder()->first(),
        'note' => $faker->paragraphs(2, true),
    ];
});
