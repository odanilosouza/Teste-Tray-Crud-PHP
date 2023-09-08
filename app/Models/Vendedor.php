<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = "vendedores";
    protected $fillable = ['nome', 'email'];

    public function vendas() {
        return $this->hasMany(Vend::class, 'vendedor_id');
    }

    use HasFactory;
}
