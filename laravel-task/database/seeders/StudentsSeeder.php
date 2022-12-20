<?php

namespace Database\Seeders;
namespace Database\Seeders\migration\database\seeders;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
        "name" =>Str::random(50),
        "phone" =>Str::random(11),
        "cnic" =>Str::random(13),
        "course_id" =>rand(1,3),
        "grade_id" =>rand(1,3),
        "created_at" => now(),
        "updated_at" => now()
        ]);
    }
}
