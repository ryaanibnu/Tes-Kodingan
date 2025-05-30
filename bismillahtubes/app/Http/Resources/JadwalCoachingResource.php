<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JadwalCoachingResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_jadwal' => $this->id,
            'tanggal_waktu' => $this->tanggal_waktu->format('Y-m-d H:i:s'), // Format tanggal dan waktu
            'jenis' => $this->jenis,
            'status' => $this->status,
            'catatan' => $this->catatan,
            'user' => new UserResource($this->whenLoaded('user')), // Menampilkan relasi dengan user
            'lomba' => new LombaResource($this->whenLoaded('lomba')), // Menampilkan relasi dengan lomba
        ];
    }
}
