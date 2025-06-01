<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Lead extends Model
{
    protected $fillable = ['fullname', 'mobile', 'email', 'course_id'];

    /**
     * Get the course associated with the lead.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
