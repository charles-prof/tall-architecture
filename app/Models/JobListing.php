<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'level',
        'type',
        'status',
        'qualification',
        'district',
        'state',
        'categories',
        'tags',
    ];

    /**
     * many to one jobs related to user
     * @todo jobs must be related to recruiter
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * get all states that can be chosen for job location
     * @todo move states and district to their own table and relation
     * @return void
     */
    public static function get_all_job_states()
    {
        return JobListing::pluck('state')->unique();
    }

    public static function get_job_levels()
    {
        return array(
            1 => 'Internship',
            2 => 'Entry Level',
            3 => 'Associate',
            4 => 'Mid-Senior Level',
            5 => 'Senior Level',
            6 => 'Executive',
            7 => 'Manager',
            8 => 'Director',
        );
    }


    public static function get_job_types()
    {
        return array(
            1 => 'Full Time',
            2 => 'Part Time',
            3 => 'Contract',
            4 => 'Internship',
            5 => 'Temporary',
            6 => 'Others',
        );
    }

    public static function get_all_job_status()
    {
        return array(
            'pending' => 'Pending',
            'approved' => 'Approved',
            'rejected' => 'Rejected',
            'expired' => 'Expired',
            'published' => 'Published',
        );
    }

}
