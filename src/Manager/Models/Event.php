<?php

/*
 * This file is apart of the CSManager project.
 *
 * Copyright (c) 2016 David Cole <david@team-reflex.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the LICENSE file.
 */

namespace Manager\Models;

use Manager\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'subtitle', 'active', 'link', 'description',
    ];

    /**
     * Relationship between multiple matches.
     *
     * @return HasMany
     */
    public function matches()
    {
        return $this->hasMany(Match::class);
    }

    /**
     * Relationship between multiple teams.
     *
     * @return HasMany
     */
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
