

<?php
if (!isset($pageConfig)) {
    $pageConfig = [
        "title" => "Pasit",
        "description" => "เว็บไซต์คุณภาพสูงที่เราพัฒนาขึ้น เหมือนคุณมีทีม Dev ส่วนตัว” พราะเราปรับให้จริง 
        ทดสอบให้จริง มีแดชบอร์ดจริง พร้อมให้คุณติดตามทุกขั้นตอน เช่าเว็บไซต์ (Rental) ซื้อเทมเพลตขาด (Buy) 
        สั่งทำ (Web Design) บริการให้เช่าที่เพียงจ่ายก็ไม่ต้องแตะโค้ดเราทำให้จนเสร็จ มีแพชบอร์ดให้ติดตามงาน มีบริการให้เลือกครบ",
        "keywords" => "เช่าเว็บไซต์ (Rental) ซื้อเทมเพลตขาด (Buy) สั่งทำเว็บ (Web Design)",
        "canonical" => "https://webdevohm.com",
        "og_image" => "https://webdevohm.com/asset/img/Profile/logo.webp",
        "og_url" => "https://webdevohm.com",
        "og_type" => "website"
    ];
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageConfig["title"]) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageConfig["description"]) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($pageConfig["title"]) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($pageConfig["keywords"]) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageConfig["description"]) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($pageConfig["og_image"]) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($pageConfig["og_url"]) ?>">
    <meta property="og:type" content="<?= htmlspecialchars($pageConfig["og_type"]) ?>">

    <link rel="stylesheet" href="<?= BASE_URL ?>asset/css/styles.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>asset/css/remixicon.css">
    
    <link rel="icon" href="https://webdevohm.com/asset/img/Profile/logo.png" type="image/png">
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

</head> 
<body>
    <header>
        <div class="head">
            <div class="text-header">
                <a href="<?= BASE_URL ?>"><i class="ri-file-line"></i>Portfolio <i class="ri-user-2-line"></i> Mr.Pasit Phonmanee</a>
            </div>

            <nav class="navbar-header">
                <a href="<?= BASE_URL ?>" class="navhome"><i class="ri-home-fill"></i> home</a>
                <a href="<?= BASE_URL ?>business" class="navhome"><i class="ri-arrow-right-circle-fill"></i> My work</a>
            </nav>

            <div class="icon">
                <button><i class="ri-phone-fill"></i></button>
            </div>
        </div>
        
    </header>
  
    
    