<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
    protected $table = 'job_listing'; // Assuming you have a 'jobs' table in your database
    
    protected $fillable = ['title', 'company', 'location', 'description'];
    
    // public static function all(): array
    // {
    //     // return [
    //     //     [
    //     //         'id' => 1,
    //     //         'title' => 'Software Engineer',
    //     //         'company' => 'Tech Company',
    //     //         'location' => 'New York, NY',
    //     //         'description' => 'Develop and maintain software applications.',
    //     //     ],
    //     //     [
    //     //         'id' => 2,
    //     //         'title' => 'Data Analyst',
    //     //         'company' => 'Data Corp',
    //     //         'location' => 'San Francisco, CA',
    //     //         'description' => 'Analyze data and generate reports.',
    //     //     ],
    //     //     [
    //     //         'id' => 3,
    //     //         'title' => 'Project Manager',
    //     //         'company' => 'Business Solutions',
    //     //         'location' => 'Remote',
    //     //         'description' => 'Manage projects and coordinate teams.',
    //     //     ]
    //     // ];
    // }

    // public static function find(int $id): array
    // {
    //     $job = Arr::first(self::all(), fn($job) => $job['id'] == $id);
        
    //     if(!$job) {
    //         abort(404);
    //     }

    //     return $job;
    // }
}
?>