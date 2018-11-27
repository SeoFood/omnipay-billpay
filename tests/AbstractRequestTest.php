<?php

namespace Omnipay\BillPay;

use Mockery;
use Omnipay\BillPay\Message\AbstractRequest;
use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Common\Message\MessageInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractRequestTest
 *
 * @package   Omnipay\BillPay
 * @author    Andreas Lange <andreas.lange@connox.de>
 * @copyright 2016, Connox GmbH
 * @license   MIT
 */
class AbstractRequestTest extends TestCase
{
    public function testDefectXmlSend()
    {
        $mock = Mockery::mock(AbstractRequest::class, MessageInterface::class)->makePartial();
        $mock->shouldReceive('getData')->andReturn(null);

        self::expectException(InvalidRequestException::class);

        /** @var AbstractRequest $mock */
        $mock->send();
    }
}
