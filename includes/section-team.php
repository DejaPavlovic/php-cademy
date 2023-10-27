<section id="team" class="team container">
    <div class="row p-4">
        <h2><?php echo esc_html__('The Team', 'coding-agency'); ?></h2>
        <div class="wrapper">
        <p class="lead fw-normal text-center"><?php echo esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit.Suscipit, deserunt cumque! Deleniti numquam omnis qui molestias aperiam ducimus nisi dolore.', 'coding-agency'); ?></p>
        </div>
       


        

        <?php
        $team_members = array(
            array(
                'name' => 'Dejan Pavlovic',
                'role' => 'Full Stack Web Developer',
                'image' => 'person3.jpg',
                'bio_url' => 'https://dejapavlovic.github.io/portfolio/',
            ),
            array(
                'name' => 'Dejan Pavlovic',
                'role' => 'Full Stack Web Developer',
                'image' => 'person1.jpg',
                'bio_url' => 'https://dejapavlovic.github.io/portfolio/',
            ),
            array(
                'name' => 'Dejan Pavlovic',
                'role' => 'Full Stack Web Developer',
                'image' => 'person3.jpg',
                'bio_url' => 'https://dejapavlovic.github.io/portfolio/',
            ),
        );

        foreach ($team_members as $member) :
        ?>
            <div class="col-sm-12 col-md-4 pb-5">
                <div class="card" style="background: #23CD6B;">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/' . $member['image']); ?>" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h3 class="py-3 text-center"><?php echo esc_html($member['name']); ?></h3>
                        <p class="card-text text-center"><?php echo esc_html($member['role']); ?></p>
                        <a class="btn btn-primary" href="<?php echo esc_url($member['bio_url']); ?>" target="_blank"><?php echo esc_html__('Click for bio', 'coding-agency'); ?></a>
                    </div>
                </div>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</section>
