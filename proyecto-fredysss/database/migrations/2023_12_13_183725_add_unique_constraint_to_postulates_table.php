<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('postulates', function (Blueprint $table) {
            $table->unique('candidate_id');
        });
    }
    
    public function down()
    {
        Schema::table('postulates', function (Blueprint $table) {
            $table->dropUnique(['candidate_id']);
        });
    }
    
};
