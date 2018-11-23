<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 40)->create();
    }
}


// INSERT INTO `users` (`id`, `name`, `slack_name`)
// VALUES
// 	(1, 'Alice Armstrong', 'alicearmstrong'),
// 	(2, 'Andy Keran', 'Andy Keran'),
// 	(3, 'Anne Voll', 'Anne'),
// 	(4, 'Aron Kun', 'Aron'),
// 	(5, 'Chris Marriott', 'chrixs'),
// 	(6, 'Daiki Obara', 'Daiki Obara'),
// 	(7, 'David Solomon', 'David'),
// 	(8, 'Dom Batten', 'dom'),
// 	(9, 'Fabio Militello', 'Fabio'),
// 	(10, 'Garet Quigg', 'Garet'),
// 	(11, 'Habin Kim', 'Habs'),
// 	(12, 'Javier Harford', 'javi'),
// 	(13, 'Jessica Rodriguez', 'jrods'),
// 	(14, 'John Paul Newman', 'John'),
// 	(15, 'Johnny Dworzynski', 'johnny'),
// 	(16, 'Lawrence Dawson', 'lawrence'),
// 	(17, 'Lukasz Grychowski', 'lukas'),
// 	(18, 'Marwa Elali', 'Marwa'),
// 	(19, 'Neil Sherwood', 'lomby'),
// 	(20, 'Paul Rees', 'pauly'),
// 	(21, 'Terry Tilley', 'terrytilley'),
// 	(22, 'Tim Graham', 'tg'),
// 	(23, 'Todd Francis', 'Todd'),
// 	(24, 'Tom Allpress', 'Tom Allpress'),
// 	(25, 'Ali Ali', 'Ali'),
// 	(26, 'Mark Channer', 'Mark Channer'),
// 	(27, 'Maroua El Baoui', 'marua_elba'),
// 	(28, 'Mazzy Bart', 'mazzy'),
// 	(29, 'Michael Green', 'Michael Green'),
// 	(30, 'Sean Milburn', 'Sean Milburn'),
// 	(31, 'Ylenia Marasco', 'Ylenia Marasco'),
// 	(32, 'Marta Moskwa', 'Marta');
