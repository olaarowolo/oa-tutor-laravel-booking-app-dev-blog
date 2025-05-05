<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_applications', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('full_name');
            $table->string('passionate_education');
            $table->string('flexible_schedule');
            $table->string('tutoring_preference');
            $table->text('passion_description');
            $table->text('subjects_proficient', 2000);
            $table->text('age_groups')->nullable();
            $table->text('communication_skills')->nullable();
            $table->text('reliability')->nullable();
            $table->string('resume_path')->nullable();
            $table->text('additional_info')->nullable();
            $table->string('availability')->nullable();
            $table->string('education_level')->nullable();
            $table->string('prior_experience')->nullable();
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
        Schema::dropIfExists('tutor_applications');
    }
}
