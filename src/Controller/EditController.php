<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class EditController {
  public function index() {
    return new Response(
      '<html><body>This is edit page.</body></html>'
    );
  }
}
