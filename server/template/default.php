<?php require_once "o/block/head.php"; ?>

<?php

if($PAGE['id'] == 1 || $PAGE['id'] == 23387 || $PAGE['id'] == 23467){
    echo "<div class='main_test'><div>";
} else {
	echo "<div class='width1200 clearfix pagen".($PAGE['id'] != 1 ? " top170" : "")."'><div>";
}

if($PAGE['parent_id'] == 22442 || $PAGE['parent_id'] == 22697 || $PAGE['id'] == 22411){
//	$PAGE['title'] = 'Ход строительства - '.$PAGE['title'];
	$PAGE['title'] = str_replace(" ", "&nbsp;", $PAGE['title']);
}
if (strpos($PAGE['title'], ' ') !== false) {
    list($t1, $t2) = explode(' ', $PAGE['title'], 2);
} else {
  $t1 = $PAGE['title'];
}

if($PAGE['id'] != 1 && $PAGE['parent_id'] != 0) echo "<div class='navigation'><a href='/'>главная</a> <span style='font-size:8px'>/</span> ".strtolower(navigation_line())."</div>";
if($PAGE['s_title'] == 1) echo "<h1 class='h2page anim'><span>{$t1}</span> {$t2}</h1>";

if($PAGE['parent_id'] == 22697 && !empty($PAGE['pics']) && $PAGE['id'] != 23405 && $PAGE['id'] != 23505){
	if ($PAGE['id'] == 23405) {
		echo '<p class="prod_desc">9-ти этажный дом с вентилируемым фасадом и автономным отоплением по ул. Асламаса, рядом с ГП "Лента"</p>';
	}
	if ($PAGE['id'] == 23440) {
	echo "<div class='prod prod__action' style='margin-bottom:15px'>\n";
	}
	else {
	echo "<div class='prod' style='margin-bottom:15px'>\n";
	}

	$cat_pics = glob("upload/Image/catalog/{$PAGE['pics']}-*.jpg");
//	$cat_pics = array_combine(array_map("filemtime", $cat_pics), $cat_pics);
//	if(moderator()) pr($cat_pics);
	ksort($cat_pics);
	if($cat_pics){
		foreach($cat_pics as $v){
			$namep       = basename($v,".jpg");
			echo "<a href='/upload/Image/catalog/big/{$namep}.jpg?ver=2.1' data-caption='{$PAGE['title']}' data-fancybox='fotorajon'>";
			echo "<div><img src='/upload/Image/catalog/big/{$namep}.jpg?ver=2.1'></div>";
			echo "</a>";
		}
	}
	if($PAGE['id'] == 22700){
		echo "<a style='display:block;position:relative' href='https://www.youtube.com/watch?v=EhemgFTlGno' data-caption='{$PAGE['title']}' data-fancybox='fotorajon'><div><img src='//img.youtube.com/vi/EhemgFTlGno/hqdefault.jpg' style='width:110%;position:relative;top:-40px'><span class='b-imgHover-yt'></span></div></a>";
	}
	echo "</div>\n";
}

rightmenu($PAGE);
printpage($matchespage[1]);
?>
</div></div>

<?php require_once "o/block/foot.php"; ?>
