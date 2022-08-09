<?php

namespace App\Models;

use CodeIgniter\Model;

class tiketModel extends Model
{
    protected $table = 'reservasi';
    protected $primaryKey = 'idreservasi';

    // protected $useAutoIncrement = true;

    // protected $returnType = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['idreservasi', 'reservasi_code', 'reservasi_at', 'price', 'depart', 'status'];

    // protected $useTimestamps = true;

}
