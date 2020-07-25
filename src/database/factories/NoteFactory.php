<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\Goodechilde\CommonContact\Models\Note::class, function (Faker $faker) {
    return [
        'note_type_id' => \Goodechilde\CommonContact\Models\NoteType::inRandomOrder()->first(),
        'note' => $faker->paragraphs(2, true),
    ];
});
