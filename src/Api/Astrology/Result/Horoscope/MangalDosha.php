<?php

/*
 * This file is part of Prokerala Astrology API PHP SDK
 *
 * © Ennexa Technologies <info@ennexa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Prokerala\Api\Astrology\Result\Horoscope;

use Prokerala\Api\Astrology\Result\ResultInterface;
use Prokerala\Api\Astrology\Traits\Result\RawResponseTrait;

final class MangalDosha implements ResultInterface
{
    use RawResponseTrait;

    /**
     * @var bool
     */
    private $hasDosha;
    /**
     * @var string
     */
    private $description;

    /**
     * MangalDosha constructor.
     *
     * @param bool   $hasDosha
     * @param string $description
     */
    public function __construct($hasDosha, $description)
    {
        $this->hasDosha = $hasDosha;
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function hasDosha()
    {
        return $this->hasDosha;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return null|\stdClass
     */
    public function getApiResponse()
    {
        return $this->apiResponse;
    }
}
