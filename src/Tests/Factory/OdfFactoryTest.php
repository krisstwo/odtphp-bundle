<?php
namespace Krisstwo\OdtPHPBundle\Tests\Factory;

use Krisstwo\OdtPHPBundle\Factory\OdfFactory;
use Odtphp\Odf;
use PHPUnit\Framework\TestCase;

class OdfFactoryTest extends TestCase
{
    public function testFromFilename()
    {
        $odfFactory = new OdfFactory();
        $odfInstance = $odfFactory->fromFilename(__DIR__ . '/test.odt');

        $this->assertInstanceOf(Odf::class, $odfInstance);
    }
}