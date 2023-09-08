<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = "vendedores";
    protected $fillable = ['nome', 'email'];

    public function calcularComissao() {
        return $this->vendas->sum('valor') * (8.5 / 100); //Comissão fixa
    }
    use HasFactory;
}
