<?php

class WelcomeController extends BaseController {



    public function testHello(){

    return View::make('welcome/testHello')
        ->with(array('hi'=>'||i am zahid ||',
            'hello'=>'||hello||',
            'anExampleArrayKey'=>'Hello laravel'));
}

}
