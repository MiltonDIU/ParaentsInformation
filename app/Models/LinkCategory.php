<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class LinkCategory extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;
    use HasFactory;

    public const IS_ACTIVE_RADIO = [
        '1' => 'Yes',
        '0' => 'No',
    ];

    public const IS_UTILITIES_RADIO = [
        '1' => 'Yes',
        '0' => 'No',
    ];

    public const IMAGE_POSITION_SELECT = [
        'left'   => 'Left',
        'right'  => 'Right',
        'center' => 'Center',
    ];

    public const PAGE_NAME_SELECT = [
        'home'     => 'Home',
        'newsfeed' => 'Newsfeed',
        'others'   => 'Others',
    ];

    public $table = 'link_categories';

    protected $appends = [
        'picture',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'slug',
        'content',
        'external_link',
        'external_link_text',
        'position',
        'page_name',
        'image_position',
        'is_utilities',
        'is_active',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function linkCategoryLinks()
    {
        return $this->belongsToMany(Link::class);
    }

    public function getPictureAttribute()
    {
        $file = $this->getMedia('picture')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public static function singleCategory($id,$page,$is_utilities){
        return LinkCategory::where('id',$id)->where('page_name',$page)->where('is_active','1')->where('is_utilities',$is_utilities)->first();
    }
    public static function utilities($page,$is_utilities){
        return LinkCategory::where('page_name',$page)->where('is_active','1')->where('is_utilities',$is_utilities)->get();
    }
}
