<h1>مشروع إدارة معلومات الزبناء باستخدام Laravel</h1>
<div style="text-align: center; border: 2px solid yellow; padding: 10px;">
<img src="/public/repoBackgrounds.jpg" alt="Logo">
<!-- 
https://unsplash.com/photos/person-working-on-blue-and-white-paper-on-board-qWwpHwip31M
Free to use under the Unsplash License
-->
</div>

هذا المشروع هو نظام إدارة معلومات الزبناء يتم بناؤه باستخدام إطار العمل Laravel. يهدف المشروع إلى تسهيل عمليات إدارة بيانات الزبناء بشكل فعال ومنظم.
الميزات

    إضافة وتعديل وحذف بيانات الزبناء
    عرض قائمة بجميع الزبناء مع إمكانية البحث
    تسجيل الدخول والخروج للمستخدمين
    إدارة صلاحيات المستخدمين

1.التثبيت

    قم بتحميل المشروع من مستودع GitHub
    قم بتثبيت جميع الاعتماديات باستخدام Composer 
```php
composer install
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
<span style="color: yellow;">أو يمكنك إستخدام مشروعنا [Laravel Setup](https://github.com/L-mohamed/Setup-Laravel)</span>


2.الإستخدام

    قم بتسجيل الدخول باستخدام بيانات المستخدم الافتراضية
    استكشف واستخدم ميزات النظام لإدارة بيانات الزبناء

3.المساهمة

إذا كنت ترغب في المساهمة في تطوير هذا المشروع، يرجى فتح طلب سحب (Pull Request) على GitHub.
المؤلف

ترخيص

هذا المشروع مرخص بموجب رخصة [نوع الترخيص]. انظر ملف LICENSE للمزيد من التفاصيل.
