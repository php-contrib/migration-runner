<?php

declare(strict_types=1);

namespace PhpContrib\MigrationRunner;

/**
 * Adds migration running support
 */
interface MigrationRunnerInterface
{
    /**
     * Create a migration stub.
     */
    public function create(string $path, string $name): void;

    /**
     * Reverts the last successfully run migration.
     */
    public function revert(): void;

    /**
     * Run all pending migrations.
     */
    public function run(): void;
}
