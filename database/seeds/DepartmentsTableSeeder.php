<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $departments = [
        [ 'name' => 'development' ],
        [ 'name' => 'digital' ]
      ];

      foreach($departments as $department) {
        Department::create($department);
      }
    }
}
