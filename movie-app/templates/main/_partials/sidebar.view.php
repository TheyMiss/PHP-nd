<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading"><?=project_name?></div>
    <div class="list-group list-group-flush">
    <?php foreach ($navigation['leftSide'] as $href => $title):?>
        <a class="list-group-item list-group-item-action bg-light" href="?page=<?=$href;?>"><?=$title;?></a>
    <?php endforeach;?>
    </div>
</div>