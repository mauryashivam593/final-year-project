<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainRoutes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        DB::statement("
            CREATE TABLE `train_routes` (
            `from` varchar(11) NOT NULL DEFAULT '',
            `to` varchar(11) NOT NULL DEFAULT '',
            `route` linestring NOT NULL,
            `hasCrossing` tinyint(1) NOT NULL,
            PRIMARY KEY (`from`,`to`),
            SPATIAL KEY `route_geo` (`route`),
            KEY `hasCrossing` (`hasCrossing`)
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::statement("drop table train_routes;");
    }
}
