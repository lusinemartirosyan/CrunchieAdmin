<?php

namespace App;
use App\Advertisers\Advertiser;
use App\Publishers\Publisher;
use Illuminate\Database\Eloquent\Model;

class AccountManager extends Model
{
    protected $table = 'accountmanager';
    protected $primaryKey = 'accountmanagerid';

    public function advertisermodel()
    {
        return $this->hasMany(Advertiser::class);
    }
    public function publishermodel()
    {
        return $this->hasMany(Publisher::class);
    }
}
