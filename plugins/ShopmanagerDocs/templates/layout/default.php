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
    <nav class="site top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>" class="" title="&Uuml;bersicht Dokumentation Shopmanager Plugin">
                <span class="leading-normal font-heading">Dokumentation Shopmanager Plugin</span>
            </a>
        </div>
        <div class="top-nav-links">
            <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/" title="CakePHP Framework Kochbuch">
                <span class="cakered">Cake</span><span class="cakegray">PHP</span>
                <span class="font-normal">Dokumentation</span>
            </a>
            <a target="_blank" rel="noopener" href="https://api.cakephp.org/4.4/" title="CakePHP Framework API Referenz">
                <span class="cakered">Cake</span><span class="cakegray">PHP</span>
                <span class="font-normal">API</span>
            </a>
        </div>
    </nav>

    <main class="site">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </main>

    <footer class="site">

    </footer>
</body>
</html>
