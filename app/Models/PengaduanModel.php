<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model
{
    protected $table = 'pengaduan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'kategori', 'deskripsi', 'gambar', 'created_at', 'status', 'balasan'];

    protected $useTimestamps = false;
}
