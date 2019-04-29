<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       if(Schema::hasTable('posts') &&
           !(Schema::hasColumn('posts','user_name') && Schema::hasColumn('posts','user_email'))) {
           Schema::table('posts',function ($table) {
              $table->string('user_name')->after('id');
              $table->string('user_email')->after('user_name');
           });
       }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('posts') &&
            (Schema::hasColumn('posts','user_name') && Schema::hasColumn('posts','user_email'))) {
            Schema::table('posts',function ($table) {
                $table->dropColumn('user_name');
                $table->dropColumn('user_email');
            });
        }
    }
}
