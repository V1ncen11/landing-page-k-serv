<?php
$dir = 'd:/laragon/www/landing-page-k-serv/public/images/portofolio/';
foreach (glob($dir . '*.png') as $file) {
    echo "Compressing: " . basename($file) . "\n";
    $content = file_get_contents($file);
    $img = @imagecreatefromstring($content);
    if (!$img) {
        echo "Failed to load\n";
        continue;
    }
    $w = imagesx($img);
    $h = imagesy($img);
    $new_w = intval($w / 2);
    $new_h = intval($h / 2);
    $new_img = imagecreatetruecolor($new_w, $new_h);
    // Preserving transparency if it had any
    imagealphablending($new_img, false);
    imagesavealpha($new_img, true);
    // Fill transparent background
    $transparent = imagecolorallocatealpha($new_img, 0, 0, 0, 127);
    imagefill($new_img, 0, 0, $transparent);
    imagecopyresampled($new_img, $img, 0, 0, 0, 0, $new_w, $new_h, $w, $h);
    
    // Save as WEBP but keep the .png extension so we don't break the database
    imagewebp($new_img, $file, 80); // 80 quality is very small
    
    imagedestroy($img);
    imagedestroy($new_img);
}
echo "Done!\n";
