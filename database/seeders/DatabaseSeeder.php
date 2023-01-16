<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Administrador;
use App\Models\Reservation;
use App\Models\ReservationUser;
use App\Models\RoomsType;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['firstname' => 'Jhon', 'lastname' => 'Doe', 'phonenumber' => '1-451-395-1600', 'birthdate' => '1980-09-28', 'email' => 'jdone@gmail.com'],
            ['firstname' => 'Jane', 'lastname' => 'Jackson', 'phonenumber' => '1-709-896-0629', 'birthdate' => '1985-05-01', 'email' => 'jjackson@yahoo.com'],
            ['firstname' => 'Alex', 'lastname' => 'Smith', 'phonenumber' => '1-742-823-9990', 'birthdate' => '1990-05-28', 'email' => 'jasmith@oul.com'],
            ['firstname' => 'Johana', 'lastname' => 'Roll', 'phonenumber' => '1-806-460-9612', 'birthdate' => '1981-10-31', 'email' => 'jkrolling@uk.com'],
        ];
        foreach ($users as $user){
            User::create($user);
        }

        $admins = [
            ['name' => 'admin_uno', 'email' => 'admin_uno@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'admin_dos', 'email' => 'admin_dos@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'admin_tres', 'email' => 'admin_tres@gmail.com', 'password' => Hash::make('password')],
        ];

        foreach ($admins as $admin){
            Administrador::create($admin);
        }

        $romms = [
            ['name'=> 'Single', 'nof' => 2],
            ['name'=> 'Double', 'nof' => 1],
            ['name'=> 'Shared', 'nof' => 2],
        ];

        foreach ($romms as $romm){
            RoomsType::create($romm);
        }

        $reservations = [
            ['room_type_id' => 1, 'startdate' => '2017-04-29', 'enddate' => '2017-05-01', 'admin_id' => 1],
            ['room_type_id' => 2, 'startdate' => '2017-04-29', 'enddate' => '2017-05-01', 'admin_id' => 1],
            ['room_type_id' => 3, 'startdate' => '2017-04-29', 'enddate' => '2017-05-01', 'admin_id' => 2],
            ['room_type_id' => 2, 'startdate' => '2017-05-02', 'enddate' => '2017-05-05', 'admin_id' => 2],
            ['room_type_id' => 1, 'startdate' => '2017-05-06', 'enddate' => '2017-05-10', 'admin_id' => 1],
            ['room_type_id' => 3, 'startdate' => '2017-05-26', 'enddate' => '2017-05-29', 'admin_id' => 2],
            ['room_type_id' => 2, 'startdate' => '2017-05-26', 'enddate' => '2017-05-29', 'admin_id' => 2],
            ['room_type_id' => 2, 'startdate' => '2017-05-06', 'enddate' => '2017-05-10', 'admin_id' => 3],
        ];
        foreach ($reservations as $reservation) {
            Reservation::create($reservation);
        }
        $reservations_users = [
            ['user_id'=> 1, 'reservation_id'=> 1],
            ['user_id'=> 2, 'reservation_id'=> 2],
            ['user_id'=> 3, 'reservation_id'=> 3],
            ['user_id'=> 4, 'reservation_id'=> 4],
            ['user_id'=> 1, 'reservation_id'=> 5],
            ['user_id'=> 2, 'reservation_id'=> 6],
            ['user_id'=> 3, 'reservation_id'=> 7],
            ['user_id'=> 4, 'reservation_id'=> 8],
        ];

        foreach ($reservations_users as $reservations_user){
            ReservationUser::create($reservations_user);
        }
    }

}
