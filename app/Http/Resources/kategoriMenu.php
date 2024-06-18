<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class kategoriMenu extends JsonResource {

    public $responCode;
    public $message;
    public $resource;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public function __construct($responCode, $message, $resource) {
        parent::__construct($resource);
        $this->responCode  = $responCode;
        $this->message = $message;
    }

    public function toArray(Request $request): array {
        return [
            'responCode'   => $this->responCode,
            'message'   => $this->message,
            'data'      => $this->resource
        ];
    }
}
