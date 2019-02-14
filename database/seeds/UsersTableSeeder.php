<?php

use App\Model\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->me();
        $this->administrators();
        $this->users();
    }

    /* SEEDERS */
    private function me()
    {
        factory(User::class)->create([
            'first_name'    => 'Victor',
            'last_name'     => 'Cardenas',
            'user_name'     => 'vi.cardenas',
            'email'         => 'vi.cardenas@live.cl',
            'password'      => '$2b$10$PM3iV4M9ncnqNd4Brv53puZ8.Oj8SJfmeV1BBPruYA2WEv7ESts2a',
            'bio'           => 'Desarrollador PHP, Full-Stack',
            'gender'        => 'male',
            'birth_date'    => '1987-10-08',
            'role'          => 'admin',
        ]);
    }

    private function administrators()
    {
        factory(User::class, 4)->create([
            'role' => 'admin',
        ]);
    }

    private function users()
    {
        factory(User::class, 20)->create();
    }
}
