
<?php 
    //define('BASE_URL', 'https://ohmtool.com/'); 
    define('BASE_URL', 'http://localhost/Git/Pasit/website_php/'); 
    define('SECURE_ACCESS', true);
?>

<?php
$pageConfig = [
    "title" => "pasit workshop",
    "description" => "Dev mode in thailand",
    "keywords" => "Just use my work to your space",
    "canonical" => "https://webdevohm.com/custom",
    "og_image" => "https://webdevohm.com/asset/img/Normal/custom.webp",
    "og_url" => "https://webdevohm.com/custom",
    "og_type" => "website"
];
?>
<?php include(__DIR__ . '/component/header.php'); ?>
<link rel="stylesheet" href="<?= BASE_URL ?>asset/css/styles_index.css">
  <main>
        <section>
            <div class="home-coming">
                <h1>World <i class="ri-earth-fill"></i> of Pasit Developer with coding <i class="ri-code-box-fill"></i></h1>
 
                
                <div class="messege">
                    <h2>
                        How to be change <i class="ri-checkbox-circle-fill"></i>. It is when i think to be morethan the peple who is't see the vision. 1% of the man <i class="ri-user-2-line"></i> who want to success one of them is me.
                    This website u can dowload in <a href="https://github.com/WDO-pasit?tab=repositories"><i class="ri-github-fill"></i></a> give a star or donate <i class="ri-hand-heart-fill"></i> for free code and support to new project
                    </h2>
                                   <div class="model">
                    <model-viewer 
                        src="<?= BASE_URL ?>asset/model/Lion.glb"
                        alt="A 3D model"
                        auto-rotate
                        camera-controls
                        touch-action="pan-y"
                        style="pointer-events: auto;"
                        >
                    </model-viewer>
                </div>
                </div>
                <div class="card-profile">
                    <div class="img">
                        <img src="<?= BASE_URL ?>asset/img/ohm.png" alt="pasit" width="200px">
                    </div>
                    <div class="text-inside about-me" >
                        <h3>What about me <i class="ri-file-line"></i></h3>
                        <p>My name is Pasit Phonmanee</p>
                        <p>Love <i class="ri-heart-fill"></i> to Coder <i class="ri-code-box-fill"></i></p>
                        <p>Need to share <i class="ri-thumb-up-fill"></i> and found a new task!<i class="ri-check-double-fill"></i> New to find place to make the world happy</p>
                    </div>
                    <div class="text-inside text">
                        <div class="email-input">
                            <p>name <i class="ri-mail-fill"></i></p>
                            <input id="name" type="name" name="name"  required>
                        </div>
                        <div class="email-input">
                            <p>email <i class="ri-mail-fill"></i></p>
                            <input id="email" type="email" name="email"  required>
                        </div>
                        <div class="email">
                            <p>Request the task here</p>
                            <textarea id="message" name="message" required ></textarea>
                        </div>
                        <button  id="Btn" onclick="SendEmail()">Send email <i class="ri-mail-send-fill"></i></button>
                        <div id="result"></div>
                    </div>
                </div>

            </div>
            <div class="workshop">
                <div class="project">
                    <a href="<?= BASE_URL ?>myproject">
                        <div class="img-project">
                            <img src="<?= BASE_URL ?>asset/img/data.png" alt="pasit" width="300px">
                        </div>
                    </a>
                    <p style="text-align: center;">Showcase! & W.. space</p>
                </div>
                <div class="project">
                    <a href="https://webdevohm.com/home">
                        <div class="img-project">
                            <img src="<?= BASE_URL ?>asset/img/logo.webp" alt="pasit" width="300px">
                        </div>
                    </a>
                    <p style="text-align: center;">My start up!</p>
                </div>
            </div>
            <div class="messenger">
                <a href="https://www.facebook.com/pasit.phonmanee/"><p>send messenger</p><i class="ri-message-3-line"></i></a>
            </div>
        </section>
    </main>
    <script src="<?= BASE_URL ?>asset/js/3dMovement.js"></script>
    <script src="<?= BASE_URL ?>asset/js/MailSender.js"></script>
<?php include(__DIR__ . '/component/footer.php'); ?>