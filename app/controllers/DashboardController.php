<?php

namespace Animal\Controllers;

use Animal\Models\Loss;
use Tecgdcs\Response;
use Tecgdcs\View;

class DashboardController
{

    public function __construct()
    {
        if (!isset($_SESSION['user'])) {
            Response::abort(Response::UNAUTHORIZED);
        }
    }

    public function index(): void
    {
        $losses = Loss::all();
        View::make('dashboard.index', compact('losses'));
    }
}
