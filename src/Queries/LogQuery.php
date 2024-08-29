<?php

namespace Massabatic\ALogger\Queries;

use Illuminate\Database\Eloquent\Builder;

class LogQuery extends Builder
{
    public function whereModelType($modelType)
    {
        return $this->where('model_type', $modelType);
    }

    public function whereEventType($eventType)
    {
        return $this->where('event', $eventType);
    }

    public function whereDateRange($startDate, $endDate)
    {
        return $this->whereBetween('created_at', [$startDate, $endDate]);
    }

    public function get()
    {
        return $this->get();
    }
}
