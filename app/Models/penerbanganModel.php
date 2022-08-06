<?php

namespace App\Models;

use CodeIgniter\Model;

class penerbanganModel extends Model
{
    protected $table = 'rute';
    protected $primaryKey = 'idrute';

    // protected $useAutoIncrement = true;

    // protected $returnType = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['depart', 'rute_from', 'rute_to', 'price', 'id_trans'];

    // protected $useTimestamps = true;

}
