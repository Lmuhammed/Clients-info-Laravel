<h1>مشروع إدارة معلومات الزبناء باستخدام Laravel</h1>
<div style="text-align: center; border: 2px solid yellow; padding: 10px;">
<img src="/public/repoBackgrounds.jpg" alt="Logo">
<!-- 
https://unsplash.com/photos/person-working-on-blue-and-white-paper-on-board-qWwpHwip31M
Free to use under the Unsplash License
-->

مشروع لارافل لإدارة معلومات الزبناء : معلومات التواصل ، المشتريات والدفعات
<br>
كان هدفي من هذا المشروع تقوية معرفتي بإطار العمل لارافل وقد تمكنت من خلال العمل على هذا المشروع : طورت معرفتي بعدد من مكونات الإطار ك :

    -Laravel components
    -Laravel Authentication (Using Auth class)
    -Laravel Authorization using Policies & middlewares
    -Form validation 
    -Basic CRUD

<br>
0.الميزات

    إضافة وتعديل وحذف بيانات الزبناء
    عرض قائمة بجميع الزبناء مع إمكانية البحث
    تسجيل الدخول والخروج للمستخدمين
    إدارة صلاحيات المستخدمين

1.التثبيت

    قم بتحميل المشروع من مستودع GitHub

```php
git clone https://github.com/LM-47/Clients-info-Laravel.git
```

    قم بتثبيت جميع الاعتماديات باستخدام Composer 

```php
composer install
cp .env.example .env
php artisan key:generate
```
قم بإنشاء قاعدة بيانات جديدة وقم بتعديل ملف .env لتوافق إعدادات القاعدة
قم بتجهيز قاعدة البيانات 
```php
php artisan migrate
```
قم بتشغيل الخادم المحلي 

```php 
php artisan serve
```

2.الإستخدام

إفتح متصفحك المفضل ،وأدخل 
```php
http://127.0.0.1:8000/
```
</div>