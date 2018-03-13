<?php

namespace Zored\Telegram\Entity\Bot\Update\UpdateData;

use JMS\Serializer\Annotation as Serializer;

final class Message
{
    /**
     * @Serializer\Type("integer")
     *
     * @var int
     */
    private $id;

    /**
     * @Serializer\Type("integer")
     *
     * @var int
     */
    private $out;

    /**
     * @Serializer\Type("integer")
     *
     * @var int
     */
    private $in;

    /**
     * @Serializer\Type("integer")
     *
     * @var int
     */
    private $from_id;

    /**
     * @Serializer\Type("integer")
     *
     * @var int
     */
    private $to_id;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getOut(): int
    {
        return $this->out;
    }

    public function setOut(int $out): void
    {
        $this->out = $out;
    }

    public function getIn(): int
    {
        return $this->in;
    }

    public function setIn(int $in): void
    {
        $this->in = $in;
    }

    public function getFromId(): int
    {
        return $this->from_id;
    }

    public function setFromId(int $from_id): void
    {
        $this->from_id = $from_id;
    }

    public function getToId(): int
    {
        return $this->to_id;
    }

    public function setToId(int $to_id): void
    {
        $this->to_id = $to_id;
    }
}
