<?php

use Illuminate\Support\Facades\DB;

test('the test suite runs on the dedicated PostgreSQL database', function () {
    expect(DB::scalar('select current_database()'))->toBe('axo_appointments_test');
});
