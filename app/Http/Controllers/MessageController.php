<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use function PHPUnit\Framework\returnArgument;

class MessageController extends Controller
{
    public function Message() :RedirectResponse
    {
        return Redirect('MessageView');
    }
}
