<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\GiftMessage\Api;

interface OrderRepositoryInterface
{
    /**
     * Returns the gift message for a specified order.
     *
     * @param int $orderId The order ID.
     * @return \Magento\GiftMessage\Api\Data\MessageInterface|null Gift message.
     */
    public function get($orderId);

    /**
     * Sets the gift message for an entire order.
     *
     * @param int $orderId The order ID.
     * @param \Magento\GiftMessage\Api\Data\MessageInterface $giftMessage The gift message.
     * @return bool
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\InputException
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     * @throws \Magento\Framework\Exception\State\InvalidTransitionException
     */
    public function save($orderId, \Magento\GiftMessage\Api\Data\MessageInterface $giftMessage);
}
