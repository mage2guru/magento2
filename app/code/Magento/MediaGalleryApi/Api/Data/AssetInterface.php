<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\MediaGalleryApi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * Represents a media gallery asset which contains information about a media asset entity such
 * as path to the media storage, media asset title and its content type, etc.
 * @api
 */
interface AssetInterface extends ExtensibleDataInterface
{
    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * Get Path
     *
     * @return string
     */
    public function getPath(): string;

    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle(): ?string;

    /**
     * Get description
     *
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * Get the name of the channel/stock/integration file was retrieved from. null if not identified.
     *
     * @return string|null
     */
    public function getSource(): ?string;

    /**
     * Get file hash
     *
     * @return string|null
     */
    public function getHash(): ?string;

    /**
     * Get content type
     *
     * @return string
     */
    public function getContentType(): string;

    /**
     * Retrieve full licensed asset's height
     *
     * @return int
     */
    public function getHeight(): int;

    /**
     * Retrieve full licensed asset's width
     *
     * @return int
     */
    public function getWidth(): int;

    /**
     * Retrieve asset file size in bytes
     *
     * @return int
     */
    public function getSize(): int;

    /**
     * Get created at
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string;

    /**
     * Get updated at
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string;

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Magento\MediaGalleryApi\Api\Data\AssetExtensionInterface|null
     */
    public function getExtensionAttributes(): ?AssetExtensionInterface;

    /**
     * Set extension attributes
     *
     * @param \Magento\MediaGalleryApi\Api\Data\AssetExtensionInterface|null $extensionAttributes
     * @return void
     */
    public function setExtensionAttributes(?AssetExtensionInterface $extensionAttributes): void;
}
