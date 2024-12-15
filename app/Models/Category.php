<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * Representa um modelo de categoria no sistema.
 * Esta classe utiliza o Eloquent ORM do Laravel.
 */
class Category extends Model
{
    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array
     * @author Pierri Alexander Vidmar
     * @since 2024-12-01
     */
    protected $fillable = ['name', 'slug'];

    /**
     * Relacionamento: possui muitos posts.
     *
     * Uma categoria pode estar associada a vários posts.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
