<?php

namespace Massabatic\ALogger\Models;

use Illuminate\Database\Eloquent\Model;
use Massabatic\ALogger\Queries\LogQuery;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ActivityLog extends Model
{
    use HasFactory;

    protected $table = 'activity_logs';

     protected $guarded = [];

    //  public function newQuery()
    //  {
    //     return new \Massabatic\ALogger\Queries\LogQuery(parent::newQuery());
    //  }
}
