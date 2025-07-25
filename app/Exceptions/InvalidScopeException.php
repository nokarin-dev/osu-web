<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

namespace App\Exceptions;

class InvalidScopeException extends SilencedException
{
    private $error;

    public function __construct(string $key, string $error = 'invalid_scope')
    {
        parent::__construct(osu_trans("model_validation/token.invalid_scope.{$key}"));

        $this->error = $error;
    }

    /**
     * The RFC 6749 error code
     */
    public function getError(): string
    {
        return $this->error;
    }

    public function getStatusCode()
    {
        return 400;
    }
}
