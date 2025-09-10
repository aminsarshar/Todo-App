<?php

namespace Tests;

use Mockery;
use Tests\CreatesApplication;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        // لیست مدل‌هایی که می‌خوای Mock کنی
        $modelClasses = [
            'App\Models\Category',
            'App\Models\Todo',
            // مدل‌های دیگه...
        ];

        foreach ($modelClasses as $model) {
            // استفاده از overload به جای alias
            $mock = Mockery::mock('overload:' . $model);

            // متدهای عمومی Eloquent که می‌خوای Mock کنی
            $mock->shouldReceive('paginate')
                 ->andReturn(new LengthAwarePaginator(collect([]), 0, 10));

            $mock->shouldReceive('all')
                 ->andReturn(collect([]));
        }
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }
}
