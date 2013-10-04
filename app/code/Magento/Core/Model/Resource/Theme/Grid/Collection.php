<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Magento
 * @package     Magento_Core
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Theme grid collection
 */
namespace Magento\Core\Model\Resource\Theme\Grid;

class Collection extends \Magento\Core\Model\Resource\Theme\Collection
{
    /**
     * Add area filter
     *
     * @return \Magento\Core\Model\Resource\Db\Collection\AbstractCollection|
     *  \Magento\Core\Model\Resource\Theme\Grid\Collection
     */
    protected function _initSelect()
    {
        parent::_initSelect();
        $this->filterVisibleThemes()->addAreaFilter(\Magento\Core\Model\App\Area::AREA_FRONTEND)->addParentTitle();
        return $this;
    }
}