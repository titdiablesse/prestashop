<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXiW7hIp\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXiW7hIp/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerXiW7hIp.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerXiW7hIp\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerXiW7hIp\appAppKernelProdContainer([
    'container.build_hash' => 'XiW7hIp',
    'container.build_id' => 'cdf1cd1a',
    'container.build_time' => 1712839578,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXiW7hIp');
