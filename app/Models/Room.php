<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'site_id', 'cost', 'tenant_id',
    ];

    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id'); 
    }
    public function tenant()
    {
        return $this->belongsTo(User::class, 'tenant_id');
    }
    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'room_id');
    }
}
