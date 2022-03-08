<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class ScreenController extends BaseController
{
    public function __construct()
    {

    }

    public function renderHomeScreen() {
        return view('index');
    }

    public function redirectToHomeAdmin() {
        return redirect('/admin/FD10');
    }

    public function renderScreen($screen) {
        return view($screen);
    }

    public function renderScreenWithSubFolder($folder, $screen) {
        return view($folder . '.' . $screen);
    }

    public function renderScreenWithMultipleSubFolder($folder1, $folder2, $screen) {
        return view($folder1 . '.' .  $folder2 . '.' . $screen);
    }
}
