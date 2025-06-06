<?php

declare(strict_types=1);

namespace Pest\Support;

use Closure as BaseClosure;
use Pest\Exceptions\ShouldNotHappen;

/**
 * @internal
 */
final class Closure
{
    /**
     * Binds the given closure to the given "this".
     *
     * @throws ShouldNotHappen
     */
    public static function bind(?BaseClosure $closure, ?object $newThis, object|string|null $newScope = 'static'): BaseClosure
    {
        if (! $closure instanceof \Closure) {
            throw ShouldNotHappen::fromMessage('Could not bind null closure.');
        }

        // @phpstan-ignore-next-line
        $closure = BaseClosure::bind($closure, $newThis, $newScope);

        if (! $closure instanceof \Closure) {
            throw ShouldNotHappen::fromMessage('Could not bind closure.');
        }

        return $closure;
    }
}
