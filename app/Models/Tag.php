<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 *
 * Representa um modelo de tag no sistema.
 * Esta classe utiliza o Eloquent ORM do Laravel.
 * @author Pierri Alexander Vidmar
 * @since 2024-12-01
 */
class Tag extends Model
{
    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug'];

    /**
     * Relacionamento: pertence a muitos posts.
     *
     * Uma tag pode estar associada a vários posts.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}