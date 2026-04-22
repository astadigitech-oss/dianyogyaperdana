<?php

namespace App\Trait;

use Illuminate\Database\Eloquent\Model;

trait LimitActiveRecords
{
    /**
     * Ambil jumlah maksimal aktif.
     * Bisa dioverride di model dengan membuat method maxActive()
     */
    protected function getMaxActive(): int
    {
        return 1; // default
    }

    public static function bootLimitActiveRecords()
    {
        static::saving(function (Model $model) {
            if ($model->is_active) {
                // Gunakan getter untuk maxActive
                $maxActive = method_exists($model, 'maxActive') ? $model->maxActive() : 1;

                $activeRecords = $model->newQuery()
                    ->where('is_active', true)
                    ->where('id', '!=', $model->id)
                    ->orderByDesc('created_at')
                    ->get();

                if ($activeRecords->count() >= $maxActive) {
                    $toDeactivate = $activeRecords
                        ->sortBy('created_at')
                        ->take($activeRecords->count() - $maxActive + 1);

                    foreach ($toDeactivate as $record) {
                        $record->is_active = false;
                        $record->save();
                    }
                }
            }
        });
    }
}
