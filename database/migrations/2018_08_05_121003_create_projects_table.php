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
            $table->string('podriadchik')->nullable();
            $table->string('du_name_v_zakaze')->nullable();
            $table->string('adres_v_id')->nullable();
            $table->string('adres_propisannyi_v_SEZ_na_R1')->nullable();
            $table->string('city')->nullable();
            $table->string('year')->nullable();
            $table->string('prioritet')->nullable();
            $table->string('bs_v_efire')->nullable();
            $table->string('zakaz_R1_num')->nullable();
            $table->string('zakaz_R1_data_nachala')->nullable();
            $table->string('zakaz_R1_data_okonchaniia_zakaza')->nullable();
            $table->text('zakaz_R1_data_kommentarii')->nullable();
            $table->string('ID_OTR_polucheny_data')->nullable();
            $table->text('ID_OTR_polucheny_data_kommentarii')->nullable();
            $table->string('fotootchet_poluchen_data')->nullable();
            $table->text('fotootchet_poluchen_data_kommentarii')->nullable();
            $table->text('dogovor_arendy_poluchen_kommentarii')->nullable();
            $table->string('dannye_SO_data_zaprosa')->nullable();
            $table->string('dannye_SO_otvetstvennost')->nullable();
            $table->string('dannye_SO_polucheny')->nullable();
            $table->text('PSEZ_gotov_voprosy_voznikaiushchie_pri_razrabotke_PSEZ')->nullable();
            $table->string('PSEZ_gotov_planovaia_data')->nullable();
            $table->string('PSEZ_gotov_fakticheskaia_data')->nullable();
            $table->text('PSEZ_gotov_data_kommentarii')->nullable();
            $table->string('PSEZ_gotov_proektirovshchik')->nullable();
            $table->string('PSEZ_peredan_v_OI_planovaia_data')->nullable();
            $table->string('PSEZ_peredan_v_OI_fakticheskaia_data')->nullable();
            $table->text('PSEZ_peredan_v_OI_data_kommentarii')->nullable();
            $table->string('ekspertnoe_zacliuchenie_polucheno_planovaia_data')->nullable();
            $table->string('ekspertnoe_zacliuchenie_polucheno_fakticheskaia_data')->nullable();
            $table->text('ekspertnoe_zacliuchenie_polucheno_data_kommentarii')->nullable();
            $table->string('ekspertnoe_zacliuchenie_peredano_v_RPN_planovaia_data')->nullable();
            $table->string('ekspertnoe_zacliuchenie_peredano_v_RPN_fakticheskaia_data')->nullable();
            $table->text('ekspertnoe_zacliuchenie_peredano_v_RPN_data_kommentarii')->nullable();
            $table->string('R1_gotov_planovaia_data')->nullable();
            $table->string('R1_gotov_fakticheskaia_data')->nullable();
            $table->text('R1_gotov_data_kommentarii')->nullable();
            $table->string('akt_priemki_SP_E1_R1_data')->nullable();
            $table->text('akt_priemki_SP_E1_R1_data_kommentarii')->nullable();
            $table->string('oplata_SP_E1_R1_obshchaia_summa_zakaza_NDS')->nullable();
            $table->string('oplata_SP_E1_R1_avans')->nullable();
            $table->text('oplata_SP_E1_R1_data_kommentarii')->nullable();
            $table->string('oplata_SP_E1_R1_post_oplata')->nullable();
            $table->text('post_oplata_SP_E1_R1_data_kommentarii')->nullable();
            $table->string('zakaz_Р2_num')->nullable();
            $table->string('zakaz_R2_data_nachala')->nullable();
            $table->string('zakaz_R2_data_okonchaniia_zakaza')->nullable();
            $table->text('zakaz_R2_data_kommentarii')->nullable();
            $table->string('zamery_EMI_planovaia_data')->nullable();
            $table->string('zamery_EMI_fakticheskaia_data')->nullable();
            $table->text('zamery_EMI_kommentarii')->nullable();
            $table->string('oformlenie_protokola_planovaia_data')->nullable();
            $table->string('oformlenie_protokola_fakticheskaia_data')->nullable();
            $table->text('oformlenie_protokola_kommentarii')->nullable();
            $table->string('ekspertiza_otpravlena_v_RPN_planovaia_data')->nullable();
            $table->string('ekspertiza_otpravlena_v_RPN_fakticheskaia_data')->nullable();
            $table->text('ekspertiza_otpravlena_v_RPN__data_kommentarii')->nullable();
            $table->string('R2_gotov_planovaia_data')->nullable();
            $table->string('R2_gotov_fakticheskaia_data')->nullable();
            $table->text('R2_gotov_data_kommentarii')->nullable();
            $table->string('akt_priemki_E2_R2_data')->nullable();
            $table->text('akt_priemki_E2_R2_data_kommentarii')->nullable();
            $table->string('oplata_Е2_R2_obshchaia_summa_zakaza_NDS')->nullable();
            $table->string('oplata_Е2_R2_avans')->nullable();
            $table->text('oplata_Е2_R2_data_kommentarii')->nullable();
            $table->string('oplata_Е2_R2_post_oplata')->nullable();
            $table->text('post_oplata_Е2_R2_data_kommentarii')->nullable();


            $table->integer('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('roles');
    }
}
