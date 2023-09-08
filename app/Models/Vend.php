<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vend extends Model
{
    protected $table = "vendas";

    protected $fillable = ['vendedor_id','valor','data'];

    public function Vendedor() {
        return $this->belongsTo((Vendedor::class));
    }

    public function calcularComissaoFixa($valorVenda) {
        return $valorVenda * (8.5 / 100);
    }

    use HasFactory;
}
