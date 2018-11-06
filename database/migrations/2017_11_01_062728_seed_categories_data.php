<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    public function up()
    {
        $categories = [
            [
                'name'        => 'share it',
                'description' => 'Share creation, share discovery',
            ],
            [
                'name'        => 'Tutorial',
                'description' => 'Development skills, recommended extensions, etc.',
            ],
            [
                'name'        => 'Question and answer',
                'description' => 'Please be friendly and help each other.',
            ],
            [
                'name'        => 'announcement',
                'description' => 'Site announcement',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    public function down()
    {
        DB::table('categories')->truncate();
    }
}