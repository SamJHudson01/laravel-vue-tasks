<?php
namespace App\Http\Middleware;

use Inertia\Middleware;
use Illuminate\Support\Facades\Log;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'app'; // Ensure this matches your root view file name without the .blade.php extension

    public function __construct()
    {
        Log::info('Inertia root view:', ['rootView' => $this->rootView]);
    }
}

