<?php

/*
 * This file is part of Prokerala Astrology API PHP SDK
 *
 * © Ennexa Technologies <info@ennexa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Prokerala\Api\Astrology\Result\Element;

use Prokerala\Api\Astrology\Traits\StringableTrait;

class Rasi
{
    use StringableTrait;


    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var Lord
     */
    private $lord;

    /**
     * Rasi constructor.
     * @param int $id
     * @param string $name
     * @param Lord $lord
     */
    public function __construct($id, $name, Lord $lord)
    {


        $this->id = $id;
        $this->name = $name;
        $this->lord = $lord;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Lord
     */
    public function getLord()
    {
        return $this->lord;
    }




}
