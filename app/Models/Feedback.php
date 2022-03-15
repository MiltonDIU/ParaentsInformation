<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'feedbacks';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'feedback_category_id',
        'content',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function feedback_category()
    {
        return $this->belongsTo(FeedbackCategory::class, 'feedback_category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public static function feedbackCategories(){
        $categories = FeedbackCategory::where('is_active','1')->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');
        return $categories;
    }
}
