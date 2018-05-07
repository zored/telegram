<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation;

use Zored\Telegram\Implementation\Network\Entity\DataCenter;
use Zored\Telegram\Implementation\Network\Transport\TcpTransport;
use Zored\Telegram\Implementation\Network\Transport\TransportInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\ResPQ;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\ReqPq;

/**
 * Simplest implementation of Telegram interactions ever.
 */
final class BasicTelegramCore implements TelegramCoreInterface
{
    /**
     * @var TransportInterface
     */
    private $transport;

    /**
     * @var DataCenter
     */
    private $dataCenter;

    public function __construct(TransportInterface $transport, DataCenter $dataCenter)
    {
        $this->transport = $transport ?? new TcpTransport();
        $this->dataCenter = $dataCenter ?? DataCenter::createDefault();
    }

    public function connect(): void
    {
        $this->transport->connect($this->dataCenter);
        $this->query($method = (new ReqPq())->setNonce($nonce = '???'));
        $result = $method->getResult();
        if (!$result instanceof ResPQ) {
            throw new \Exception('Wrong result type.');
        }
        $result->getPq();
    }

    public function query($method): void
    {
        // TODO:
        // Method ID is strange string?
        // Serialization: \danog\MadelineProto\TL\TL::serialize_params

        // Method call: \danog\MadelineProto\MTProtoTools\CallHandler::method_call
        // Message ID: \danog\MadelineProto\MTProtoTools\MsgIdHandler::generate_message_id
        // Send req_pq_multi using: \danog\MadelineProto\MTProtoTools\MessageHandler::send_unencrypted_message
        // Parsing: \danog\MadelineProto\MTProtoTools\MessageHandler::recv_message
    }
}
