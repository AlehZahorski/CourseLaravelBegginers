<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function helloAction(string $name)
    {
        return view('hello', ['name' => $name]);
    }

    public function goodbyeAction(string $name)
    {
        return view('goodbye', ['name' => $name]);
    }

    public function getAction()
    {
        return "jestem get";
    }

    public function postAction()
    {
        return "jestem post";
    }

    public function putAction()
    {
        return "jestem put";
    }

    public function deleteAction()
    {
        return "jestem delete";
    }

    public function patchAction()
    {
        return "jestem patch";
    }

    public function optionsAction()
    {
        return "jestem options";
    }


}
