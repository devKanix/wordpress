<?php

/**
 * Template Name: Homepage
 */

 get_header(); ?>

<?php
$hero_h1 = get_field('tab_Hero_h1');
$hero_name = get_field('tab_Hero_name');
$hero_img = get_field('tab_Hero_img');
$strip_text = get_field('tab_strip');

// Get About Section Fields
$about_img = get_field('tab_about_img');
$about_text = get_field('tab_about_p');

// Get Project Section Fields
$project1_img = get_field('tab_project1_img');
$project1_title = get_field('tab_project1_title');
$project1_text = get_field('tab_project1_p');
$project1_link = get_field('tab_project1_link');

$project2_img = get_field('tab_project2_img');
$project2_title = get_field('tab_project2_title');
$project2_text = get_field('tab_project2_p');
$project2_link = get_field('tab_project2_link');

$project3_img = get_field('tab_project3_img');
$project3_title = get_field('tab_project3_title');
$project3_text = get_field('tab_project3_p');
$project3_link = get_field('tab_project3_link');

$project4_img = get_field('tab_project4_img');
$project4_title = get_field('tab_project4_title');
$project4_text = get_field('tab_project4_p');
$project4_link = get_field('tab_project4_link');

// Get Experience Section Fields
$experience1_img = get_field('tab_experience1_img');
$experience1_title = get_field('tab_experience1_title');
$experience1_text = get_field('tab_experience1_p');
$experience1_link = get_field('tab_experience1_link');

$experience2_img = get_field('tab_experience2_img');
$experience2_title = get_field('tab_experience2_title');
$experience2_text = get_field('tab_experience2_p');
$experience2_link = get_field('tab_experience2_link');

$experience3_img = get_field('tab_experience3_img');
$experience3_title = get_field('tab_experience3_title');
$experience3_text = get_field('tab_experience3_p');
$experience3_link = get_field('tab_experience3_link');

// Get Social Media Section Fields
$social1_img = get_field('tab_social1_img');
$social1_title = get_field('tab_social1_title');
$social1_link = get_field('tab_social1_link');

$social2_img = get_field('tab_social1_img');
$social2_title = get_field('tab_social1_title');
$social2_link = get_field('tab_social1_link');

$social3_img = get_field('tab_social1_img');
$social3_title = get_field('tab_social1_title');
$social3_link = get_field('tab_social1_link');

$social4_img = get_field('tab_social1_img');
$social4_title = get_field('tab_social1_title');
$social4_link = get_field('tab_social1_link');

$social5_img = get_field('tab_social1_img');
$social5_title = get_field('tab_social1_title');
$social5_link = get_field('tab_social1_link');

// Get Blogs Section Fields
$blog1_img = get_field('tab_blog1_img');
$blog1_title = get_field('tab_blog1_title');
$blog1_link = get_field('tab_blog1_link');

if ($hero_img) {
    $hero_img_url = $hero_img['url']; // Get the image URL
} else {
    $hero_img_url = ''; // Fallback if no image is set
}

if ($about_img) {
    $about_img_url = $about_img['url']; // Get the image URL
} else {
    $about_img_url = ''; // Fallback if no image is set
}

if ($project1_img) {
    $project1_img_url = $project1_img['url']; // Get the image URL
} else {
    $project1_img_url = ''; // Fallback if no image is set
}

if ($project2_img) {
    $project2_img_url = $project2_img['url']; // Get the image URL
} else {
    $project2_img_url = ''; // Fallback if no image is set
}

if ($project3_img) {
    $project3_img_url = $project3_img['url']; // Get the image URL
} else {
    $project3_img_url = ''; // Fallback if no image is set
}

if ($project4_img) {
    $project4_img_url = $project4_img['url']; // Get the image URL
} else {
    $project4_img_url = ''; // Fallback if no image is set
}

if ($experience1_img) {
    $experience1_img_url = $experience1_img['url']; // Get the image URL
} else {
    $experience1_img_url = ''; // Fallback if no image is set
}

if ($experience2_img) {
    $experience2_img_url = $experience2_img['url']; // Get the image URL
} else {
    $experience2_img_url = ''; // Fallback if no image is set
}

if ($experience3_img) {
    $experience3_img_url = $experience3_img['url']; // Get the image URL
} else {
    $experience3_img_url = ''; // Fallback if no image is set
}

if ($social1_img) {
    $social1_img_url = $social1_img['url']; // Get the image URL
} else {
    $social1_img_url = ''; // Fallback if no image is set
}

if ($social2_img) {
    $social2_img_url = $social2_img['url']; // Get the image URL
} else {
    $social2_img_url = ''; // Fallback if no image is set
}

if ($social3_img) {
    $social3_img_url = $social3_img['url']; // Get the image URL
} else {
    $social3_img_url = ''; // Fallback if no image is set
}

if ($social4_img) {
    $social4_img_url = $social4_img['url']; // Get the image URL
} else {
    $social4_img_url = ''; // Fallback if no image is set
}   

if ($social5_img) {
    $social5_img_url = $social5_img['url']; // Get the image URL
} else {
    $social5_img_url = ''; // Fallback if no image is set
}

if ($blog1_img) {
    $blog1_img_url = $blog1_img['url']; // Get the image URL
} else {
    $blog1_img_url = ''; // Fallback if no image is set
}

?>


<div class="hero">
        <div class="hero-text">
            <h1>
            <?= $hero_h1; ?>
            </h1>
            <p><?= $hero_name; ?></p>
        </div>
        <div>
        <img src="<?= esc_url($hero_img_url); ?>" loading="lazy" alt="Kanishk Chaudhary">
        </div>
    </div>
    <div class="strip">
        <h2><?= $strip_text; ?></h2>
    </div>
    <div class="about" id="about">
        <div class="about-img">
            <img src="<?= esc_url($about_img_url); ?>" loading="lazy" alt="Kanishk Chaudhary">
        </div>
        <div class="about-text">
            <h3>ABOUT</h3>
            <p><?= $about_text; ?></p>
        </div>
    </div>
    <div class="dashed-line"></div>
    <div class="project" id="project">
        <h3>PROJECTS</h3>
        <div class="project-cards">
            <div class="project-card">
                <div class="card-img">
                    <a href="https://honestly-nvrmind.vercel.app/"><img src="<?= esc_url($project1_img_url); ?>" loading="lazy" alt="Kanishk Chaudhary"></a>
                </div>
                <div class="card-text">
                    <h4><?= $project1_title; ?></h4>
                    <p><?= $project1_text; ?></p>
                    <a href="https://github.com/devKanix/Honestly-Nvrmind">Github</a>
                </div>
            </div>
            <div class="project-card">
                <div class="card-text">
                    <h4><?= $project2_title; ?></h4>
                    <p><?= $project2_text; ?></p>
                    <a href="https://github.com/devKanix/3D-Renderer">Github</a>
                </div>
                <div class="card-img">
                    <a href="https://3drenderer.netlify.app/"><img src="<?= esc_url($project2_img_url); ?>" loading="lazy" alt="Kanishk Chaudhary"></a>
                </div>
            </div>
            <div class="project-card">
                <div class="card-img">
                <img src="<?= esc_url($project3_img_url); ?>" loading="lazy" alt="Kanishk Chaudhary">
                </div>
                <div class="card-text">
                    <h4><?= $project3_title; ?></h4>
                    <p><?= $project3_text; ?></p>
                    <a href="">Github</a>
                </div>
            </div>
            <div class="project-card">
                <div class="card-text">
                    <h4><?= $project4_title; ?></h4>
                    <p><?= $project4_text; ?></p>
                    <a href="https://github.com/devKanix/Serverless-Messaging-Backend-with--AWS">Github</a>
                </div>
                <div class="card-img">
                <img src="<?= esc_url($project4_img_url); ?>" loading="lazy" alt="Kanishk Chaudhary">
                </div>
            </div>
        </div>
    </div>
    <div class="dashed-line"></div>
    <div class="experience" id="experience">
        <h3>EXPERIENCE</h3>
        <div class="project-cards">
            <div class="project-card">
                <div class="card-text">
                    <h4><?= $experience1_title; ?></h4>
                    <p><?= $experience1_text; ?></p>
                </div>
                <div class="card-img-2">
                    <a href="https://www.digitalwebsolutions.com/"><img src="<?= esc_url($experience1_img_url); ?>" loading="lazy" alt="Kanishk Chaudhary"></a>
                </div>
            </div>
            <div class="project-card">
                <div class="card-img-2">
                    <a href="https://cyberxield.in/"><img src="<?= esc_url($experience2_img_url); ?>" loading="lazy" alt="Kanishk Chaudhary"></a>
                </div>
                <div class="card-text">
                    <h4><?= $experience2_title; ?></h4>
                    <p><?= $experience2_text; ?></p>
                </div>
            </div>
            <div class="project-card">
                <div class="card-text">
                    <h4><?= $experience3_title; ?></h4>
                    <p><?= $experience3_text; ?></p>
                </div>
                <div class="card-img-2">
                    <a href=""><img src="<?= esc_url($experience3_img_url); ?>" loading="lazy" alt="Kanishk Chaudhary"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="dashed-line"></div>
    <div class="media" id="media">
        <h3>SOCIAL MEDIA</h3>
        <div class="media-cards">
            <a href="https://www.linkedin.com/in/kanishk-chaudhary">
                <div class="media-card">
                    <img src="https://img.icons8.com/bubbles/100/linkedin.png" alt="linkedin" />
                    <h4><?= $social1_title; ?></h4>
                </div>
            </a>
            <a href="https://instagram.com/kanishk.chaudharyy">
                <div class="media-card">
                    <img src="https://img.icons8.com/clouds/100/instagram-new--v2.png" alt="instagram" />
                    <h4><?= $social2_title; ?></h4>
                </div>
            </a>
            <a href="https://leetcode.com/u/Kanishk-Chaudhary/">
                <div class="media-card">
                    <img src="https://img.icons8.com/external-tal-revivo-filled-tal-revivo/50/external-level-up-your-coding-skills-and-quickly-land-a-job-logo-filled-tal-revivo.png"
                        alt="leetcode">
                    <h4><?= $social3_title; ?></h4>
                </div>
            </a>
            <a href="https://discord.gg/umHHMdBatp">
                <div class="media-card">
                    <img src="https://img.icons8.com/clouds/100/discord-logo.png" alt="discord" />
                    <h4><?= $social4_title; ?></h4>
                </div>
            </a>
            <a href="https://github.com/devkanix">
                <div class="media-card">
                    <img src="https://img.icons8.com/clouds/100/github.png" alt="github" />
                    <h4><?= $social5_title; ?></h4>
                </div>
            </a>
        </div>
    </div>
    <div class="dashed-line"></div>
    <div class="blog" id="blog">
        <h3>BLOGS</h3>
        <div class="blog-cards">
            <a href="https://kanishk-chaudhary.medium.com/aws-simple-queue-service-18e807428b9c">
                <div class="blog-card">
                    <h4><?= $blog1_title; ?></h4>
                </div>
            </a>
        </div>
    </div>
    <div class="dashed-line"></div>
    <div class="contact" id="contact">
    <h3>CONTACT ME</h3>
    <form action="<?= get_stylesheet_directory_uri() ?>/process_form.php" method="POST">
    <input type="hidden" name="action" value="contact_form">
    <label for="email">Email:</label>
    <input type="email" id="email" name="user_email" required>
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
    <button type="submit">Submit</button>
</form>

</div>


<?php
// var_dump($hero_img);
 get_footer();