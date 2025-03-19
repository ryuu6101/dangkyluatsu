<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('document_type_id')->nullable();
            $table->unsignedBigInteger('parrent_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('portrait_pic')->nullable();
            $table->string('fullname')->nullable();
            $table->string('gender')->nullable();
            $table->string('birthday')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('ethnic')->nullable();
            $table->string('religious')->nullable();
            $table->string('nationality')->nullable();
            $table->longText('residence_place')->nullable();
            $table->longText('current_place')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('previous_job')->nullable();
            $table->string('current_job')->nullable();
            $table->longText('workplace')->nullable();
            $table->string('id_card_number')->nullable();
            $table->string('id_card_date')->nullable();
            $table->string('id_card_place')->nullable();
            $table->string('universal_level')->nullable();
            $table->string('educated_method')->nullable();
            $table->string('educated_subject')->nullable();
            $table->string('educated_expertise')->nullable();
            $table->string('educated_place')->nullable();
            $table->string('political_level')->nullable();
            $table->string('union_joining_date')->nullable();
            $table->string('union_ativity_place')->nullable();
            $table->string('vcp_temperary_date')->nullable();
            $table->string('vcp_offical_date')->nullable();
            $table->string('law_certificate_number')->nullable();
            $table->string('law_certificate_date')->nullable();
            $table->string('first_time_join')->nullable();
            $table->string('law_degree_number')->nullable();
            $table->string('law_degree_date')->nullable();
            $table->string('law_degree_place')->nullable();
            $table->string('graduate_degree_number')->nullable();
            $table->string('graduate_degree_date')->nullable();
            $table->string('graduate_degree_place')->nullable();
            $table->string('educated_duration')->nullable();
            $table->string('instructor_number')->nullable();
            $table->longText('reward_and_discipline')->nullable();
            $table->longText('crime_record')->nullable();
            $table->string('admission_number')->nullable();
            $table->string('admission_date')->nullable();
            $table->string('lawyer_card_number')->nullable();
            $table->string('lawyer_card_date')->nullable();
            $table->string('card_exchange_reason')->nullable();
            $table->string('city')->nullable();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->unsignedBigInteger('document_status_id')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
