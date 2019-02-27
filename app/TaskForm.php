<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskForm extends Model
{
    protected $fillable = [
    	'task_type_id', 'company', 'contact_id', 'objective', 'user_id', 'due_date', 'due_time', 'remind_date', 'remind_time', 'priority_id', 
    ];

    public function taskType()
    {
    	return $this->belongsTo('App\TaskType');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

    public function priority()
    {
        return $this->belongsTo('App\Priority');
    }
}
