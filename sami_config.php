<?php

use Sami\Sami;
use Sami\RemoteRepository\GitHubRemoteRepository;
use Sami\Version\GitVersionCollection;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->exclude('Vendor')
    ->exclude('tests')
    ->in($dir = __DIR__.'/src')
;

$versions = GitVersionCollection::create($dir)
    ->addFromTags('*')
    ->add('master','master')
;

return new Sami($iterator,array(
    'theme'                => 'default',
    'title'                => '@@@package_name API',
    'versions'             => $versions,
    'build_dir'            => '@@@doc_destination/build/%version%',
    'cache_dir'            => '@@@doc_destination/cache/%version%',
    'default_opened_level' => 2,
));

