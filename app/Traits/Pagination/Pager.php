<?php

namespace App\Traits\Pagination;

use Illuminate\Database\Eloquent\Builder;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

/**
 * Trait pager for pagination collections
 *
 * @method static LengthAwarePaginator pager(Builder $query, int $size)
 */
trait Pager
{
    /**
     * Pager method
     *
     * @param Builder $query
     *
     * @param int $size
     *
     * @return LengthAwarePaginator
     */
    public function scopePager(Builder $query,int $size = 0): LengthAwarePaginator
    {
        return $query->paginate(request()->get('page_size') ?? $size ?? config('app.page_size'));
    }
}