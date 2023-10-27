<section class="awards container" id="#awards">
    <div class="row justify-content-between">
        <h2 class="p-4">Awards and Recommendations</h2>

        <?php
        $awards = array(
            array(
                'type' => 'Awards',
                'title' => 'NESO International Awards Festival',
                'year' => '2018',
                'location' => 'Boston, Srbija',
            ),
            array(
                'type' => 'Awards',
                'title' => 'Another Award Title',
                'year' => '2019',
                'location' => 'New York, USA',
            ),
            array(
                'type' => 'Awards',
                'title' => 'NESO International Awards Festival',
                'year' => '2019',
                'location' => 'New York , New York'
            ),
            array(
                'type' => 'Awards',
                'title' => 'Another Award Title',
                'year' => '2019',
                'location' => 'New York, USA',
            ),
            array(
                'type' => 'Awards',
                'title' => 'NESO International Awards Festival',
                'year' => '2019',
                'location' => 'New York, USA',
            ),
            array(
                'type' => 'Awards',
                'title' => 'Another Award Title',
                'year' => '2019',
                'location' => 'New York, USA',
            ),
            array(
                'type' => 'Awards',
                'title' => 'Another Award Title',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dicta exercitationem accusamus pariatur excepturi! Inventore asperiores placeat magnam sint esse officia, nihil nesciunt aliquam neque et cum soluta id odit.',
                'year' => '2019',
                'location' => 'New York, USA',
            ),
            //dodavanje nagrada ako dobijete jos koju
        );

        foreach ($awards as $item) :
        ?>
            <div class="col-sm-12 col-md-4">
                <div class="award1">
                    <?php if ($item['type'] === 'Awards') : ?>
                        <h3>Awards</h3>
                    <?php else : ?>
                        <h3>Recommendations</h3>
                    <?php endif; ?>
                    <h4><?php echo esc_html($item['title']); ?></h4>
                    <p><?php echo esc_html($item['year'] . ', ' . $item['location']); ?></p>
                </div>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</section>
