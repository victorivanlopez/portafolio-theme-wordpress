<div class="card">
    <div class="card-imagen">
        <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail('medium') ?>
        </a>           
    </div>

    <div class="card-content">
        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
        <div class="card-botones">
            <a class="boton" href="#">Ver demo</a>
            <a class="boton" href="#">Ver Repositorio</a>
        </div>
    </div>

    <div class="card-footer">
        <ul class="listado-meta">
            <?php $tecnologia_1 = get_field('tecnologia_1');
            if($tecnologia_1) :?>
                <li class="meta">
                    <?php      
                        $imagenURL = $tecnologia_1["imagen"]["sizes"]["medium"];
                        $imagenNombre = $tecnologia_1["imagen"]["title"];
                    ?>
                    <img src="<?php echo esc_url($imagenURL); ?>" alt="<?php echo esc_html($imagenNombre); ?>">
                </li>
            <?php endif; ?>
            
            <?php $tecnologia_2 = get_field('tecnologia_2');
            if($tecnologia_2) :?>
                <li class="meta">
                    <?php      
                        $imagenURL = $tecnologia_2["imagen"]["sizes"]["medium"];
                        $imagenNombre = $tecnologia_2["imagen"]["title"];
                    ?>
                    <img src="<?php echo esc_url($imagenURL); ?>" alt="<?php echo esc_html($imagenNombre); ?>">
                </li>
            <?php endif; ?>
            
            <?php $tecnologia_3 = get_field('tecnologia_3');
            if($tecnologia_3) :?>
                <li class="meta">
                    <?php      
                        $imagenURL = $tecnologia_3["imagen"]["sizes"]["medium"];
                        $imagenNombre = $tecnologia_3["imagen"]["title"];
                    ?>
                    <img src="<?php echo esc_url($imagenURL); ?>" alt="<?php echo esc_html($imagenNombre); ?>">
                </li>
            <?php endif; ?>
            
            <?php $tecnologia_4 = get_field('tecnologia_4');
            if($tecnologia_4) :?>
                <li class="meta">
                    <?php      
                        $imagenURL = $tecnologia_4["imagen"]["sizes"]["medium"];
                        $imagenNombre = $tecnologia_4["imagen"]["title"];
                    ?>
                    <img src="<?php echo esc_url($imagenURL); ?>" alt="<?php echo esc_html($imagenNombre); ?>">
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>