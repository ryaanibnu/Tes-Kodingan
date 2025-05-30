<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LombaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_lomba' => $this->id_lomba,
            'nama_lomba' => $this->nama_lomba,
            'penyelenggara' => $this->penyelenggara,
            'tingkat' => $this->tingkat,
            'tanggal_mulai' => $this->tanggal_mulai->format('Y-m-d'),
            'tanggal_selesai' => $this->tanggal_selesai->format('Y-m-d'),
            'deskripsi' => $this->deskripsi,
            'status' => $this->status,
        ];
    }
}
