<?php

namespace Massabatic\ALogger\Traits;

use Illuminate\Support\Facades\Log;

trait LogsActivity
{
    public static function bootLogsActivity()
    {
        static::created(function ($model) {
            $model->logActivity('created');
        });

        static::updated(function ($model) {
            $model->logActivity('updated');
        });

        static::deleted(function ($model) {
            $model->logActivity('deleted');
        });
    }

    protected function logActivity($event)
    {
        if (!in_array($event, config('alogger.log_events'))) {
            return;
        }

        \DB::table('activity_logs')->insert([
            'model_type' => get_class($this),
            'model_id' => $this->getKey(),
            'event' => $event,
            'changes' => json_encode($this->getDirty()),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
