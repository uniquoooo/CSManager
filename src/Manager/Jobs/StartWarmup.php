<?php

/*
 * This file is apart of the CSManager project.
 *
 * Copyright (c) 2016 David Cole <david@team-reflex.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the LICENSE file.
 */

namespace Manager\Jobs;

use Manager\Job;

class StartWarmup extends Job
{
    /**
     * Executes the job.
     *
     * @return void
     */
    public function execute()
    {
        $this->rcon->exec('mp_warmuptime 600; mp_warmup_start; mp_warmup_pausetimer 1;');
        $this->handler->initSayReady();
    }
}
