<div class="<?=$this->cssClass?>">
    <input type="hidden" name="config" value="<?=htmlspecialchars(json_encode($this->config))?>" />
    <?=$this->componentLink($this->data->parent, trlKwf('Back'), 'back')?>
    <div class="date"><?=date('d.m.Y', strtotime($this->row->date))?></div>
    <h1><?=$this->title?></h1>
    <div class="article">
        <div class="content">
            <?=$this->component($this->content)?>
        </div>
        <div class="icons">
            <? if ($this->row->is_top) { ?>
                <div class="kwfSwitchHoverFade">
                    <div class="link switchLink"><a class="top"><?=$this->data->trlKwf('Top-Article')?></a></div>
                    <div class="switchContent"><?=$this->data->trlKwf('Top-Article')?></div>
                </div>
            <? } ?>
            <div class="kwfSwitchHoverFade">
                <div class="link switchLink"><a href="javascript:window.print()" class="print"><?=$this->data->trlKwf('Print')?></a></div>
                <div class="switchContent"><?=$this->data->trlKwf('Print')?></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>