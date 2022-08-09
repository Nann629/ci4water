<?php

namespace App\Models;

use CodeIgniter\Model;

class pesawatModel extends Model
{
    protected $table = 'transportasi';
    protected $primaryKey = 'idtransportasi';

    // protected $useAutoIncrement = true;

    // protected $returnType = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['idtransportasi', 'code', 'description'];

    // protected $useTimestamps = true;

}
