<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('du_id')->nullable();
            $table->string('contractor')->nullable();
            $table->string('du_name')->nullable();
            $table->string('address_to_id')->nullable();
            $table->string('address_registered_in_sez_on_P1')->nullable();
            $table->string('city')->nullable();
            $table->string('year')->nullable();
            $table->string('priority')->nullable();
            $table->string('BS_in_the_air')->nullable();
            $table->string('order_R1_number')->nullable();
            $table->date('order_R1_date_of_the_beginning')->nullable();
            $table->date('order_R1_end_date')->nullable();
            $table->text('order_R1_comment')->nullable();
            $table->date('ID_OTR_received_date')->nullable();
            $table->text('ID_OTR_received_comment')->nullable();
            $table->date('photos_received_date')->nullable();
            $table->text('photos_received_comment')->nullable();
            $table->text('lease_contract_comment')->nullable();
            $table->date('SO_data_request_date')->nullable();
            $table->string('SO_data_responsibility')->nullable();
            $table->string('SO_data_received')->nullable();
            $table->string('PSEZ_complite_questions_for_developing_PSEZ')->nullable();
            $table->date('PSEZ_complite_planned date')->nullable();
            $table->date('PSEZ_complite_actual_date')->nullable();
            $table->string('PSEZ_complite_comments')->nullable();

            $table->integer('user_id')->unsigned()->default(1);
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('projects');
    }
}
