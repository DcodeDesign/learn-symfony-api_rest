<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGQ8jW1m\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGQ8jW1m/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGQ8jW1m.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGQ8jW1m\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGQ8jW1m\App_KernelDevDebugContainer([
    'container.build_hash' => 'GQ8jW1m',
    'container.build_id' => 'f0df7f9f',
    'container.build_time' => 1599483029,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGQ8jW1m');
