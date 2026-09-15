<?php $page=basename($_SERVER['PHP_SELF']); ?>
<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title><?=htmlspecialchars($title??'AssetDesk')?></title><link rel="stylesheet" href="css/style.css"></head><body>
<aside><div class="logo"><b>IT</b><span>AssetDesk<small>Service Management</small></span></div>
<nav><a class="<?=$page==='index.php'?'on':''?>" href="index.php">▦ Dashboard</a><a class="<?=$page==='employees.php'?'on':''?>" href="employees.php">◉ Employees</a><a class="<?=$page==='assets.php'?'on':''?>" href="assets.php">▣ IT Assets</a><a class="<?=$page==='tickets.php'?'on':''?>" href="tickets.php">◈ Service Tickets</a></nav><div class="live">● RDS Connected</div></aside>
<main><header><div><small>IT OPERATIONS</small><h1><?=htmlspecialchars($title??'Dashboard')?></h1></div><div class="user">SK &nbsp; Admin</div></header>