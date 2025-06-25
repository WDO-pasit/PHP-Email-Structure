<?php 
    //define('BASE_URL', 'https://ohmtool.com/');
    define('BASE_URL', 'http://localhost/Git/Pasit/website_php/'); 
    define('SECURE_ACCESS', true);
?>
<?php
$pageConfig = [
    "title" => "หน้าหลักสั่งทำเว็บ | Web Dev Ohm",
    "description" => "ระบบสั่งทำ ในเว็บไซต์ Web Dev OHM ระบบสั่งทำคือการเปิดโอกาสให้ผู้ใช้บริการสามารถแสดงความต้องการได้อย่างเต็มที่ แดชบอร์ดติตามงาน ไม่ทำด้วยแแต่ให้ออกแบบระบบให้เริ่มต้น15000 landingweb multiweb  SEO, URL Friendly, Sitemap.xml blacklink ครบชุด 5 Page เช่น หน้าแรก สินค้า เกี่ยวกับเรา ติดต่อ รีวิว ส่งมอบ Source Code และสิทธิ์ทั้งหมดหลังชำระเงิน ",
    "keywords" => "สั่งทำ Google หรือ OAuth อื่น ๆ SEO, URL Friendly, Sitemap.xml",
    "canonical" => "https://webdevohm.com/custom",
    "og_image" => "https://webdevohm.com/asset/img/Normal/custom.webp",
    "og_url" => "https://webdevohm.com/custom",
    "og_type" => "website"
];
?>
<?php include(__DIR__ . '/component/header.php'); ?>
<link rel="stylesheet" href="<?= BASE_URL ?>asset/css/styles_work.css">
  <main>
        <section>
            <div class="home-coming">
                <h1>My work space</h1>
                <div class="stack">
                    <div class="work">
                        <h2>Web Application</h2>
                        <?php include(__DIR__ . '/component/WebApplication.php'); ?>
                    </div>
                    <div class="work">
                        <h2>My Project Now</h2>
                        <?php include(__DIR__ . '/component/MyProjectNow.php'); ?>
                    </div>
                    <div class="work">
                        <h2>Success</h2>
                        <?php include(__DIR__ . '/component/Success.php'); ?>
                    </div>

                    <div class="work">
                        <h2>Monthly Schedule</h2>
                        <?php include(__DIR__ . '/component/Schedule.php'); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include(__DIR__ . '/component/footer.php'); ?>