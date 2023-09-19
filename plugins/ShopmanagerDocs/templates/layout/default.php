<?php

// Load specific templates.
$this->Html->setTemplates([
    'meta' => '<meta{{attrs}}>',
    'metalink' => '<link href="{{url}}"{{attrs}}>',
    'image' => '<img src="{{url}}"{{attrs}}>',
    'css' => '<link rel="{{rel}}" href="{{url}}"{{attrs}}>',
    'charset' => '<meta charset="{{charset}}">',
]);

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $this->fetch('title') ?> | Dokumentation Shopmanager Plugin f&uuml;r CakePHP</title>

    <?php if($this->fetch('meta_canonical')): ?>
        <?= $this->Html->meta('canonical', $this->fetch('meta_canonical')) ?>
    <?php endif; ?>

    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['dist/output'], ['timestamp' => 'force']) ?>

    <?= $this->fetch('meta') ?>

    <?php if($this->fetch('meta_robots')): ?>
        <?= $this->Html->meta('robots', $this->fetch('meta_robots')) ?>
    <?php endif; ?>

    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <a href="https://bisweb.de" class="m-0" title="BisWeb E-Commerce L&ouml;sungen">
        <img src="/img/logo.svg" height="64" width="64" alt="BisWeb E-Commerce L&ouml;sungen Logo" class="mx-auto m-4">
    </a>
    <nav class="site top-nav px-8 pb-8">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>" class="" title="&Uuml;bersicht Dokumentation Shopmanager Plugin">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[20px] h-[20px] inline sm:hidden">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>
                <span class="leading-normal font-heading hidden sm:inline">Dokumentation</span>
                <span class="leading-normal font-heading">Shopmanager Plugin</span>
            </a>
        </div>
        <div class="top-nav-links">
            <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/" title="CakePHP Framework Kochbuch">
                <?= $this->Html->image('/shopmanager_docs/img/cake.png', ['alt' => 'CakePHP Icon', 'title' => '', 'class' => 'p-[2px] cake-bg-red inline mr-1 sm:hidden', 'height' => '20', 'width' => '20']) ?>
                <span class="cakered hidden sm:inline">Cake</span><span class="cakegray hidden sm:inline">PHP</span>
                <span class="cakegray sm:black font-bold sm:font-normal">Kochbuch</span>
            </a>
            <a target="_blank" rel="noopener" href="https://api.cakephp.org/4.4/" title="CakePHP Framework API Referenz">
                <?= $this->Html->image('/shopmanager_docs/img/cake.png', ['alt' => 'CakePHP Icon', 'title' => '', 'class' => 'p-[2px] cake-bg-red inline mr-1 sm:hidden', 'height' => '20', 'width' => '20']) ?>
                <span class="cakered hidden sm:inline">Cake</span><span class="cakegray hidden sm:inline">PHP</span>
                <span class="cakegray sm:black font-bold sm:font-normal">API</span>
            </a>
        </div>
    </nav>

    <main class="site px-8 py-4">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </main>

    <footer class="site px-8 py-4 m-4">
        <div class="w-full py-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
                © 2023 BisWeb.de E-Commerce Solutions, All rights reserved.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="https://bisweb.de/impressum/" class="hover:underline">Impressum</a>
                </li>
                <li>
                    <a href="https://bisweb.de/datenschutz/" class="ml-4 hover:underline">Datenschutz</a>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>
