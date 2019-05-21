<?php

namespace App\Controllers\Users\Common;

use System\Controller;
use System\View\ViewInterface;

class LayoutController extends Controller
{
    /**
    * Render the layout with the given view Object
    *
    * @param \System\View\ViewInterface $view
    */
    public function render(ViewInterface $view)
    {
        $data['content'] = $view;
        $data['header'] = $this->load->controller('Users/Common/Header')->index();
        $data['sidebar'] = $this->load->controller('Users/Common/Sidebar')->index();
        $data['footer'] = $this->load->controller('Users/Common/Footer')->index();

        return $this->view->render('users/common/layout', $data);
    }
}