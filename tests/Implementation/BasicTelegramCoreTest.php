<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Implementation;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Implementation\BasicTelegramCore;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Contacts\Contacts;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Contacts\GetContacts;

final class BasicTelegramCoreTest extends TestCase
{
    /**
     * @var BasicTelegramCore
     */
    private $telegram;

    public function testQuery(): void
    {
        $this->telegram->query($request = (new GetContacts())->setHash('0'));

        $this->assertInstanceOf(Contacts::class, $request->getResult());
    }

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->telegram = new BasicTelegramCore();
    }
}
