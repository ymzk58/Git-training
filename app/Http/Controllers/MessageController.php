<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;

class MessageController extends Controller
{
    public function message():View
    {
        return View("MessageView");
    }
}
