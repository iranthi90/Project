<?php
/**
 * Created by PhpStorm.
 * User: IraNthi
 * Date: 5/28/2019
 * Time: 12:44 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = [
        'email', 'address', 'telephone', 'fax', 'fb','twit','youtube','commis','tax','flat_ship'
    ];
}