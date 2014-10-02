<?php

namespace BiberLtd\Bundle\PdfBundle;
use BiberLtd\Bundle\PdfBundle\DependencyInjection\AutoLoad;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class BiberLtdPdfBundle extends Bundle

{
    /**
     * {@inheritDoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new AutoLoad\LoadRouters());
    }
}
