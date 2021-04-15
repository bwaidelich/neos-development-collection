<?php
namespace Neos\Media\Domain\Strategy;

/*
 * This file is part of the Neos.Media package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Media\Domain\Model\AssetInterface;

/**
 * Interface for asset usage strategies
 */
interface AssetUsageStrategyInterface
{

    /**
     * Returns the total count of usages found.
     */
    public function getUsageCount(AssetInterface $asset): int;

    /**
     * Returns an array of usage reference objects.
     *
     * @param AssetInterface $asset
     * @return array<\Neos\Media\Domain\Model\Dto\UsageReference>
     */
    public function getUsageReferences(AssetInterface $asset);
}
