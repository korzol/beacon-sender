<?php
declare(strict_types=1);

namespace Plugins\NavigationTimings\Metrics;

use \Plugins\AbstractMetrics;

class NtResSt extends AbstractMetrics
{
    public function generate(): int
    {
        return $this->startTime + 434;
    }
}
