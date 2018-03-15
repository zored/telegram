<?php

declare(strict_types=1);

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

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $message;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getOut(): int
    {
        return $this->out;
    }

    public function setOut(int $out): self
    {
        $this->out = $out;

        return $this;
    }

    public function getIn(): int
    {
        return $this->in;
    }

    public function setIn(int $in): self
    {
        $this->in = $in;

        return $this;
    }

    public function getFromId(): int
    {
        return $this->from_id;
    }

    public function setFromId(int $from_id): self
    {
        $this->from_id = $from_id;

        return $this;
    }

    public function getToId(): int
    {
        return $this->to_id;
    }

    public function setToId(int $to_id): self
    {
        $this->to_id = $to_id;

        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
