<?php
namespace LeanScale\CategoryPromotion\Setup;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface {
	/**
	 * @var mixed
	 */
	private $eavSetupFactory;

	/**
	 * @param EavSetupFactory $eavSetupFactory
	 */
	public function __construct(EavSetupFactory $eavSetupFactory) {
		$this->eavSetupFactory = $eavSetupFactory;
	}

	/**
	 * @param ModuleDataSetupInterface $setup
	 * @param ModuleContextInterface $context
	 */
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context) {
		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Category::ENTITY,
			'title',
			[
				'type' => 'text',
				'group' => 'Promotion',
				'backend' => '',
				'frontend' => '',
				'label' => 'Title',
				'input' => 'text',
				'class' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
				'visible' => true,
				'required' => false,
				'user_defined' => true,
				'default' => null,
			]
		);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Category::ENTITY,
			'subtitle',
			[
				'type' => 'text',
				'group' => 'Promotion',
				'backend' => '',
				'frontend' => '',
				'label' => 'Subtitle',
				'input' => 'text',
				'class' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
				'visible' => true,
				'required' => false,
				'user_defined' => true,
				'default' => null,
			]
		);

		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Category::ENTITY,
			'action_url',
			[
				'type' => 'text',
				'group' => 'Promotion',
				'backend' => '',
				'frontend' => '',
				'label' => 'Action Url',
				'input' => 'text',
				'class' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
				'visible' => true,
				'required' => false,
				'user_defined' => true,
				'default' => null,
			]
		);

		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Category::ENTITY,
			'action_title',
			[
				'type' => 'text',
				'group' => 'Promotion',
				'backend' => '',
				'frontend' => '',
				'label' => 'Action Title',
				'input' => 'text',
				'class' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
				'visible' => true,
				'required' => false,
				'user_defined' => true,
				'default' => null,
			]
		);

		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Category::ENTITY,
			'promo_type',
			[
				'type' => 'text',
				'group' => 'Promotion',
				'backend' => '',
				'frontend' => '',
				'label' => 'Promo Type',
				'input' => 'text',
				'class' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
				'visible' => true,
				'required' => false,
				'user_defined' => true,
				'default' => null,
			]
		);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Category::ENTITY,
			'bg_color',
			[
				'type' => 'text',
				'group' => 'Promotion',
				'backend' => '',
				'frontend' => '',
				'label' => 'BG Color',
				'input' => 'text',
				'class' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
				'visible' => true,
				'required' => false,
				'user_defined' => true,
				'default' => null,
			]
		);

		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Category::ENTITY,
			'text_color',
			[
				'type' => 'text',
				'group' => 'Promotion',
				'backend' => '',
				'frontend' => '',
				'label' => 'Text Color',
				'input' => 'text',
				'class' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
				'visible' => true,
				'required' => false,
				'user_defined' => true,
				'default' => null,
			]
		);

	}
}