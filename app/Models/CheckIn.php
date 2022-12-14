<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
  use HasFactory;
  protected $guarded = [];
  protected $table = 'check_ins';
  public function company()
  {
    return $this->belongsTo(User::class, 'company_id', 'uuid');
  }
  public function department()
  {
    return $this->belongsTo(Department::class, 'department_id', 'uuid');
  }
  public function staff()
  {
    return $this->belongsTo(User::class, 'staff_id', 'uuid');
  }
  public function security()
  {
    return $this->belongsTo(User::class, 'security_id', 'uuid');
  }
}
