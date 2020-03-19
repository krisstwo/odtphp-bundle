<?php

namespace Krisstwo\OdtPHPBundle\Factory;

use Odtphp\Exceptions\OdfException;
use Odtphp\Odf;

/**
 * A factory for getting Odf instances on demand
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
    public function fromFilename($filename, $config = [])
    {
        return new Odf($filename, $config);
    }
}
