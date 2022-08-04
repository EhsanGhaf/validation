<?php

namespace RoocketValidator;

class Validation
{
    public function index(array $data, string $field): bool
    {
        return isset($data[$field]);
    }
}
