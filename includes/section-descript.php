<div class="desc container py-5">
    <div class="row">
        <?php
        $descriptions = array(
            array(
                'title' => 'Setting Goals',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi fugit minima soluta quibusdam, consectetur molestiae nam maxime voluptatibus dolor quis?',
            ),
            array(
                'title' => 'Coding and Testing',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi fugit minima soluta quibusdam, consectetur molestiae nam maxime voluptatibus dolor quis?',
            ),
            array(
                'title' => 'Deployment',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi fugit minima soluta quibusdam, consectetur molestiae nam maxime voluptatibus dolor quis?',
            ),
        );

        foreach ($descriptions as $description) :
        ?>
            <div class="col-sm-12 col-md-4">
                <h3><?php echo esc_html($description['title']); ?></h3>
                <p class="lead fw-semibold"><?php echo esc_html($description['content']); ?></p>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</div>
