<?php

declare(strict_types=1);

/**
 * This code was auto-generated by {this script}[https://github.com/cucumber/common/blob/main/messages/jsonschema/scripts/codegen.rb]
 */

namespace Cucumber\Messages;

use JsonSerializable;
use Cucumber\Messages\DecodingException\SchemaViolationException;

/**
 * Represents the PickleTag message in Cucumber's message protocol
 * @see https://github.com/cucumber/common/tree/main/messages#readme
 *
 * A tag */
final class PickleTag implements JsonSerializable
{
    use JsonEncodingTrait;

    /**
     * Construct the PickleTag with all properties
     *
     */
    public function __construct(
        public readonly string $name = '',

        /**
         * Points to the AST node this was created from
         */
        public readonly string $astNodeId = '',
    ) {
    }

    /**
     * @throws SchemaViolationException
     *
     * @internal
     */
    public static function fromArray(array $arr): self
    {
        self::ensureName($arr);
        self::ensureAstNodeId($arr);

        return new self(
            (string) $arr['name'],
            (string) $arr['astNodeId'],
        );
    }

    /**
     * @psalm-assert array{name: string|int|bool} $arr
     */
    private static function ensureName(array $arr): void
    {
        if (!array_key_exists('name', $arr)) {
            throw new SchemaViolationException('Property \'name\' is required but was not found');
        }
        if (array_key_exists('name', $arr) && is_array($arr['name'])) {
            throw new SchemaViolationException('Property \'name\' was array');
        }
    }

    /**
     * @psalm-assert array{astNodeId: string|int|bool} $arr
     */
    private static function ensureAstNodeId(array $arr): void
    {
        if (!array_key_exists('astNodeId', $arr)) {
            throw new SchemaViolationException('Property \'astNodeId\' is required but was not found');
        }
        if (array_key_exists('astNodeId', $arr) && is_array($arr['astNodeId'])) {
            throw new SchemaViolationException('Property \'astNodeId\' was array');
        }
    }
}
