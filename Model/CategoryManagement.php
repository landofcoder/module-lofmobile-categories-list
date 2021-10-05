<?php

namespace Lofmobile\CategoriesList\Model;
use Lofmobile\CategoriesList\Api\CategoryManagementInterface;
use Lofmobile\CategoriesList\Model\Category\Tree;

class CategoryManagement extends \Magento\Catalog\Model\CategoryManagement
    implements CategoryManagementInterface
{
    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * @var Tree
     */
    protected $categoryTree;

    /**
     * @var \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory
     */
    private $categoriesFactory;

    /**
     * @param \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository
     * @param Tree $categoryTree
     * @param \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoriesFactory
     */
    public function __construct(
        \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository,
        Tree $categoryTree,
        \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoriesFactory
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->categoryTree = $categoryTree;
        $this->categoriesFactory = $categoriesFactory;
    }


}