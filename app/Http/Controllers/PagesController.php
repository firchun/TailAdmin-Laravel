<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
        ] ;
        return view('pages.dashboard', $data);
    }
    public function calendar()
    {
        $data = [
            'title' => 'Calendar',
        ] ;
        return view('pages.calendar', $data);
    }
    public function alerts()
    {
        $data = [
            'title' => 'Alerts',
        ] ;
        return view('pages.alerts', $data);
    }
    public function buttons()
    {
        $data = [
            'title' => 'Buttons',
        ] ;
        return view('pages.buttons', $data);
    }
    public function chart()
    {
        $data = [
            'title' => 'charts',
        ] ;
        return view('pages.chart', $data);
    }
    public function form_elements()
    {
        $data = [
            'title' => 'form elements',
        ] ;
        return view('pages.form-elements', $data);
    }
    public function form_layout()
    {
        $data = [
            'title' => 'form layout',
        ] ;
        return view('pages.form-layout', $data);
    }
    public function profile()
    {
        $data = [
            'title' => 'profile',
        ] ;
        return view('pages.profile', $data);
    }
    public function settings()
    {
        $data = [
            'title' => 'Settings',
        ] ;
        return view('pages.settings', $data);
    }
    public function tables()
    {
        $data = [
            'title' => 'Tables',
        ] ;
        return view('pages.tables', $data);
    }
}
