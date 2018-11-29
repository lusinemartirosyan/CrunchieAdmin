<?php

namespace App\Publishers;

use Illuminate\Database\Eloquent\Model;
use App\AccountManager;

class Publisher extends Model
{
    protected $table = 'publisher';
    protected $primaryKey = 'publisherid';

    public function account()
    {
        return $this->belongsTo(AccountManager::class, 'accountmanagerid', 'accountmanagerid');
    }
}
