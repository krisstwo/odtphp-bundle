<?php

/**
 * Coffee & Brackets software studio
 * 
 * (c) Mohamed KRISTOU <krisstwo@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Krisstwo\OdtPHPBundle\Tests\Factory;

use Krisstwo\OdtPHPBundle\Factory\OdfFactory;
use Odtphp\Odf;
use PHPUnit\Framework\TestCase;

/**
 * @author Mohamed KRISTOU <krisstwo@gmail.com>
 */
class OdfFactoryTest extends TestCase
{
    public function testFromFilename()
    {
        $odfFactory = new OdfFactory();
        $odfInstance = $odfFactory->fromFilename(__DIR__ . '/test.odt');

        $this->assertInstanceOf(Odf::class, $odfInstance);
    }
}
