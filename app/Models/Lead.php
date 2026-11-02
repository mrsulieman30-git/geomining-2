<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference', 'company_name', 'contact_person', 'email', 'phone',
        'whatsapp', 'website', 'country', 'source', 'service_interest',
        'estimated_value', 'currency', 'owner_id', 'status', 'notes'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
