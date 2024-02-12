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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('NIT')->unique;
            $table->string('name');
            $table->foreignId('municipality_code')->constrained('municipalities')->onDelete('cascade');
            $table->foreignId('economic_activity_code')->constrained('economic_activities')->onDelete('cascade');
            $table->string('legalRepresentative');
            $table->string('email')->unique;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
