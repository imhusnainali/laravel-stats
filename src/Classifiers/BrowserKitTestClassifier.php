<?php

namespace Wnx\LaravelStats\Classifiers;

use Wnx\LaravelStats\ReflectionClass;
use Laravel\BrowserKitTesting\TestCase;

class BrowserKitTestClassifier extends Classifier
{
    public function getName()
    {
        return 'BrowserKit Tests';
    }

    public function satisfies(ReflectionClass $class)
    {
        if (class_exists(TestCase::class)) {
            return $class->isSubclassOf(TestCase::class);
        }

        return false;
    }
}