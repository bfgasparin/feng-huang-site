<?php

namespace FengHaung;

use Illuminate\Database\Eloquent\Model;

/**
 * Contains the translatable parts of a Modality
 *
 * @author Bruno Gasparin <bfgasparin@gmail.com>
 */
class ModalityTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];
}
