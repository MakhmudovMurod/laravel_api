<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Traits\Pagination\Pager;


class Product extends Model
{
    use HasFactory;
    use Pager;

    protected $table = 'products';

    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'photo',
        'description',
        'price',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'category_id' => 'integer',
        'name' => 'string',
        'photo' => 'string',
        'description' => 'string',
        'price' => 'double',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    public function scopeFindBy(Builder $query, string $key, string $value = null): Builder
    {
        return $query->where($key, '=', $value);
    }


    public function scopeFilter(Builder $query, array $filters): Builder
    {
        return $query->when($filters['search'] ?? null, function (Builder $query, string $search) {
            return $query->where(function (Builder $query) use ($search) {
                return $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
            });
        })->when($filters['name'] ?? null, function (Builder $query, string $name) {
            return $query->where('name', 'like', '%'.$name.'%');
        })->when($filters['description'] ?? null, function (Builder $query, string $description) {
            return $query->where('description', 'like', '%'.$description.'%');
        })->when($filters['price'] ?? null, function (Builder $query, float $price) {
            return $query->where('price', 'like', '%'.$price.'%');
        });
    }
    





}
