<?php

namespace App\Enums;

use App\Traits\Enumerable;

class RequestStatuses {

    use Enumerable;

    const PENDING = 0;
    const ASSIGNED = 100;
    const FINISHED = 200;
    const PAID = 201;
    const CANCELED = 400;

}
