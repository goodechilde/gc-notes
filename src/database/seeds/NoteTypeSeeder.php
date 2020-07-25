<?php


use Illuminate\Database\Seeder;

class NoteTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Goodechilde\GcNotes\Models\NoteType::class, 40)->create();
    }
}
