<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Branch;
use App\Models\BranchService;
use App\Models\Review;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::insert([
            [
                "name" => "Thomas N",
                "email" => "thomas.n@compfest.id",
                "phone" => "08123456789",
                "password" => bcrypt("Admin123"),
                "role" => "admin",
            ],
            [
                "name" => "customer",
                "email" => "customer@mail.com",
                "phone" => "081312345678",
                "password" => bcrypt("customer"),
                "role" => "customer",
            ],
        
        
        ]);

        Branch::insert([
            [
                'name' => "Branch A",
                'opening' => 10,
                'closing' => 18,
            ],
            [
                'name' => "Branch B",
                'opening' => 10,
                'closing' => 18,
            ],
            [
                'name' => "Branch C",
                'opening' => 10,
                'closing' => 18,
            ],
        ]);

        Service::insert([
            [
                "name" => 'Cutting',
                "duration" => 60,
            ],
            [
                "name" => 'Coloring',
                "duration" => 60,
            ],
            [
                "name" => 'Blow',
                "duration" => 30,
            ],
            [
                "name" => 'Smoothing',
                "duration" => 90,
            ],
        ]);

        BranchService::insert([
            [
                'branch_id' => 1,
                'service_id' => 4,
            ],
        ]);

        Review::insert([
            [
                "name" => "Angel",
                "rating" => 5,
                "comment" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, sint?",
            ],
            [
                "name" => "Natasha",
                "rating" => 3,
                "comment" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, sint?",
            ],
            [
                "name" => "Michelle",
                "rating" => 4,
                "comment" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, sint?",
            ],
            [
                "name" => "Jessica",
                "rating" => 5,
                "comment" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, sint?",
            ],
        ]);
    }
}
