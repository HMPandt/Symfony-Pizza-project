<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerC2rxU57\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerC2rxU57/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerC2rxU57.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerC2rxU57\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerC2rxU57\App_KernelDevDebugContainer([
    'container.build_hash' => 'C2rxU57',
    'container.build_id' => '410b2438',
    'container.build_time' => 1686823330,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerC2rxU57');
