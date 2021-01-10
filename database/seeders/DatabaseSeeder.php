<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(NavbarSeeder::class);
        $this->call(BackgroundSeeder::class);
        $this->call(TitreSeeder::class);
        $this->call(LogoSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(IconeSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TestimonialsSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(ReadySeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(CategorieSeeder::class);

    }
}
