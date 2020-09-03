<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('email');
            $table->string('phone');
            $table->text('cv');
            $table->text('coverletter');
            $table->string('linkedin_profile');
            $table->text('how_did_you_hear_about_us');
            $table->foreignId('department_id')->constrained();
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
        Schema::dropIfExists('applicants');
    }
}
