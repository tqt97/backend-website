<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    use softDeletes;

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
    private function getEstimateReadingTime(string $content, int $wpm = 200): string
    {

        $wordCount = str_word_count(strip_tags($content));

        $minutes = (int) floor($wordCount / $wpm);
        $seconds = (int) floor($wordCount % $wpm / ($wpm / 60));

        if ($minutes === 0) {
            return $wordCount.' words, '.$seconds.' '.Str::of('second')->plural($seconds).' to reading';
        } else {
            return $wordCount.' words, '.$minutes.' '.Str::of('minute')->plural($minutes).' to reading';
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
        $imageUrl = 'https://via.placeholder.com/640x480.png/';

        $isUrl = str_contains($this->image, 'fake') || $this->image == '';

        //        return $this->thumbnail ? asset('storage/' . $this->thumbnail) : asset('img/default.png');
        return $isUrl ? $imageUrl.str_replace( 'fake', "",$this->image) : asset('storage/'.$this->image);
    }
}
