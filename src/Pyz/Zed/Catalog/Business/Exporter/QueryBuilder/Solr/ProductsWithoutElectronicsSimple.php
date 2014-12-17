<?php
namespace Pyz\Zed\Catalog\Business\Exporter\QueryBuilder\Solr;

use ProjectA\Zed\Catalog\Business\Exporter\QueryBuilder\Solr;
use Pyz\Shared\Catalog\Code\ProductAttributeSetConstantInterface;

/**
 * Class ProductsWithoutElectronicsSimple
 * @package Pyz\Zed\Catalog\Business\Exporter\QueryBuilder\Solr
 */
class ProductsWithoutElectronicsSimple extends Solr implements
    ProductAttributeSetConstantInterface
{
    public function getAttributeSetName()
    {
        return self::ATTRIBUTESET_PRODUCTS_WITHOUT_ELECTRONICS_SIMPLE;
    }
}