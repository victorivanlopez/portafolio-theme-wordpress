<?php $red_social_1 = get_field('red_social_1');
if($red_social_1) :?>
    <?php      
        $redIcono = $red_social_1["icono"];
        $redURL = $red_social_1["url"];
    ?>
        <a href="<?php echo esc_url($redURL); ?>" target="_blank">
        <i class="<?php echo esc_attr($redIcono); ?>"></i>
    </a>
<?php endif; ?>
<?php $red_social_2 = get_field('red_social_2');
if($red_social_2) :?>
    <?php      
        $redIcono = $red_social_2["icono"];
        $redURL = $red_social_2["url"];
    ?>
        <a href="<?php echo esc_url($redURL); ?>" target="_blank">
        <i class="<?php echo esc_attr($redIcono); ?>"></i>
    </a>
<?php endif; ?>