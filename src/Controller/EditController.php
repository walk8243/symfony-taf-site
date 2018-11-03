<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class EditController extends AbstractController {
  public function index() {
    return $this->render(
      'edit.twig'
    );
  }
}
