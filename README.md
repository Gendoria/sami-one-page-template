# Sami one page template

Sami template for one page documentation.

Library created in cooperation with [Hypermedia Poland](https://hypermedia.pl/), 
part of [Dentsu Aegis Network](https://www.dentsuaegisnetwork.pl/).

## Usage

```php
use Sami\Sami;
use Sami\Version\GitVersionCollection;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('Resources')
    ->exclude('Tests')
    ->in($dir = '/path/to/symfony/src')
;

$versions = GitVersionCollection::create($dir)
    ->addFromTags('v2.0.*')
    ->add('2.0', '2.0 branch')
    ->add('master', 'master branch')
;

return new Sami($iterator, array(
    'theme'                => 'gendoria-one-page',
    'versions'             => $versions,
    'title'                => 'Symfony2 API',
    'build_dir'            => __DIR__.'/../build/sf2/%version%',
    'cache_dir'            => __DIR__.'/../cache/sf2/%version%',
    // use a custom theme directory (this works if you install your dependencies in vendor/ folder)
    'template_dirs'        => array(__DIR__.'/vendor/gendoria/sami-one-page-template'),
    'default_opened_level' => 2,
));
```

## Requirements

- PHP >= 7.0
- [Sami][] >= 4.0.0

## Installation

Via [Composer][]:

    $ composer require "gendoria/sami-one-page-theme=~1.0"

## License

This library is available under the [GNU LESSER GENERAL PUBLIC LICENSE 3.0](LICENSE).

[Sami]: http://sami.sensiolabs.org/
[Composer]: http://getcomposer.org/
