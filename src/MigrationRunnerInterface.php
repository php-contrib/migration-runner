<?php

declare(strict_types=1);

namespace Phpolar\Migrations;

/**
 * Adds support for running migrations in your application.
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
