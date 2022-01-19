<?php

use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = [
            [
                'title' => 'BATMAN VS. BIGBY! A WOLF IN GOTHAM #5',
                'description' => 'The world-bending collision between Gotham City and Fabletown races toward its climax as two great detectives unite to unravel the Bookworm’s master plan and stop the bombings-but while their brains might be up to the task'
            ],
            [
                'title' => 'BATMAN: THE KNIGHT #1',
                'description' => 'The origin of Batman and his never-ending fight against crime in Gotham City is modern mythology, but what of the story in between? How did an angry, damaged young man grow into the most accomplished detective and crime-fighter the world has ever known? '
            ],
            [
                'title' => 'BLACK MANTA #5',
                'description' => 'Black Manta finds himself at the crossroads of good and evil as Devil Ray’s secret origin and Black Manta’s own past collide and erupt! Will Black Manta finally accept his legacy of villainy…'
            ],
            [
                'title' => 'WONDER WOMAN: EVOLUTION #3',
                'description' => 'As the trial for all humankind begins, with Wonder Woman serving as the defendant for all of Earth, godlike cosmic accusers present an extensive list of charges against humanity.'
            ],
        ];

        foreach ($comics as $comic) {
            $_comic = new Comic();
            $_comic->title = $comic['title'];
            $_comic->description = $comic['description'];
            $_comic->save();
        }
    }
}
