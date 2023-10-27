<div class="container contact py-5">
    <div class="row justify-content-between">
        <div class="col-md-5" style="background-color: #23CD6B;">
            <div class="p-4">
                <h2><?php echo esc_html__('Contact us', 'coding-agency'); ?></h2>
                <h4 class="py-3"><?php echo esc_html__('Address', 'coding-agency'); ?></h4>
                <p><?php echo esc_html__('Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis iste culpa eum, quisquam officia, omnis repellat voluptatem sunt praesentium exercitationem soluta? Voluptate, fugiat voluptas quae ipsum porro laborum praesentium nam?', 'coding-agency'); ?></p>
                <div class="pt-5">
                    <p class="lead d-flex justify-content-end">+123456789</p>
                    <p class="lead d-flex justify-content-end">+123456789</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2><?php echo esc_html__('Send us a message', 'coding-agency'); ?></h2>
            <form action="/action_page.php">
                <label for="fname"><?php echo esc_html__('First Name', 'coding-agency'); ?></label>
                <input type="text" id="fname" name="firstname" placeholder="<?php echo esc_html__('Your name..', 'coding-agency'); ?>">

                <label for="lname"><?php echo esc_html__('Last Name', 'coding-agency'); ?></label>
                <input type="text" id="lname" name="lastname" placeholder="<?php echo esc_html__('Your last name..', 'coding-agency'); ?>">

                <label for="subject"><?php echo esc_html__('Subject', 'coding-agency'); ?></label>
                <textarea id="subject" name="subject" placeholder="<?php echo esc_html__('Write something..', 'coding-agency'); ?>" style="height:200px"></textarea>

                <input type="submit" value="<?php echo esc_html__('Submit', 'coding-agency'); ?>">
            </form>
        </div>
    </div>
</div>
