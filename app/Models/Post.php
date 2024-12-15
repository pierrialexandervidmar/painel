<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * Representa um modelo de postagem no sistema.
 * Esta classe utiliza o Eloquent ORM do Laravel.
 * @author Pierri Alexander Vidmar
 * @since 2024-12-01
 */
class Post extends Model
{
    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array
     */
    protected $fillable = ['category_id', 'title', 'slug', 'content', 'is_published'];

    /**
     * Relacionamento: pertence a uma categoria.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relacionamento: pertence a muitas tags.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}