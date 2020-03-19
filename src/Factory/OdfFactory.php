<?php

/**
 * Coffee & Brackets software studio
 * 
 * (c) Mohamed KRISTOU <krisstwo@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Krisstwo\OdtPHPBundle\Factory;

use Odtphp\Exceptions\OdfException;
use Odtphp\Odf;

/**
 * A factory for getting Odf instances on demand
 *
 * @author Mohamed KRISTOU <krisstwo@gmail.com>
 */
class OdfFactory
{
    /**
     * Creates an Odf instance from the passed filename
     *
     * @param string $filename
     *
     * @return Odf
     *
     * @throws OdfException
     */
    public function fromFilename($filename, $config = []): Odf
    {
        return new Odf($filename, $config);
    }
}
