<?php

namespace FengHaung;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

/**
 * Represents a Kung Fu Modality
 *
 * @author Bruno Gasparin <bfgasparin@gmail.com>
 */
class Modality extends Model
{
	use Translatable;
	
	public $translatedAttributes = ['name', 'summary'];
    protected $fillable = ['imageUrl', 'name', 'summary'];
}
