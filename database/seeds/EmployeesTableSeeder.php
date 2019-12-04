<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Department;
use App\Employee;

class EmployeesTableSeeder extends Seeder
{
    static $names = [
        ["Jael", "Pate"],
        ["William", "Berry"],
        ["Chelsea", "Webb"],
        ["Phoebe", "Bryant"],
        ["Robert", "Mcfadden"],
        ["Mara", "Cobb"],
        ["Camilla", "Keith"],
        ["Phoebe", "Nixon"],
        ["Molly", "Fischer"],
        ["Ferdinand", "Harrison"],
        ["Ferris", "Hodges"],
        ["Quynn", "Potts"],
        ["Todd", "Clark"],
        ["Mufutau", "Oneill"],
        ["Melodie", "Randall"],
        ["Colt", "Harrell"],
        ["Cyrus", "Herrera"],
        ["Jin", "Roman"],
        ["Graiden", "Pittman"],
        ["Malcolm", "Berry"],
        ["Sloane", "Stevens"],
        ["George", "Baldwin"],
        ["Hayfa", "Frazier"],
        ["Norman", "Anderson"],
        ["Althea", "Briggs"],
        ["Austin", "Sellers"],
        ["Armando", "Rosa"],
        ["Winter", "Harper"],
        ["Gannon", "Mathews"],
        ["Ignacia", "Robertson"],
        ["Farrah", "Ashley"],
        ["Tucker", "Mann"],
        ["Rinah", "Pena"],
        ["Colette", "Peterson"],
        ["Kenneth", "Newton"],
        ["Octavia", "Glass"],
        ["Adria", "Campbell"],
        ["Erasmus", "Richards"],
        ["Ria", "Bradford"],
        ["Sean", "Knight"],
        ["Murphy", "French"],
        ["Sandra", "Hobbs"],
        ["Alea", "Buchanan"],
        ["Aaron", "Mcintosh"],
        ["Unity", "Swanson"],
        ["Vladimir", "Morse"],
        ["Cullen", "Pitts"],
        ["Thane", "Johnson"],
        ["Macon", "Mason"],
        ["Gabriel", "Webb"],
        ["Kiona", "Elliott"],
        ["Reece", "Nash"],
        ["Clayton", "Olson"],
        ["Eaton", "Logan"],
        ["Nissim", "Lawrence"],
        ["Kalia", "Pearson"],
        ["Kylan", "Hunter"],
        ["Maggy", "Levy"],
        ["Sacha", "Maldonado"],
        ["Carter", "Tyler"],
        ["Lillith", "Sexton"],
        ["Zephr", "Saunders"],
        ["Gretchen", "Espinoza"],
        ["Octavia", "Hendrix"],
        ["Mariam", "Montoya"],
        ["Amy", "Michael"],
        ["Linus", "Church"],
        ["Linda", "Herring"],
        ["Latifah", "Bauer"],
        ["Mira", "Holmes"],
        ["Rogan", "Gallegos"],
        ["Xandra", "Mcintyre"],
        ["Elizabeth", "Buchanan"],
        ["Naomi", "Schneider"],
        ["Flynn", "Mcdowell"],
        ["Peter", "Goodwin"],
        ["Ori", "Barron"],
        ["Sheila", "Burt"],
        ["Lesley", "Haley"],
        ["Regan", "Hickman"],
        ["Aimee", "Blanchard"],
        ["Cassady", "Kane"],
        ["Nero", "Bray"],
        ["Lacy", "Perez"],
        ["Hayes", "Mullen"],
        ["Quin", "Rivas"],
        ["Maite", "Moody"],
        ["Dalton", "Morris"],
        ["Vera", "Valdez"],
        ["Shay", "Love"],
        ["Paloma", "Christian"],
        ["Kendall", "Townsend"],
        ["Daryl", "Johnson"],
        ["Maile", "Wilson"],
        ["Marah", "Noble"],
        ["Xanthus", "Franco"],
        ["Arden", "Lindsey"],
        ["Jael", "Mcknight"],
        ["Penelope", "Downs"],
        ["Guy", "Lara"]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_ids = Role::all()->pluck('id');
        $department_ids = Department::all()->pluck('id');
        collect($this::$names)->each(function($name) use($role_ids, $department_ids){
            Employee::create([
                'first_name' => $name[0],
                'last_name' => $name[1],
                'role_id' => $role_ids->random(),
                'department_id' => $department_ids->random()
            ]);
        });
    }
}
