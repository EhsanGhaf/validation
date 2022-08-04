<?php

namespace RoocketValidator;

class Validation
{
    public function has(array $data, string $field): bool
    {
        return isset($data[$field]);
    }
}
