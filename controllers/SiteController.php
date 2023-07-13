<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    /**
     * @return void
     */
    public function home() {

        $params = [
          'name' => "Dear user"
        ];

        return $this->render('home', $params);

    }

    public function contact()
    {
        return $this->render('contact');
    }

    /**
     * @return string
     */
    public static function handleContact(Request $request)
    {
        $body = $request->getBody();
        return 'Handling submitted data';
    }
}