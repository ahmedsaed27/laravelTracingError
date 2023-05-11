<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\SendNotification;
use Exception;

class notifiController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        throw new Exception('error'); // comment it if you want to sent notification to slack
        $user = new User;
        $user->notify(new SendNotification('hi from notification!'));
    }
}
