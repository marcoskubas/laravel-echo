<?php

use App\User;
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
        factory(User::class, 10)->create();

        factory(User::class)->create([
            'name'  => 'Marcos Kubas',
            'email' => 'marcos@yakso.com.br'
        ]);

        factory(User::class)->create([
            'name'  => 'Marcos Kubaszewski',
            'email' => 'marcosarobed@gmail.com'
        ]);
    }
}
