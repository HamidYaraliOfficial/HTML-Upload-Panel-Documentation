<?php
// Developed by Hamid Yarali
// GitHub: https://github.com/HamidYaraliOfficial
// Instagram: https://www.instagram.com/hamidyaraliofficial?igsh=MWpxZjhhMHZuNnlpYQ==
// Telegram: @Hamid_Yarali

$uploadDir = __DIR__ . '/uploads/';
if(!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
$countFile = $uploadDir.'count.txt';
if(!file_exists($countFile)) file_put_contents($countFile, '0');

$totalUploads = (int)file_get_contents($countFile);
$linkOutput = '';

if(isset($_FILES['htmlfile'])){
    $file = $_FILES['htmlfile'];
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if($ext === 'html'){
        $randomNumber = rand(1000000000, 9999999999);
        $subDir = $uploadDir."sub$randomNumber";
        mkdir($subDir, 0777, true);
        move_uploaded_file($file['tmp_name'], "$subDir/index.html");
        $totalUploads++;
        file_put_contents($countFile, $totalUploads);
        $host = $_SERVER['HTTP_HOST'];
        $linkOutput = "http://$host/uploads/sub$randomNumber/index.html";
    } else {
        $error = [
            'en' => "Only HTML files are allowed.",
            'zh' => "仅允许上传 HTML 文件。",
            'ru' => "Разрешены только HTML файлы.",
            'fa' => "فقط فایل‌های HTML مجاز هستند."
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HTML Upload Panel</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<style>
body { font-family: 'Roboto', sans-serif; background: #f9f9f9; color:#333; margin:0; padding:0; }
.container { max-width: 90%; margin: 30px auto; }
.glass { background: rgba(255,255,255,0.8); backdrop-filter: blur(15px); border-radius: 20px; padding: 30px; box-shadow: 0 8px 32px rgba(0,0,0,0.1); }
button { border-radius: 15px; border: 1px solid rgba(0,0,0,0.1); padding: 15px; width: 100%; font-weight: bold; transition: all 0.3s ease; backdrop-filter: blur(5px); background: rgba(255,255,255,0.6); color:#333; }
button:hover { transform: scale(1.05); background: rgba(255,255,255,0.9); }
input[type="file"] { width: 100%; padding: 15px; border-radius: 15px; background: rgba(255,255,255,0.6); color:#333; border: 1px solid rgba(0,0,0,0.1); }
.header { display:flex; flex-direction:column; align-items:center; margin-bottom:20px; text-align:center; }
.header h1 { font-size:2.5rem; font-weight:700; margin-bottom:10px; }
.description { margin-bottom:20px; padding:15px; background: rgba(220,220,220,0.4); border-radius:15px; font-size:1rem; line-height:1.5; color:#111; }
.output-link { margin-top:20px; padding:15px; border-radius:15px; background: rgba(0,200,255,0.1); word-break:break-all; text-align:center; font-weight:bold; color:#0077cc; }
.error { margin-top:20px; padding:15px; border-radius:15px; background: rgba(255,0,0,0.2); text-align:center; color:#cc0000; }
@media(max-width:768px){ .header h1{ font-size:2rem; } button{ padding:12px; } input[type="file"]{ padding:12px; } .description{ font-size:0.95rem; } }
</style>
</head>
<body>
<div class="container">
<div class="glass">
<div class="header">
<h1>
<?php
    $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
    echo [
        'en' => "HTML Upload Panel",
        'zh' => "HTML 上传面板",
        'ru' => "Панель загрузки HTML",
        'fa' => "پنل آپلود HTML"
    ][$lang];
?>
</h1>
<p class="text-lg">
<?php
    echo [
        'en' => "Total uploads: $totalUploads",
        'zh' => "总上传数: $totalUploads",
        'ru' => "Всего загрузок: $totalUploads",
        'fa' => "تعداد کل آپلودها: $totalUploads"
    ][$lang];
?>
</p>
</div>
<div class="description">
<p>
<?php
    echo [
        'en' => "Welcome to the HTML Upload Panel! This tool allows you to upload only <strong>HTML files</strong>. Once uploaded, a unique link will be generated instantly without leaving this page. You can share the link wherever you want. The system is mobile-friendly, modern, and designed to give a clean, elegant experience. Make sure your file has a <strong>.html</strong> extension.",
        'zh' => "欢迎使用 HTML 上传面板！此工具仅允许上传 <strong>HTML 文件</strong>。上传后，将立即生成一个唯一链接，无需离开此页面。您可以随意分享该链接。系统支持移动设备，设计现代且优雅，确保您的文件具有 <strong>.html</strong> 扩展名。",
        'ru' => "Добро пожаловать в панель загрузки HTML! Этот инструмент позволяет загружать только <strong>HTML файлы</strong>. После загрузки сразу же генерируется уникальная ссылка без необходимости покидать страницу. Вы можете делиться ссылкой где угодно. Система адаптирована для мобильных устройств, современна и разработана для удобного и элегантного использования. Убедитесь, что ваш файл имеет расширение <strong>.html</strong>.",
        'fa' => "به پنل آپلود HTML خوش آمدید! این ابزار فقط اجازه آپلود <strong>فایل‌های HTML</strong> را می‌دهد. پس از آپلود، یک لینک منحصر به فرد به‌صورت فوری و بدون ترک صفحه ایجاد می‌شود. می‌توانید لینک را هر کجا که می‌خواهید به اشتراک بگذارید. این سیستم برای موبایل مناسب، مدرن و طراحی‌شده برای ارائه تجربه‌ای تمیز و شیک است. مطمئن شوید که فایل شما دارای پسوند <strong>.html</strong> باشد."
    ][$lang];
?>
</p>
</div>
<?php if(isset($error)){ echo "<div class='error'>{$error[$lang]}</div>"; } ?>
<form method="POST" enctype="multipart/form-data" id="uploadForm">
<input type="file" name="htmlfile" accept=".html" required>
<button type="submit">
<?php
    echo [
        'en' => "Upload HTML",
        'zh' => "上传 HTML",
        'ru' => "Загрузить HTML",
        'fa' => "آپلود HTML"
    ][$lang];
?>
</button>
</form>
<?php if($linkOutput){ echo "<div class='output-link'>" . [
    'en' => "Your link: <a href='$linkOutput' class='hover:underline' target='_blank'>$linkOutput</a>",
    'zh' => "您的链接: <a href='$linkOutput' class='hover:underline' target='_blank'>$linkOutput</a>",
    'ru' => "Ваша ссылка: <a href='$linkOutput' class='hover:underline' target='_blank'>$linkOutput</a>",
    'fa' => "لینک شما: <a href='$linkOutput' class='hover:underline' target='_blank'>$linkOutput</a>"
][$lang] . "</div>"; } ?>
</div>
</div>
<script>
document.getElementById('uploadForm').addEventListener('submit', function(e){
    e.preventDefault();
    let formData = new FormData(this);
    fetch('?lang=<?php echo $lang; ?>', { method:'POST', body: formData })
    .then(response => response.text())
    .then(html => { document.body.innerHTML = html; });
});
</script>
</body>
</html>