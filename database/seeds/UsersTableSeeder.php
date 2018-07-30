<?php
use App\User;
use Illuminate\Support\Facades\Hash;
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
      $user = new User;
      $user->email = "babsi";
      $user->password = Hash::make("kritsch");
      $user->remember_token = "";
      $user->save();
    }
}
