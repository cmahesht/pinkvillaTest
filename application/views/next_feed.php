<?php foreach($nextFeed->nodes as $feeds):?>
<div class="m_saboxplugin-wrap">
    <div class="m_saboxplugin-gravatar">
        <div class="m_vcard m_author">
            <img class="m_img-container" src="https://www.pinkvilla.com<?php echo $feeds->node->ImageStyle_thumbnail;?>" width="100" height="100">
            <span class="m_text-container">
                <?php echo $feeds->node->title;?>
            </span>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<br>
<?php endforeach;?>