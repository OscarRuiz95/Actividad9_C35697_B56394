<?php

namespace App;

interface LessonRepositoryInterface
{
    public function getAll(): array;
}

class FileLessonRepository implements LessonRepositoryInterface
{
    public function getAll(): array
    {
        return [];
    }
}

class DbLessonRepository implements LessonRepositoryInterface
{
    public function getAll(): array
    {
        return [];
    }
}

function foo(LessonRepositoryInterface $repo): array
{
    return $repo->getAll();
} 