<section class='pb-5'>
    <?$t = 'test'?>
    <div class='container'>
        <div class='row my-4'>
            <h2 class=''>Tous les annonces</h2>
        </div>

        <div class="card-deck">
            <? foreach ($all_announces as $item):?>
                <div class="card">
                    <a href="/show/<?=$item->id?>"><img src="https://via.placeholder.com/150" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title"><a href="/announce/<?=$item->id?>"><?=$item->title?></a></h5>
                        <p class="card-text"><?=$item->price.'  '.strtoupper($item->devise)?></p>

                        <p class="card-text"><i class="fa fa-folder-open" aria-hidden="true"></i> <a href="/category/<?=$item->category?>"><?=$item->category?></a></p>

                        <p class="card-text"><i class="fa fa-map-marker" aria-hidden="true"></i> <a href=''> <?=$item->city?></a></p>

                        <p class="card-text"><i class="fa fa-eye" aria-hidden="true"></i> <?=$counter->number_views($item->id)?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> <?=time_ago($item->created_at)?></small>
                    </div>
                </div>
            <? endforeach;?>
        </div>


        <div class="mt-4 count-page" value="<?=2?>">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item before mr-2 rounded <?=(isset($page) && $page === 0) ? 'disabled' : ''?>">
                        <a class="page-link" href="/announces/?page=<?=($page-1)?>" tabindex="-1">Précédent</a>
                    </li>

                    <?php paginate(8);?>

                    <li class="page-item after">
                        <a class="page-link rounded" href="/announces/?page=<?=($page+1)?>">Suivant</a>
                    </li>
                </ul>
            </nav>
        </div>



    </div>
</section>
<script src="/public/js/announces.js"></script>
