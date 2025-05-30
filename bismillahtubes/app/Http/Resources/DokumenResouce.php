<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DokumenResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'dokumen_id' => $this->dokumenid,
            'nama_dokumen' => $this->namaFile,
            'jenis_dokumen' => $this->jenisdokumen,
            'status_verifikasi' => $this->statusVerifikasi,
            'catatan' => $this->catatan,
            'file_path' => $this->filepath,
            'lomba' => new LombaResource($this->lomba), // Relasi dengan Lomba
        ];
    }
}
