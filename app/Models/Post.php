<?php

namespace App\Models;

use Illuminate\Support\Str;
// use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    use softDeletes;
    // use Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'image',
        'excerpt',
        'content',
        'featured',
        'published_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'featured' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'post_like')->withTimestamps();
    }

    public function scopePublished(Builder $query): void
    {
        // $query->whereNotNull('published_at');
        $query->where('published_at', '<=', now());
    }

    public function scopeFeatured(Builder $query): void
    {
        $query->where('featured', true);
    }

    public function scopeSearch(Builder $query, string $search = ''): void
    {
        $query->where('title', 'like', '%'.$search.'%');
    }

    public function scopePopular(Builder $query): void
    {
        $query->withCount('likes')->orderBy('likes_count', 'desc');
    }

    public function scopeWithCategory(Builder $query, string $category): void
    {
        $query->whereHas('categories', function ($q) use ($category) {
            $q->where('slug', $category);
        });
    }

    public function publishedDiffForHumans()
    {
        return $this->published_at->diffForHumans();
    }

    /**
     * Returns an estimated reading time in a string
     *
     * @param  string  $content the content to be read
     * @return string estimated read time e.g 1 minute, 30 seconds
     **/
    private function getEstimateReadingTime(string $content, int $wpm = 50): string
    {

        $wordCount = str_word_count(strip_tags($content));

        $minutes = (int) floor($wordCount / $wpm);
        $seconds = (int) floor($wordCount % $wpm / ($wpm / 60));

        $plural_of_second = Str::of('second')->plural($seconds);
        $plural_of_minute = Str::of('minute')->plural($minutes);

        if ($minutes <= 1) {
            // return $wordCount.' words, '.$seconds.' '.$plural_of_second;

            return __('frontend/layout.about_minutes');
        } else {
            // return $wordCount.' words, '.$minutes.' '.$plural_of_minute.' '.$seconds.' '.$plural_of_second;
            return __('frontend/layout.reading_time', ['minutes' => $minutes, 'seconds' => $seconds]);
        }
    }

    protected function timeToRead(): Attribute
    {
        return Attribute::make(
            get: function ($value, $attributes) {
                return $this->getEstimateReadingTime($attributes['content']);
            }
        );
    }

    public function getExcerpt(): string
    {
        return Str::limit(strip_tags($this->content), 100, '...');
    }

    public function getThumbnail(): string
    {
        // $imageUrl = 'https://via.placeholder.com/640x480.png/';

        // $isUrl = str_contains($this->image, 'fake') || $this->image == '';

        if($this->image == '' || str_contains($this->image, 'fake')){
            $imageUrl = asset('images/no-image-640-480.webp');
        }else{
            $imageUrl = asset('storage/'.$this->image);
        }

        //        return $this->thumbnail ? asset('storage/' . $this->thumbnail) : asset('img/default.png');
        // return $isUrl ? $imageUrl.str_replace( 'fake', "",$this->image) : asset('storage/'.$this->image);
        return $imageUrl;
    }
}
