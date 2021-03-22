<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prenom');
            $table->string('nom_de_famille');
            $table->integer('company_id')->unsigned();
            $table->string('email')->unique();
            $table->string('telephone');
            $table->timestamps();
            $table->foreign('company_id')
                  ->references('id')
                  ->on('company')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employe', function(Blueprint $table) {
            $table->dropForeign('employe_company_id_foreign');
        });
        Schema::drop('employe');
    }
}
