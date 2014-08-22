<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */
namespace WellCommerce\Bundle\MediaBundle\Repository;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use WellCommerce\Bundle\CoreBundle\Repository\AbstractEntityRepository;

/**
 * Class MediaRepository
 *
 * @package WellCommerce\Bundle\MediaBundle\Repository
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class MediaRepository extends AbstractEntityRepository implements MediaRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getDataGridQueryBuilder()
    {
        return parent::getQueryBuilder()->groupBy('media.id');
    }

    public function save(UploadedFile $file)
    {
        $media = $this->createNew();
    }

}
