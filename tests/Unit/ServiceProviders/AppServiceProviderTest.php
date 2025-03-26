<?php

declare(strict_types=1);

use App\Providers\AppServiceProvider;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;

it('tests the AppServiceProvider', function () {
    $this->app->register(AppServiceProvider::class);

    $date = now();
    $this->assertInstanceOf(CarbonImmutable::class, $date);

    expect($date)->toBeInstanceOf(CarbonImmutable::class);
});

test('model should be strict and unguarded', function () {
    $this->app->register(AppServiceProvider::class);

    expect(Model::isUnguarded())->toBeTrue();
});

// test('force https in production', function () {
//    $this->app->detectEnvironment(fn () => 'production');
//
//    $this->app->register(AppServiceProvider::class);
//
//    expect(URL::getScheme())->toBe('https');
// });
