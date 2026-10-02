<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $guarded = ['id'];

    protected function casts(): array
    {
        return ['child_ages' => 'array', 'arrival_date' => 'date', 'departure_date' => 'date', 'notified_at' => 'datetime'];
    }

    public function mailData(): array
    {
        return [...$this->only(['name', 'email', 'telephone', 'contact_preference', 'adults', 'children', 'child_ages', 'message']),
            'arrival_date' => $this->arrival_date?->format('Y-m-d'),
            'departure_date' => $this->departure_date?->format('Y-m-d')];
    }
}
