<?php

/**
 * @type $this PHPixie\Template
 * type $this PHPixie\Template\Renderer\Runtime
 */

?>


<div id="snippets-list">

    <?php for ($i = 25; $i; --$i): ?>
        <div class="snippet-item" data-id="">
            <div class="tbl">
                <div class="tbl_cell si-preview"><i class="icon-code"></i></div>
                <div class="tbl_cell si-title">
                    <strong><a href="#">Snippet title name [<?=$i?>]</a></strong>
                    <div class="si-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus, dolore eligendi est illum ipsa nobis saepe sunt velit? Ad aliquid cum dolore eligendi inventore ipsa neque non quasi totam.</div>

                </div>
                <div class="tbl_cell si-vote">
                    <div class="table">
                        <p>+10</p>
                    </div>
                </div>
            </div>
        </div>
    <?php endfor; ?>

</div>