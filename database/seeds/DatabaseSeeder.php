<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Themes Table Seeder
        DB::table('themes')->insert([
            ['fileName' => "0", 'themeName' => "Flatty"],
            ['fileName' => "1", 'themeName' => "Cerulean"],
            ['fileName' => "2", 'themeName' => "Cosmo"],
            ['fileName' => "3", 'themeName' => "Cyborg"],
            ['fileName' => "4", 'themeName' => "Darkly"],
            ['fileName' => "5", 'themeName' => "Journal"],
            ['fileName' => "6", 'themeName' => "Lumen"],
            ['fileName' => "7", 'themeName' => "Paper"],
            ['fileName' => "8", 'themeName' => "Readable"],
            ['fileName' => "9", 'themeName' => "Sandstone"],
            ['fileName' => "10", 'themeName' => "Simplex"],
            ['fileName' => "11", 'themeName' => "Slate"],
            ['fileName' => "12", 'themeName' => "Solar"],
            ['fileName' => "13", 'themeName' => "Spacelab"],
            ['fileName' => "14", 'themeName' => "Superhero"],
            ['fileName' => "15", 'themeName' => "United"],
            ['fileName' => "16", 'themeName' => "Yeti"]
        ]);

        DB::table('users')->insert([
            'name' => 'saman',
            'email' => 'ahmadianrad.saman@gmail.com',
            'password' => bcrypt('0019421664'),
        ]);

        DB::table('apartments')->insert([
           'code' =>'test',
           'manager_name' => 'saman',
           'manager_phone' => '09379084098',
           'address' => 'lsadkfasudflkajsdf',
           'description' => 'asjkdhfkjashdfklhaslkhfd'
        ]);
    }
}
