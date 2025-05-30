<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PendaftaranLombaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_pendaftaran' => $this->id,
            'user_id' => $this->user_id,
            'lomba_id' => $this->lomba_id,
            'status' => $this->status,
            'catatan' => $this->catatan,
            'lomba' => new LombaResource($this->whenLoaded('lomba')), // Jika ingin memuat relasi lomba
            'user' => new UserResource($this->whenLoaded('user')), // Jika ingin memuat relasi user
        ];
    }
}
