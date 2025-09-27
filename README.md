# HTML Upload Panel Documentation

## Persian (فارسی)

### معرفی پروژه
این پروژه یک پنل آپلود فایل HTML است که با استفاده از PHP و Tailwind CSS توسعه یافته است. این ابزار امکان آپلود فایل‌های HTML را فراهم می‌کند و پس از آپلود، یک لینک منحصر به فرد به‌صورت فوری ایجاد می‌شود که می‌توانید آن را به اشتراک بگذارید. رابط کاربری این سیستم مدرن، کاربرپسند و سازگار با دستگاه‌های موبایل است و از چندزبانگی (فارسی، انگلیسی، چینی و روسی) پشتیبانی می‌کند.

### ویژگی‌ها
- **آپلود فایل HTML**: فقط فایل‌های با پسوند .html پذیرفته می‌شوند.
- **تولید لینک منحصر به فرد**: ایجاد لینک دسترسی به فایل آپلودشده به‌صورت فوری.
- **چندزبانگی**: پشتیبانی از رابط کاربری به زبان‌های فارسی، انگلیسی، چینی و روسی.
- **طراحی مدرن**: استفاده از Tailwind CSS و افکت‌های شیشه‌ای برای رابط کاربری زیبا و حرفه‌ای.
- **سازگاری با موبایل**: طراحی واکنش‌گرا برای استفاده آسان در دستگاه‌های مختلف.
- **شمارنده آپلودها**: نمایش تعداد کل فایل‌های آپلودشده.

### پیش‌نیازها
- PHP 7.4 یا بالاتر
- وب‌سرور (مانند Apache یا Nginx)
- دسترسی به پوشه‌ای با مجوز نوشتن برای ذخیره فایل‌های آپلودشده

### نصب و راه‌اندازی
1. فایل `index.php` را در پوشه اصلی وب‌سرور خود قرار دهید.
2. اطمینان حاصل کنید که پوشه `uploads` در همان مسیر دارای مجوز نوشتن (777) است.
3. برای تغییر زبان، پارامتر `lang` را در URL تنظیم کنید (مثال: `?lang=fa` برای فارسی).
4. مرورگر را باز کنید و به آدرس فایل `index.php` مراجعه کنید.

### ساختار فایل‌ها
- `index.php`: فایل اصلی حاوی منطق PHP و رابط کاربری.
- `uploads/`: پوشه‌ای برای ذخیره فایل‌های HTML آپلودشده.
- `uploads/count.txt`: فایل متنی برای ذخیره تعداد کل آپلودها.

### توسعه‌دهنده
توسعه‌یافته توسط حمید یارعلی  
- گیت‌هاب: [HamidYaraliOfficial](https://github.com/HamidYaraliOfficial)  
- اینستاگرام: [hamidyaraliofficial](https://www.instagram.com/hamidyaraliofficial?igsh=MWpxZjhhMHZuNnlpYQ==)  
- تلگرام: [@Hamid_Yarali](https://t.me/Hamid_Yarali)

---

## English

### Project Overview
This project is an HTML file upload panel developed using PHP and Tailwind CSS. It allows users to upload HTML files, generating a unique link instantly upon upload for sharing. The system features a modern, user-friendly, and mobile-responsive interface, with support for multiple languages (Persian, English, Chinese, and Russian).

### Features
- **HTML File Upload**: Accepts only files with a .html extension.
- **Unique Link Generation**: Instantly creates a unique link for the uploaded file.
- **Multilingual Support**: Interface available in Persian, English, Chinese, and Russian.
- **Modern Design**: Utilizes Tailwind CSS and glassmorphism effects for a sleek, professional UI.
- **Mobile Compatibility**: Responsive design for seamless use across devices.
- **Upload Counter**: Displays the total number of uploaded files.

### Requirements
- PHP 7.4 or higher
- Web server (e.g., Apache or Nginx)
- Write permissions for the uploads directory

### Installation and Setup
1. Place the `index.php` file in your web server’s root directory.
2. Ensure the `uploads` directory exists and has write permissions (777).
3. Set the `lang` parameter in the URL to switch languages (e.g., `?lang=en` for English).
4. Open a browser and navigate to the `index.php` file.

### File Structure
- `index.php`: Main file containing PHP logic and the user interface.
- `uploads/`: Directory for storing uploaded HTML files.
- `uploads/count.txt`: Text file storing the total number of uploads.

### Developer
Developed by Hamid Yarali  
- GitHub: [HamidYaraliOfficial](https://github.com/HamidYaraliOfficial)  
- Instagram: [hamidyaraliofficial](https://www.instagram.com/hamidyaraliofficial?igsh=MWpxZjhhMHZuNnlpYQ==)  
- Telegram: [@Hamid_Yarali](https://t.me/Hamid_Yarali)

---

## Chinese (中文)

### 项目简介
该项目是一个使用 PHP 和 Tailwind CSS 开发的 HTML 文件上传面板。用户可以上传 HTML 文件，上传后立即生成一个唯一的分享链接。该系统具有现代、用户友好且适配移动设备的界面，支持多语言（波斯语、英语、中文和俄语）。

### 功能
- **HTML 文件上传**：仅接受 .html 扩展名的文件。
- **唯一链接生成**：上传后立即生成可分享的唯一链接。
- **多语言支持**：界面支持波斯语、英语、中文和俄语。
- **现代设计**：使用 Tailwind CSS 和玻璃态效果打造美观专业的界面。
- **移动设备兼容**：响应式设计，适配多种设备。
- **上传计数器**：显示总上传文件数量。

### 要求
- PHP 7.4 或更高版本
- 网络服务器（如 Apache 或 Nginx）
- 上传目录的写入权限

### 安装和设置
1. 将 `index.php` 文件放置在网络服务器的根目录中。
2. 确保 `uploads` 目录存在并具有写入权限（777）。
3. 通过 URL 中的 `lang` 参数切换语言（例如，`?lang=zh` 用于中文）。
4. 打开浏览器并访问 `index.php` 文件。

### 文件结构
- `index.php`：包含 PHP 逻辑和用户界面的主文件。
- `uploads/`：存储上传的 HTML 文件的目录。
- `uploads/count.txt`：存储总上传次数的文本文件。

### 开发者
由 Hamid Yarali 开发  
- GitHub: [HamidYaraliOfficial](https://github.com/HamidYaraliOfficial)  
- Instagram: [hamidyaraliofficial](https://www.instagram.com/hamidyaraliofficial?igsh=MWpxZjhhMHZuNnlpYQ==)  
- Telegram: [@Hamid_Yarali](https://t.me/Hamid_Yarali)