<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EditController extends AbstractController {
  public function index() {
    return $this->render(
      'edit.twig'
    );
  }
}
