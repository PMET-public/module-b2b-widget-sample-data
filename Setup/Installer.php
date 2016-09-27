<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MagentoEse\B2bWidgetSampleData\Setup;

use Magento\Framework\Setup;

class Installer implements Setup\SampleData\InstallerInterface
{
    /**
     * @var \MagentoEse\B2bWidgetSampleData\Model\CmsBlock
     */
    protected $cmsBlock;

    /**
     * @param \MagentoEse\B2bWidgetSampleData\Model\CmsBlock $cmsBlock
     */
    public function __construct(\MagentoEse\B2bWidgetSampleData\Model\CmsBlock $cmsBlock) {
        $this->cmsBlock = $cmsBlock;
    }

    /**
     * {@inheritdoc}
     */
    public function install()
    {
        $this->cmsBlock->install(
            [
                'MagentoEse_B2bWidgetSampleData::fixtures/cmsblock.csv',
            ]
        );
    }
}
