<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketsCompras extends Model
{
    use HasFactory;

    public function ticketscompras(){
        return $this->hasMany(TicketCompras::class);
    }

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
}
