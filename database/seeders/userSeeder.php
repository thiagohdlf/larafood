<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'Thiago',
            'email' => 'thiago@mail',
            'password' => bcrypt("123456"),
        ];
        if(User::where('email', '=', $user['email'])->count()){

            $usuario = User::where('email', '=', $user['email'])->first();
            $usuario->update($user);
            echo 'Usuario atualizado!';
        }else{
            User::create($user);
            echo 'Usuario criado!';
        }
    }
}
