<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    protected $fields = ['admin','client'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->fields as $field){
            \App\Role::create([
                'name' => $field
            ]);
        }
    }
}
