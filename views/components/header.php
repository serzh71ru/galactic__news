<?php
    function asset($path){
        $baseUrl = '/public/assets';
        return $baseUrl . '/' . ltrim($path, '/');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($data['title'] ?? 'Главная'); ?></title>
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
    
</head>
<body>
    <div class="page">
        <header class="header">
            <div class="logo">
                <img src="<?php echo asset('/images/logo.png'); ?>" alt="logo">
            </div>
            <h1 class="logo__title">ГАЛАКТИЧЕСКИЙ ВЕСТНИК</h1>
        </header>

