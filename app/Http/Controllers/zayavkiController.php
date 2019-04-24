<?php
namespace App\Http\Controllers;
use App\Zayavki;
use App\Price;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateZayavkaRequest;

class zayavkiController extends Controller
{
    //
    public function index(){
        $price_list = Price::pluck('title','id')->toArray();
    	return view('zayavki.index')->with(compact('price_list'));
    }
    public function store(CreateZayavkaRequest $request){
        Zayavki::create($request->all());
        Mail::send(['text'=>'mail'],['name','jjjjjj'], function ($message) {
            $message->from('jostroushko@gmail.com', 'Сайт фотографа');
            $message->to((request()->input('email')), (request()->input('fio')));
            $message->subject('заявка принята');
            $message->setContentType('text/html');
        });
        $request->session()->flash('message', 'На ваш адрес было выслано письмо с подтверждением');
        return redirect()->back();
    }
}
