<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function list(Request $request)
    {
        return view('user.list');
    }

    public function testShow(Request $request, $id)
    {
        $uri = $request->path();
        $url = $request->url();
        $fullUrl = $request->fullUrl();

        $httpMethod = $request->method();
        
        if($request->isMethod('get'))
        {
            dump('to jest get');
        }else{
            dump('to nie jest get');
        }

        // http://127.0.0.1:8000/users/test/175?name=Tom&nick=boss
        $all = $request->all();
        // $request - objekt laravela
        $name = $request->input('name');
        $lastName = $request->input('lastName', 'Tumski'); // Tumski jest wartoscia domyslna

        $game = $request->input('games.1.name'); //odwoluje sie do tablicy games.1(1 to jest index w tablicy)
        //po tablicach ruszamy sie za pomoca . games.1.name zwykla tablica wielowymiarowa

        $allQuery = $request->query();
        $bool = $request->boolean('expaired');
        $cookies = $request->cookie();

        dump($cookies);

        //poczytac o metodach request
    }

    public function testStore(Request $request, $id)
    {
        $all = $request->all();
        $allQuery = $request->query();
        if($request->isMethod('post'))
        {
            dump($allQuery);
            dump($all);
        }else if(!$request->isMethod('post')){
            return 'to nie jest post';
        }
    }
}
