<?php

use RyanChandler\Bytes\Converter;

test('it can convert from bytes to kb', function () {
    expect(Converter::from(1000))->toKb()->toEqual(1);
});

test('it can convert from bytes to kib', function () {
    expect(Converter::from(1024))->toKiB()->toEqual(1);
});

test('it can convert from bytes to mb', function () {
    expect(Converter::from(1_000_000))->toMb()->toEqual(1);
});

test('it can convert from bytes to mib', function () {
    expect(Converter::from(1_048_576))->toMiB()->toEqual(1);
});

test('it can convert from bytes to gb', function () {
    expect(Converter::from(1_000_000_000))->toGb()->toEqual(1);
});

test('it can convert from bytes to gib', function () {
    expect(Converter::from(1_073_741_824))->toGiB()->toEqual(1);
});
