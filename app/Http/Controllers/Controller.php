<?php

namespace App\Http\Controllers;

use App\Http\traits\PaginatorTrait;
use App\Http\Traits\WebServiceResponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use PaginatorTrait, WebServiceResponse;
}
