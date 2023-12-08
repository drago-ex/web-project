<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette\Bridges\ApplicationLatte\Template;


class Error4xxTemplate extends Template
{
	public mixed $httpCode;
}
