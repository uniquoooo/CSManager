<?php

/*
 * This file is apart of the CSManager project.
 *
 * Copyright (c) 2016 David Cole <david@team-reflex.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the LICENSE file.
 */

namespace Manager\Migrations;

class RoundEvents
{
    /**
     * Runs the migrations.
     *
     * @param Blueprint $table
     *
     * @return void
     */
    public function up($table)
    {
        $table->increments('id');

        $table->integer('map_id')->unsigned();
        $table->foreign('map_id')->references('id')
                                 ->on('maps')
                                 ->onDelete('cascade');

        $table->integer('current_round');

        $table->string('type');
        $table->json('data');

        $table->timestamps();
    }
}
