<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regzayavki extends Model
{
    protected $fillable = [
        'user_id',
        'email',
        'fio',
        'name',
        'doptel',
        'z_tema',
        'price_id',
        'z_text'
    ];
    public function user()
    {
      return $this->belongsTo('App\User');
    }
    public function price()
  {
    return $this->belongsTo('App\Price');
  }
  public function status()
  {
    return $this->belongsTo('App\Status');
  }
  public function scopeFilter($query, $filters)
    {
        if ($month = $filters['month']) {
            $query->whereMonth('created_at', \Carbon\Carbon::parse($month)->month);
        }
        if ($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }       
    }

    public static function archives()
    {
        $archives = static::selectRaw('year(created_at) year, monthname(created_at) month,
            monthname(created_at) monthRU, count(*) number')
            ->groupBy('year', 'month', 'monthRU')
            ->orderByRaw('min(created_at)')
            ->get();

        return $archives;       
    }

    public function getMonthRUAttribute($month)
    {
        switch ($month) {
            case "January":
                return "Январь";
            case "February":
                return "Февраль";
            case "March":
                return "Март";
            case "April":
                return "Апрель";
            case "May":
                return "Май";
            case "June":
                return "Июнь";
            case "July":
                return "Июль";
            case "August":
                return "Август";
            case "September":
                return "Сентябрь";
            case "October":
                return "Октябрь";   
            case "November":
                return "Ноябрь";
            case "December":
                return "Декабрь";                                   
        }
    }        
}

