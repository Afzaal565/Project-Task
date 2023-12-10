<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\ThisUserData;
use App\Models\User;

class Analysis extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'image', 'short_detail', 'description'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->user_id = auth()->id(); // Generate slug from the name
            // $model->added_by = auth()->user()->f_name." ".auth()->user()->l_name; // Generate slug from the name
        });
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new ThisUserData);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeData(Builder $query): void
    {
        if (!auth()->user()->hasRole('admin')) {
            $query->where('user_id', auth()->id());
        }
    }

    public function getStatusAttribute($value)
    {
        switch ($value) {
            case 1:
                return 'Active';
                break;
            
            default:
                return 'Inactive';
                break;
        }
    }

}
