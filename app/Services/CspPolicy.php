<?php

namespace App\Services;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

class CspPolicy extends Basic
{
  public function configure()
  {
    parent::configure();

    $this
      ->addDirective(Directive::SCRIPT, [
          'stackpath.bootstrapcdn.com',
          'kit.fontawesome.com',
          'www.google.com',
        ])
      ->addDirective(Directive::STYLE, [
          'www.google.com',
          'fonts.googleapis.com',
        ])
      ->addDirective(Directive::FONT, [
          'fonts.gstatic.com'
      ])
      ->addDirective(Directive::FRAME, [
          'www.google.com',
      ])
      ->addNonceForDirective(Directive::SCRIPT)
      ->addNonceForDirective(Directive::STYLE);
  }
}
