<?php


namespace Drupal\helloWorld\Controller;

class HelloWorldController {

  public function hello() {

    return array(
                 '#markup'=> 'Sample Markup from Hello world'
           );
  }
}
