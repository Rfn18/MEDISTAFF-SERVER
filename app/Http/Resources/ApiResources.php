<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApiResources extends JsonResource
{
    protected $status;
    protected $message;
    protected $resources;

    public function __construct($status, $message, $resources)
    {
        parent::__construct($resources);
        $this->status = $status;
        $this->message = $message;
    }

    public function toArray($request)
    {
        return [
            'status' => $this->status,
            'message' => $this->message,
            'data' => $this->resource
        ];
    }
}
