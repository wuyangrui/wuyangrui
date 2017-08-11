<?php

namespace App\Services;

use App\Contracts\TestContract;

class TestService implements TestContract
{
	public $user;
    public function callMe($controller)
    {
        dd('Call Me From TestServiceProvider In '.$controller);
    }
}