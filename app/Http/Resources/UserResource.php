<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'ID' => $this->id,
            'Name' => $this->name,
            'E-mail' => $this->email,
            'Role' => $this->role,
        ];
    }
}
