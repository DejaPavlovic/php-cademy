<div class="steps container-fluid">
    <div class="container">
        <div class="row">
            <?php
            $steps = array(
                array(
                    'number' => '1',
                    'title' => 'Step - 1',
                    'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dicta exercitationem accusamus pariatur excepturi! Inventore asperiores placeat magnam sint esse officia, nihil nesciunt aliquam neque et cum soluta id odit.',
                ),
                array(
                    'number' => '2',
                    'title' => 'Step - 2',
                    'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dicta exercitationem accusamus pariatur excepturi! Inventore asperiores placeat magnam sint esse officia, nihil nesciunt aliquam neque et cum soluta id odit.',
                ),
                array(
                    'number' => '3',
                    'title' => 'Step - 3',
                    'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dicta exercitationem accusamus pariatur excepturi! Inventore asperiores placeat magnam sint esse officia, nihil nesciunt aliquam neque et cum soluta id odit.',
                ),
            );

            foreach ($steps as $step) :
            ?>
                <div class="s-step col-sm-12 col-md-4">
                    <h2><?php echo esc_html($step['number']); ?></h2>
                    <h3><?php echo esc_html($step['title']); ?></h3>
                    <p><?php echo esc_html($step['content']); ?></p>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>
