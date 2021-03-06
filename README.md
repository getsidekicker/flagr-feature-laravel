# flagr-feature-laravel

## Prerequisites

To use this package, you will need to have [Flagr](https://checkr.github.io/flagr) installed and accessible

## Installation

### Publish config

`php artisan vendor:publish --tag=flagr-feature-laravel-config`

## Usage

### Block execution

```php
//function
feature_eval('flag',
    on: fn(object $attachment) => // do stuff when feature is on,
    otherwise: fn(object $attachment) => // do stuff when any other variant isn't matched
)

//alias
app('feature')->eval('flag',
    on: fn(object $attachment) => // do stuff when feature is on,
    otherwise: fn(object $attachment) => // do stuff when any other variant isn't matched
);
```

### Conditional

```php
//function
if (feature_match('flag')) {
    // do feature when feature variant is 'on'
} else  {
    // do otherwise
}

//alias
//function
if (app('feature')->match('flag')) {
    // do feature when feature variant is 'on'
} else  {
    // do otherwise
}
```

## Context

By default, context is sent to Flagr as part of the evaluation call. This can be used to add constraints against segments.

```json
{
  "env": "<Laravel Environment>",
  "user": ["<Array representation of currently authed user>"],
  "host": "<Host as derived from request or APP_URL env>"
}
```

Additionally, context can be set. Note that any context will be merged over the default context

```php
feature_add_context([]);
app('feature')->addContext([]);
```

To ensure that consistent feature treatment is applied across requests, you can supply an optional id

```php
feature_set_id('user_123');
app('feature')->setId('user_123');

// evaluation calls
```

## Creating new feature flag

Flags can be created in the format `php artisan feature:create-flag {--name} {--description} [{--tags=*}]`. This will use the simple boolean flag type within Flagr

e.g.

```
php artisan feature:create-flag --name="temp-flag" --description="Create temp flag for feature"
```
