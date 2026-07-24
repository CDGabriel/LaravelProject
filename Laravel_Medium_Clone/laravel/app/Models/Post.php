<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class Post extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasSlug;
    protected $fillable = [
        // "image",
        "title",
        "slug",
        "content",
        "category_id",
        "user_id",
        "published_at",
    ];

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion("preview")->width(400)->nonQueued();
        $this->addMediaConversion("large")
            ->width(1200);
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaConversion('default')->singleFile();
    }

public function getSlugOptions() : SlugOptions{
    return SlugOptions::create()->generateSlugsFrom('title')->saveSlugsTo('slug');
}

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function claps()
    {
        return $this->hasMany(Clap::class);
    }
    public function readTime()
    {
        $wordCount = str_word_count(strip_tags($this->content));
        $minutes = ceil($wordCount / 150);
        return max(1, $minutes);
    }
public function getCreatedAt(){
    return $this->created_at->format("M d,Y");
}

   public function imageUrl($conversionName = '')
{
    $media = $this->getFirstMedia('default');

    if (! $media) {
        return null; 
    }

    if ($conversionName && $media->hasGeneratedConversion($conversionName)) {
        return $media->getUrl($conversionName);
    }

    return $media->getUrl();
}
}
