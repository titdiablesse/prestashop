<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4lFG2uE\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4lFG2uE/appAppKernelProdContainer.php') {
    touch(__DIR__.'/Container4lFG2uE.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\Container4lFG2uE\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \Container4lFG2uE\appAppKernelProdContainer([
    'container.build_hash' => '4lFG2uE',
    'container.build_id' => '5c7aecc8',
    'container.build_time' => 1712839608,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4lFG2uE');