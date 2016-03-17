<?php

namespace FengHaung;

use Illuminate\Database\Eloquent\Model;

/**
 * Contains the translatable parts of a Citation
 *
 * @author Bruno Gasparin <bfgasparin@gmail.com>
 */
class CitationTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['content'];

}
