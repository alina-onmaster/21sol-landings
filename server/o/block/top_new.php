<div class="navigation_menu">
   <div class="container">
     <div class="navigation_items_block">
		<a href="/" class="navigation_logo">
		  	<img src="/images/main_new/header_logo.png" alt="">
		</a>
	  <div class="navigation_list_item">
	      <?php /*
		  <ul class="nav_item_list">
		     <li><a href="">О компании</a></li>
			 <li><a href="">Акции</a></li>
			 <li><a href="">Новости</a></li>
			 <li><a href="">Объекты в продаже</a></li>
			 <li><a href="">C ремонтом</a></li>
			 <li><a href="">Трейд-ин</a></li>
			 <li><a href="">Условия покупки</a></li>
			 <li><a href="">Контакты</a></li> 
		  </ul>
		  */ ?>

			<ul class="nav_item_list">
				<?php
				$menu = $DB->select('SELECT * FROM ?_map WHERE s_close=? AND menuname=? ORDER BY datepost', 0, 'top');
				$pos  = 1;
				foreach($menu as $m){
					if(!empty($m['menutitle'])) $m['title'] = $m['menutitle'];
					if($m['title'] == 'Объекты в продаже') $m['title'] = 'Объекты <span> в продаже</span>';
					if($m['title'] == 'Условия покупки')   $m['title'] = 'Условия <span> покупки</span>';
					/*if($m['title'] == 'Документация')   $m['title'] = 'Документы';*/
					/* if($m['title'] == 'Ход строительства')   $m['title'] = 'Ход стройки';*/
					if($m['title'] == 'Trade-in')   $m['title'] = 'Трейд-ин';
					echo "<li".($pos == 1 ? " class='first'" : ""). /*($m['id'] == 22442 || $m['id'] == 22415 ? " class='menumini'" : "").*/"><a href='".(empty($m['link']) ? $m['adr'] : $m['link'])."'>{$m['title']}</a>";
					/*
					if($m['id'] != 22413 && $m['id'] != 22442 && $m['id'] != 22439){
						$menu1 = $DB->select('SELECT * FROM ?_map WHERE s_close=? AND s_map=1 AND parent_id=? AND id!=22909 ORDER BY sort_id', 0, $m['id']);
						if($menu1){
							echo "<ul>";
							foreach($menu1 as $m1){
								if(!empty($m1['menutitle'])) $m1['title'] = $m1['menutitle'];
								echo "<li><a href='".(empty($m1['link']) ? $m1['adr'] : $m1['link'])."'>{$m1['title']}</a></li>";
							}
							echo "</ul>";
						}
					}
					*/
					echo "</li>";
					$pos++;
				}
				?>
			</ul>
	  </div>
	  <div class="navigation_contacts">
          <a href="viber://chat?number=%2B79373726206" class="nav_phone nav_phone--viber">8 937 372 62 06</a>
          <a href="https://t.me/udacha21_bot" class="nav_phone nav_phone--telegram">@udacha21_bot</a>
	     <a href="tel:8352410000" class="nav_phone">(8352) 41-00-00</a>
		 <div class="nav_work_time">Без обеда и выходных</div>
	  </div>
   	</div>  
   </div>
</div>