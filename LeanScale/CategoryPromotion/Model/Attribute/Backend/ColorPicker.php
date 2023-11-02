<?php

namespace LeanScale\CategoryPromotion\Model\Attribute\Backend;

class ColorPicker extends \Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend
{
	/**
	 * @param $object
	 * @return mixed
	 */
	public function beforeSave($object) {
		$attributeName = $this->getAttribute()->getName();

		if ($object->getData($attributeName) && !preg_match('/^#[a-f0-9]{6}$/i', $object->getData($attributeName))) {
			throw new \Magento\Framework\Exception\LocalizedException(__('Invalid color'));
		}

		return $this;
	}
}
