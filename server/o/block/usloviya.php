<?php

$res = $DB->select('SELECT * FROM ?_map WHERE s_close=? AND parent_id=? AND menuname=? ORDER BY sort_id', 0, $PAGE['id'], '');

if($res){
	echo "<table class='nobord tabletd'><tr><td style='padding-right:100px'>";
	foreach($res as $v){
		echo "<a name='{$v['dir']}'></a><div style='clear:both'></div>";
		list($t1, $t2) = explode(' ', $v['title'], 2);
		echo "<h2 class='h2page'><span>{$t1} {$t2}</span></h2>";
		$res1 = $DB->select('SELECT * FROM ?_map WHERE s_close=? AND parent_id=? AND menuname=? ORDER BY sort_id', 0, $v['id'], '');
		if($res1){
			echo "<br><br>";
			echo "<div class='usloviya'>";
			foreach($res1 as $v2){
				echo "<a href='".(empty($v2['link']) ? $v2['adr'] : $v2['link'])."'>";
				$pics = '';
				if(!empty($v2['pics'])){
					$cat_pics    = glob("upload/Image/catalog/{$v2['pics']}-*.jpg");
					$namep       = basename($cat_pics[0],".jpg");
				}
				if(!empty($v2['menutitle'])) $v2['title'] = $v2['menutitle'];
				echo "<img src='/upload/Image/catalog/big/{$namep}.jpg' style='border:1px solid #ddd'>";
				echo "<span>{$v2['title']}<br><i>подробнее</i></span>";
				echo "</a>";
			}
			echo "</div><br>";
		}
		echo "<p>{$v['pretitle']}</p>";
		echo "<div class='nextexta'><a href='#'>подробнее</a></div>";
		echo "<div class='nextext'>{$v['text']}</div>";
	}
	echo "</td><td style='width:380px'>";
	?>
	<div class='rightzav'>
		<p><b>Оставь заявку и получи одобрение по ипотеке</b></p>
		<p>&#9990;&nbsp;8 (8352) 41-00-00<br>с 8:00 до  21:00</p>
		<p><b>или отправьте
                <br>заявку</b></p>
		<div style='width:100%' class="form_mortgage">
            <script data-b24-form="inline/2/ak3ut7" data-skip-moving="true">
                    (function(w,d,u){
                            var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
                            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                    })(window,document,'https://cdn-ru.bitrix24.ru/b4347333/crm/form/loader_2.js');
            </script>
		</div>
	</div>
	<?php
	echo "</td>";
	echo "</tr></table>";
}

?>