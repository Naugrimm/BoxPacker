<?php
/**
 * Box packing (3D bin packing, knapsack problem).
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace DVDoug\BoxPacker;

/**
 * A box may only be available a certain number of times. The user can implement this here
 *
 * @author Doug Wright
 */
interface LimitedQuantityBox extends Box
{
    /**
     * Gets called after a box has been deemed the "best Box" for a set of items
     * and after the items have been packed in the box.
     *
     * The box gets removed from $packer->boxList when this function returns false,
     * so it is not available anymore for further iterations
     *
     * @return bool
     */
    public function isAvailable(PackedBox $packedBox): bool;
}
