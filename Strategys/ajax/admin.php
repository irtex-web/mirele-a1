<?php

namespace Mirele\Framework\Strategists;

use Mirele\Compound\Response;
use Mirele\Framework\Strategy;

class __strategy_admin extends Strategy {

    /**
     * @handler
     */
   protected function handler (array $data)
   {
       if (is_user_logged_in() and current_user_can(MIRELE_RIGHTS['page']['edit'])) {
           return true;
       } else {
           return false;
       }
   }

}