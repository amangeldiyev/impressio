<?php

namespace App\Http\Responses;

use Illuminate\Http\Response;

class ApiResponse extends Response
{
    public function __construct($data = [])
    {
        parent::__construct(['success' => true, 'data' => $data]);
    }
}
