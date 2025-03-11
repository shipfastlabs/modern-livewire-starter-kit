<?php

declare(strict_types=1);

namespace App\Livewire\Actions;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

final class Logout
{
    /**
     * Log the current user out of the application.
     */
    public function __invoke(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector // @phpstan-ignore return.unusedType
    {
        Auth::guard('web')->logout();

        Session::invalidate();
        Session::regenerateToken();

        return redirect('/');
    }
}
