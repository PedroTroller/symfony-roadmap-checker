# Symfony Roadmap Checker

Install

```bash
composer require --dev pedrotroller/symfony-roadmap-checker
```

```php
// AppKernel.php

class AppKernel extends Kernel
{

    public function registerBundles()
    {
        // ...

        if (in_array($this->getRawEnvironment(), ['dev', 'test'])) {
            // ...
            $bundles[] = new PedroTroller\SymfonyRoadmapChecker\SymfonyRoadmapCheckerBundle();
            // ...
        }
    }
}
```
