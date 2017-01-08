<?php

/**
 * @type $this PHPixie\Template\Renderer\Runtime
 * type $this PHPixie\Template\Renderer\Runtime
 */



$this->layout('app:layout');

$navigation = isset($navigation) ? $navigation : '--empty';
$sidebar = isset($sidebar) ? $sidebar : '--empty';
$content = isset($content) ? $content : '--empty';
?>

<div id="navigation">
    <?= $navigation?>
</div>

<div id="wrapper" class="table">

    <div id="sidebar" class="valign_top">
        <?= $sidebar?>
    </div>

    <div id="content" class="valign_top">
        <?= $content?>
    </div>

</div>

<footer>
    <p>Snippet-code 2014-2017</p>
</footer>

