<?php

namespace App\Models;

use App\Traits\UuidModel;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use UuidModel;

    protected $appends = ['classname', 'teachername'];

	protected $fillable = [
        'id', 'subject_id', 'major_id', 'teacher_id', 'grade', 'description', 'logo', 'cover'
    ];

    protected $hidden = [
        'id', 'subject_id', 'major_id', 'created_at', 'updated_at', 'pivot'
    ];

    public $incrementing = false;

    public function teacher()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function students()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function subject()
    {
        return $this->belongsTo('App\Models\Subject');
    }

    public function major()
    {
    	return $this->belongsTo('App\Models\Major');
    }

    public function discussions()
    {
        return $this->hasMany('App\Models\Discussion');
    }

    public function getTeacherNameAttribute()
    {
        return $this->teacher->firstname . ' ' . $this->teacher->lastname;
    }
    
    public function getSubjectNameAttribute()
    {
        return $this->subject->name;
    }

    public function getMajorNameAttribute()
    {
        return $this->major->name;
    }

    public function getClassNameAttribute()
    {
        return $this->grade . ' ' . $this->major->name . ' ' . $this->subject->name;
    }

    public function addMembers($users)
    {
        if( is_array($users) ) {
            foreach ($users as $user) {
                return $this->users()->attach($user);
            }
        }

        return $this->users()->attach($users);
    }
}
