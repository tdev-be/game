<?php

namespace FairyGame\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FairyGameUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
