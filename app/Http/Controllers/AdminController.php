<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard');
    }

    public function login(): View
    {
        return view('admin.login');
    }

    public function formElements(): View
    {
        return view('admin.form-elements');
    }

    public function tablePlugins(): View
    {
        return view('admin.table-plugins');
    }

    public function calendar(): View
    {
        return view('admin.calendar');
    }

    public function modalNotification(): View
    {
        return view('admin.modal-notification');
    }
}
