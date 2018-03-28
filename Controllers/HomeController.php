<?php

namespace Inovcorp\Test\Controllers;

class HomeController extends Controller {
    public function index() {
        return view("inovcorp/test::home");
    }
}
