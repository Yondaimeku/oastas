<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model {

	//

    protected $table = 'courses';

    protected $fillable = ['description', 'code', 'name', 'school_id'];

}
