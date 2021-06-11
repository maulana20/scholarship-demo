<?php

namespace App\Http\Controllers\Auth\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Traits\ApiResponser;

class EmailVerificationNotificationController extends Controller
{
    use ApiResponser;
    
    /**
     * Send a new email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return $this->sendResponse(null, 'Email has verified.');
        }

        $request->user()->sendEmailVerificationNotification();

        return $this->sendResponse(null, 'A new verification link has been sent.');
    }
}
