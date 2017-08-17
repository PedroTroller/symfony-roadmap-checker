<?php

namespace PedroTroller\SymfonyRoadmapChecker;

use DateTime;
use Symfony\Component\HttpKernel\Kernel;

final class Information
{
    /**
     * @return string
     */
    public function getVersion()
    {
        return Kernel::VERSION;
    }

    /**
     * @return DateTime|null
     */
    public function getEndOfMaintenanceSupport()
    {
        if (intval(Kernel::MAJOR_VERSION) < 3) {
            return null;
        }

        return DateTime::createFromFormat('m/Y', Kernel::END_OF_MAINTENANCE);
    }

    /**
     * @return DateTime|null
     */
    public function getEndOfSecuritySupport()
    {
        if (intval(Kernel::MAJOR_VERSION) < 3) {
            return null;
        }

        return DateTime::createFromFormat('m/Y', Kernel::END_OF_LIFE);
    }

    /**
     * @return bool
     */
    public function isUnderMaintenanceSupport()
    {
        if (null === $date = $this->getEndOfMaintenanceSupport()) {
            return false;
        }

        return $date > new DateTime();
    }

    /**
     * @return bool
     */
    public function isUnderSecuritySupport()
    {
        if (null === $date = $this->getEndOfSecuritySupport()) {
            return false;
        }

        return $date > new DateTime();
    }
}
