<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    // Allow mass assignment for these fields
      protected $fillable = ['name', 'email', 'phone', 'service_id', 'date', 'time'];


    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
