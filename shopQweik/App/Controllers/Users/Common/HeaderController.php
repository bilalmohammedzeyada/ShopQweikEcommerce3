<?php

namespace App\Controllers\Users\Common;

use System\Controller;

class HeaderController extends Controller
{
    public function index()
    {
        $data['title'] = $this->html->getTitle();

        $data['seller'] = $this->load->model('Loginseller')->user();

        return $this->view->render('users/common/header', $data);
    }
}