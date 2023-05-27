<div class="card">
    <div class="card-imagen">
        <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail('medium') ?>
        </a>           
    </div>

    <div class="card-content">
        <?php the_category(); ?>
        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
    </div>

    <div class="card-footer">
        <ul class="listado-meta">
            <li class="meta meta-blog">
                <i class="fa-solid fa-calendar-days"></i>
                <p><?php the_time(get_option('date_format')); ?></p>
            </li>
        </ul>
    </div>
</div>