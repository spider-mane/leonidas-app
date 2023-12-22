<?php

namespace App\Bootstrap;

use Leonidas\Contracts\Extension\ExtensionBootProcessInterface;
use Leonidas\Framework\Bootstrap\Abstracts\AbstractModelRegistrar;

class RegisterModelServices extends AbstractModelRegistrar implements ExtensionBootProcessInterface
{
    protected const CONTRACTS = 'App\Contracts\Models';
}
