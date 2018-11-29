<?php

namespace App\Advertisers;
use App\AccountManager;
use Illuminate\Database\Eloquent\Model;
use Carbon;

class Advertiser extends Model
{
    protected $table = 'advertiser';
    protected $primaryKey = 'advertiserid';
    protected $guarded = ['advertiserid'];

    public function account()
    {
       return $this->belongsTo(AccountManager::class, 'accountmanagerid', 'accountmanagerid');
    }
    public function getCreatedAtAttribute($date)
    {
        if(Auth::check())
            return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->copy()->tz(Auth::user()->timezone)->format('F j, Y @ g:i A');
        else
            return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->copy()->tz('America/Toronto')->format('F j, Y @ g:i A');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('F j, Y @ g:i A');
    }
}
