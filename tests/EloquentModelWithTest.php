<?php

declare(strict_types=1);

namespace DVSafronov\LaravelClickHouse\Tests;

use DVSafronov\LaravelClickHouse\Database\Eloquent\Builder;
use Mockery\MockInterface;

class EloquentModelWithTest extends EloquentModelTest
{
    use Helpers;

    /**
     * @return Builder|MockInterface
     */
    public function newQuery(): Builder
    {
        $builder = $this->mock(Builder::class);
        $builder->shouldReceive('with')
            ->once()
            ->with(['foo', 'bar'])
            ->andReturn('foo');

        return $builder;
    }
}
