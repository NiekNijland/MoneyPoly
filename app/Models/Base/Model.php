<?php

namespace App\Models\Base;

use Jenssegers\Mongodb\Eloquent\Model as MongodbModel;

/**
 * @property-read string $id
 * @property-read string $_id
 * @method static create(array $array)
 * @method static updateOrCreate(array $filters, array $values)
 * @method static insert(mixed $data)
 * @method static find(string $id)
 * @method static findOrFail(string $id)
 * @method static where(... $params)
 * @method static whereIn(string $column, array $values)
 * @method static whereNotIn(string $column, array $values)
 * @method static whereBetween(string $column, array $values)
 * @method static select(array $array)
 * @method static count()
 * @method static first()
 * @method static firstOrFail()
 * @method static truncate()
 * @method bool trashed()
 * @method static make(array $attributes)
 * @method static with(mixed $relations)
 */
class Model extends MongodbModel { }

