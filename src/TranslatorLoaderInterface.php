<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE.md
 */

namespace Hyperf\Contract;

interface TranslatorLoaderInterface
{
    /**
     * Load the messages for the given locale.
     */
    public function load(string $locale, string $group, ?string $namespace = null): array;

    /**
     * Add a new namespace to the loader.
     */
    public function addNamespace(string $namespace, string $hint);

    /**
     * Add a new JSON path to the loader.
     */
    public function addJsonPath(string $path);

    /**
     * Get an array of all the registered namespaces.
     */
    public function namespaces(): array;
}
