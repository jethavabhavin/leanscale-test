<?php

namespace LeanScale\CategoryPromotion\Model\Attribute\Backend;

class Url extends \Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend
{
	/**
	 * @param $object
	 * @return mixed
	 */
	public function beforeSave($object) {
		$attributeName = $this->getAttribute()->getName();
		if ($object->getData($attributeName) && filter_var($object->getData($attributeName), FILTER_VALIDATE_URL) === false) {
			throw new \Magento\Framework\Exception\LocalizedException(__('Invalid url'));
		}

		return $this;
	}
}
