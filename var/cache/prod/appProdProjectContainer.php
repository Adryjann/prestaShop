<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPx8ldek\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPx8ldek/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerPx8ldek.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerPx8ldek\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerPx8ldek\appProdProjectContainer([
    'container.build_hash' => 'Px8ldek',
    'container.build_id' => '55c116db',
    'container.build_time' => 1646341037,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPx8ldek');