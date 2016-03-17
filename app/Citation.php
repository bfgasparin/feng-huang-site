<?php

namespace FengHaung;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

/**
 * Represents a Citation
 *
 * @author Bruno Gasparin <bfgasparin@gmail.com>
 */
class Citation extends Model
{
	use Translatable;

	public $translatedAttributes = ['content'];
    protected $fillable = ['imageUrl', 'content'];
}
