<?php
include 'functions.php';

$platform = 'pc';
$epicNickname = '';

$playerStats = getPlayerStats($platform, $epicNickname);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable= no"/>
    <title>Fortnite Player Stats</title>
    <style>
    body{
        font-family: 'fortnight';
        background:#1e1e1e;
        color: #fff;
        padding: 10px;
        }

        </style>
</head>
<body>
<div style="margin-bottom: 20px; font-size:48px"><div>FORTNITE PLAYER STATS</div>
<div style="font-size: 28px;">
Player <?php echo $epicNickname; ?> 
on <?php echo $platform;?>
</div>
</div>
<div style="width:100%; color:#00;background:#f1ed62;fontsize:26px; display:inline-block">
<div style="padding:5px">
<div style="float:left">LIFETIME</div>
</div>
</div>
    <ul style="list-style: none; padding: 0px; margin:0px; margin-bottom: 20px">
    <?php foreach ($playeStats['lifeTimeStats'] as $stat) : ?>
    <?php endforeach; ?>
    <li style="display:inline-block; border: 1px solid #363636; padding: 10px; margin-left: 10px">
    <div>
    <div style="color:#9a9a9a; font-size: 16px;">
    <?php echo $stat['key']; ?>
    </div>
    <div style="font-size:22px">
    <?php echo $stat['value']; ?>
    </div>
    </div>
    </li>
    
    </ul>
    <div style="width:100%; color:#00;background:#f1ed62;fontsize:26px; display:inline-block">
<div style="padding:5px">
<div style="float:left">SOLO</div>
</div>
</div>
<ul style="list-style: none; padding: 0px; margin:0px; margin-bottom: 20px">
    <?php foreach ($playeStats['stats']['p2'] as $stat) : ?>
    <?php if ($stat['value']) : ?>
    <li style="display:inline-block; border: 1px solid #363636; padding: 10px; margin-left: 10px">
    <div>
    <div style="color:#9a9a9a; font-size: 16px;">
    <?php echo $stat['label']; ?>
    </div>
    <div style="font-size:22px">
    <?php echo $stat['displayValue']; ?>
    </div>
        <div style="color: #9a9a9a; font-size:14px;margin-top:5px;">Rank</div>
        <div style="font-size:18px;">
        <?php if ( isset($stat['rank'])) : ?>
        <?php echo number_format($stat['rank']); ?>
        <?php else : ?>
        -
        <?php endif; ?>
        </div>
    </div>
    </li>
    <?php endif; ?>
    <?php endforeach; ?>
    </ul>
    <div style="width:100%; color:#00;background:#f1ed62;fontsize:26px; display:inline-block">
<div style="padding:5px">
<div style="float:left">DUOS</div>
</div>
</div>
<ul style="list-style: none; padding: 0px; margin:0px; margin-bottom: 20px">
    <?php foreach ($playeStats['stats']['p10'] as $stat) : ?>
    <?php if ($stat['value']) : ?>
    <li style="display:inline-block; border: 1px solid #363636; padding: 10px; margin-left: 10px">
    <div>
    <div style="color:#9a9a9a; font-size: 16px;">
    <?php echo $stat['label']; ?>
    </div>
    <div style="font-size:22px">
    <?php echo $stat['displayValue']; ?>
    </div>
        <div style="color: #9a9a9a; font-size:14px;margin-top:5px;">Rank</div>
        <div style="font-size:18px;">
        <?php if ( isset($stat['rank'])) : ?>
        <?php echo number_format($stat['rank']); ?>
        <?php else : ?>
        -
        <?php endif; ?>
        </div>
    </div>
    </li>
    <?php endif; ?>
    <?php endforeach; ?>
    </ul>
    <div style="width:100%; color:#00;background:#f1ed62;fontsize:26px; display:inline-block">
<div style="padding:5px">
<div style="float:left">SQUADS</div>
</div>
</div>
<ul style="list-style: none; padding: 0px; margin:0px; margin-bottom: 20px">
    <?php foreach ($playeStats['stats']['p9'] as $stat) : ?>
    <?php if ($stat['value']) : ?>
    <li style="display:inline-block; border: 1px solid #363636; padding: 10px; margin-left: 10px">
    <div>
    <div style="color:#9a9a9a; font-size: 16px;">
    <?php echo $stat['label']; ?>
    </div>
    <div style="font-size:22px">
    <?php echo $stat['displayValue']; ?>
    </div>
        <div style="color: #9a9a9a; font-size:14px;margin-top:5px;">Rank</div>
        <div style="font-size:18px;">
        <?php if ( isset($stat['rank'])) : ?>
        <?php echo number_format($stat['rank']); ?>
        <?php else : ?>
        -
        <?php endif; ?>
        </div>
    </div>
    </li>
    <?php endif; ?>
    <?php endforeach; ?>
    </ul>
</body>
</html>