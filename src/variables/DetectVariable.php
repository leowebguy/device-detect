<?php
/**
 * Craft plugin for detecting devices, OS, bots and more
 *
 * @author     Leo Leoncio
 * @see        https://github.com/leowebguy
 * @copyright  Copyright (c) 2021, leowebguy
 * @license    MIT
 */

namespace leowebguy\devicedetect\variables;

use Detection\Exception\MobileDetectException;
use Detection\MobileDetect;

class DetectVariable
{
    // Properties
    // =========================================================================

    private MobileDetect $deviceDetect;

    // Construct
    // =========================================================================

    public function __construct()
    {
        $this->deviceDetect = new MobileDetect();
    }

    // Devices
    // =========================================================================

    /**
     * @return bool
     * @throws MobileDetectException
     */
    public function isMobile(): bool
    {
        return $this->deviceDetect->isMobile();
    }

    /**
     * @return bool
     * @throws MobileDetectException
     */
    public function isTablet(): bool
    {
        return $this->deviceDetect->isTablet();
    }

    /**
     * @return bool
     */
    public function isiPad(): bool
    {
        return $this->deviceDetect->isiPad();
    }

    /**
     * @return bool
     * @throws MobileDetectException
     */
    public function isPhone(): bool
    {
        return $this->deviceDetect->isMobile() && !$this->deviceDetect->isTablet();
    }

    // OS
    // =========================================================================

    /**
     * @return bool
     */
    public function isiOS(): bool
    {
        return $this->deviceDetect->isiOS();
    }

    /**
     * @return bool
     */
    public function isiPadOS(): bool
    {
        return $this->deviceDetect->isiPadOS();
    }

    /**
     * @return bool
     */
    public function isAndroidOS(): bool
    {
        return $this->deviceDetect->isAndroidOS();
    }

    // Custom
    // =========================================================================

    /**
     * @return string|null
     */
    public function getUserAgent(): ?string
    {
        return $this->deviceDetect->getUserAgent();
    }
}
