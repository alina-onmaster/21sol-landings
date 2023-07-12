<div class="preslider"></div>

<div style="display: none;"><?php echo $daysLeft;?></div>

<div class="main_slider_new">
    <div class="owl-carousel">
      <div class="slide_item slide_item--start-poz4">
        <div class="container">
          <div class="slide_item_block">
            <div class="small_title_action" style="
    display: inline-flex;
    align-items: center;
    gap: 15px;
">
              <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_411_15" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="2" y="0" width="24" height="28">
                  <path d="M4.66675 25.6666H9.33341M7.00008 25.6666V2.33331" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M23.3333 3.5H7V12.8333H23.3333L21 8.16667L23.3333 3.5Z" fill="white" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </mask>
                <g mask="url(#mask0_411_15)">
                  <path d="M0 0H28V28H0V0Z" fill="#23A4DD"/>
                </g>
              </svg>
              ОТКРЫТО БРОНИРОВНИЕ
            </div>
            <div class="big_title_action big_title_action_many" style="margin-top: 30px;" ><span style="color: red;"><br>ПОЗИЦИЯ 4</span></div>
            <div class="button_action"><a class="slider_button_action" href="/pozicii-v-prodazhe/poziciya-4/">Подробнее</a></div>
          </div>
        </div>
        <div class="slide_bg" style="background-image: url(/img/poz4/poz4-banner.jpg);"></div>
        <style>
          .slide_item--start-poz4 .slide_bg::before {
            display: none;
            content: "";
            position: absolute;
            top: 25px;
            left: 25px;
            right: 25px;
            bottom: 25px;
            width: auto;
            height: 165px;
            background: url(/img/poz4/poz4-banner-adv.png) no-repeat center top;
            background-size: contain;
          }
          @media (min-width: 661px) {
            .slide_item--start-poz4 .slide_bg::before {
              display: block;
              top: 0;
              left: 0;
              width: 37vw;
              height: 85%;
            }
          }
          @media (min-width: 1025px) {
            .slide_item--start-poz4 .slide_bg::before {
              background: url(/img/poz4/poz4-banner-adv.jpg) no-repeat center top;
              top: 0px;
              left: -2px;
              width: 45vw;
              max-width: 379px;
              height: 100%;
              border-radius: 60px 0 0 60px;
            }
          }
        </style>
      </div>
      <div class="slide_item">
            <div class="container">
                <div class="slide_item_block">
                    <div class="small_title_action">АКЦИЯ В ИЮЛЕ</div>
                    <div class="big_title_action big_title_action_many" style="margin-top: 30px;" ><span style="color: red;">Ипотека 5,4% на<br>весь срок платежа!</span></div>
                    <div class="button_action"><a class="slider_button_action" href="/pozicii-v-prodazhe/akciya-1/">Подробнее</a></div>
                </div>
            </div>
            <div class="slide_bg" style="background-image: url(/images/banners/ipoteka-2023-12.jpg);"></div>
        </div>
        <div class="slide_item slide_item_05">
           <div class="container">
               <div class="slide_item_block">
                  <div class="small_title_action">Строим будущее вместе</div>
                  <div class="big_title_action big_title_action_many" ><span style="color: red;">«Удача»</span> надежный застройщик с<br>18-летним опытом успешной работы</div>
                  <!--<div class="description_action">ГК "Удача" 17 лет успешной работы</div>-->
                  <div class="button_action"><a class="slider_button_action" href="https://21sol.ru/about/">Подробнее</a></div>
               </div>
           </div>
           <div class="slide_bg" style="background-image: url(/images/main_new/banner-desc-11-03-22.jpg);"></div>
        </div>
    </div>
    <div class="container">
	<div class="main_slider_nav_block">
    <div class="main_slider_nav_items">
	<div class="main_slider_nav">
            <div class="main_slider_prev" id="main_slider_prev"></div>
			<div id="counter"></div>
            <div class="main_slider_next" id="main_slider_next"></div>
    </div>
	<div class="button_action_call"><a data-b24-crm-button-widget="callback" class="slider_button_callback" href="javascript:void(0)" onclick="b24Call();"><span>Заказать звонок</span></a></div>
	</div>
	</div>
	</div>
</div>
<div class="advantages_block">
    <div class="container container_wide">
	   <div class="advantages_block_item">
	      <div class="title_advantages">В районе Солнечный</div>
		  <div class="advantages_items">
		     <div class="advantages_item">
			    <div class="small_adv_title">Сдано</div>
				<div class="big_adv_title">189 472</div>
				<div class="small_adv_title_sec">кв. м жилья</div>
			 </div>
			<div class="advantages_item">
			    <div class="small_adv_title">Построено</div>
				<div class="big_adv_title">20</div>
				<div class="small_adv_title_sec">домов</div>
			 </div>
			 <div class="advantages_item">
			    <div class="small_adv_title">Проживает более</div>
				<div class="big_adv_title">8000</div>
				<div class="small_adv_title_sec">человек</div>
			 </div>
		  </div>
		  <div class="bg_cloud"></div>
	   </div>
	   <div class="position_advantages">
		<?php
	   		$menu = $DB->select('SELECT * FROM ?_map WHERE s_close=? AND parent_id=? AND menuname=? AND id!=22909 AND id!=23440 ORDER BY datepost DESC', 0, 22697, '');

			if($menu){
				//echo '<pre>';
				//var_dump($menu);
				//echo '</pre>';
				foreach($menu as $v){
					if ($v['article'] != 'carousel_hide') {
						$cat_pics    = glob("upload/Image/catalog/{$v['pics']}-*.jpg");
						reset($cat_pics);
						$namep       = basename(current($cat_pics),".jpg");
						echo "<div class='position_advantages_items'>";
							echo "<div class='position_description_block'>";
							echo "<div class='position_description_block_item'>";
							    if ($namep == "23440-1") {
								echo "<div class='position_title'>ИПОТЕКА 3%</div>";
								} else {
								echo "<div class='position_title'>{$v['title']}</div>";
								}
								echo "<div class='position_description'>Живи здесь! Живи&nbsp;с&nbsp;комфортом!</div>";
								echo "<div class='position_listing'>";
								echo "<div class='position_listing_img'><img src='/images/main_new/icon_1.svg' alt=''></div>";
								echo "<div class='position_listing_description'>Просторный двор без машин</div>";
								echo "</div>";
								echo "<div class='position_listing'>";
								echo "<div class='position_listing_img'><img src='/images/main_new/icon_2.svg' alt=''></div>";
								echo "<div class='position_listing_description'>Многообразие планировочных решений</div>";
								echo "</div>";
								echo "<div class='position_listing'>";
								echo "<div class='position_listing_img'><img src='/images/main_new/icon_3.svg' alt=''></div>";
								echo "<div class='position_listing_description'>В подъездах: колясочная</div>";
								echo "</div>";
								echo "<div class='position_link'><a href='".(empty($v['link']) ? $v['adr'] : $v['link'])."'>Подробнее</a></div>";
							echo "</div>";
							echo "</div>";
							echo "<div class='position_img_block'>";
							if ($namep == "23440-1") {
							echo "<img src='/upload/Image/catalog/big/ipoteka3.jpg' alt=''>";
							} else {
							echo "<img src='/upload/Image/catalog/big/{$namep}.jpg' alt=''>";
							}
							echo "</div>";
						echo "</div>";
					}
				}
			}

		?>

	      <!-- <div class="position_advantages_items">
		     <div class="position_description_block">
			 <div class="position_description_block_item">
			    <div class="position_title">Позиция 2</div>
				<div class="position_description">Современный фасад жилого дома</div>
				<div class="position_listing">
				   <div class="position_listing_img"><img src="/images/main_new/icon_1.svg" alt=""></div>
				   <div class="position_listing_description">Просторный двор без машин</div>
				</div>
				<div class="position_listing">
				   <div class="position_listing_img"><img src="/images/main_new/icon_2.svg" alt=""></div>
				   <div class="position_listing_description">Многообразие планировочных решений</div>
				</div>
				<div class="position_listing">
				   <div class="position_listing_img"><img src="/images/main_new/icon_3.svg" alt=""></div>
				   <div class="position_listing_description">В подъездах: колясочная и лапомойка с трапом</div>
				</div>
				<div class="position_link"><a href="/pozicii-v-prodazhe/poziciya-2-new/">Подробнее</a></div>
			 </div>
			 </div>
			 <div class="position_img_block">
			 <img src="/images/main_new/bg_section_1.jpg" alt="">
			 </div>
		  </div>
	      <div class="position_advantages_items">
		     <div class="position_description_block">
			 <div class="position_description_block_item">
			    <div class="position_title">Позиция 2</div>
				<div class="position_description">Современный фасад жилого дома</div>
				<div class="position_listing">
				   <div class="position_listing_img"><img src="/images/main_new/icon_1.svg" alt=""></div>
				   <div class="position_listing_description">Просторный двор без машин</div>
				</div>
				<div class="position_listing">
				   <div class="position_listing_img"><img src="/images/main_new/icon_2.svg" alt=""></div>
				   <div class="position_listing_description">Многообразие планировочных решений</div>
				</div>
				<div class="position_listing">
				   <div class="position_listing_img"><img src="/images/main_new/icon_3.svg" alt=""></div>
				   <div class="position_listing_description">В подъездах: колясочная и лапомойка с трапом</div>
				</div>
				<div class="position_link"><a href="/pozicii-v-prodazhe/poziciya-22-new/">Подробнее</a></div>
			 </div>
			 </div>
			 <div class="position_img_block">
			 <img src="/images/main_new/bg_section_1.jpg" alt="">
			 </div>
		  </div> -->
	   </div>
    </div>
</div>
<div class="position_sale">


	<!-- <div class="position_sale_block">
		<div class="container">
			<h2 class="title_h2">Позиции в продаже</h2>
			<div class="position_sale_items"> -->
				<?php /*
					$menu = $DB->select('SELECT * FROM ?_map WHERE s_close=? AND parent_id=? AND menuname=? AND id!=22909 ORDER BY sort_id', 0, 22697, '');

					if($menu){
						//var_dump($menu);
						foreach($menu as $v){
							$cat_pics    = glob("upload/Image/catalog/{$v['pics']}-*.jpg");
							reset($cat_pics);
							$namep       = basename(current($cat_pics),".jpg");
							echo "<div class='position_sale_item'>";
								echo "<div class='position_sale_item_img'><img src='/upload/Image/catalog/{$namep}.jpg?ver=2.1' alt=''></div>";
								echo "<div class='position_sale_item_title'><a href='".(empty($v['link']) ? $v['adr'] : $v['link'])."'>{$v['title']}</a></div>";
								if ($v['article'] == 'start') {
									echo "<div class='position_sale_item_sheald'>Старт<br>продаж</div>";
								}
							echo "</div>";
						}
					}

				*/ ?>
			<!-- </div>
		</div>
	</div> -->



	<div class="preim_block">
        <div class="container">
           <h2 class="title_h2">Преимущества района Солнечный</h2>
           <div class="preim_sect_items">
               <div class="preim_sect_item">
                   <div class="preim_sect_item_block_img"><img src="/images/main_new/icon_preim_1.svg" alt=""></div>
                   <div class="preim_sect_item_block_descr">
                       <div class="preim_sect_item_title">Чистый район в&nbsp;природной зоне</div>
                       <div class="preim_sect_item_description"></div>
                   </div>
               </div>
               <div class="preim_sect_item">
                   <div class="preim_sect_item_block_img"><img src="/images/main_new/icon_preim_2.svg" alt=""></div>
                   <div class="preim_sect_item_block_descr">
                       <div class="preim_sect_item_title">Доступные цены на&nbsp;жильё</div>
                       <div class="preim_sect_item_description"></div>
                   </div>
               </div>
               <div class="preim_sect_item">
                   <div class="preim_sect_item_block_img"><img src="/images/main_new/icon_preim_3.svg" alt=""></div>
                   <div class="preim_sect_item_block_descr">
                       <div class="preim_sect_item_title">Развитая инфраструктура</div>
                       <div class="preim_sect_item_description">2 детских сада «Лучик» и&nbsp;«Солнечный зайчик»</div>
                   </div>
               </div>
               <div class="preim_sect_item">
                   <div class="preim_sect_item_block_img"><img src="/images/main_new/icon_preim_4.svg" alt=""></div>
                   <div class="preim_sect_item_block_descr">
                       <div class="preim_sect_item_title">Транспортная доступность</div>
                       <div class="preim_sect_item_description"></div>
                   </div>
               </div>
               <div class="preim_sect_item">
                   <div class="preim_sect_item_block_img"><img src="/images/main_new/icon_preim_5.svg" alt=""></div>
                   <div class="preim_sect_item_block_descr">
                       <div class="preim_sect_item_title">Высокая скорость строительства</div>
                       <div class="preim_sect_item_description"></div>
                   </div>
               </div>
               <div class="preim_sect_item">
                   <div class="preim_sect_item_block_img"><img src="/images/main_new/icon_preim_6.svg" alt=""></div>
                   <div class="preim_sect_item_block_descr">
                       <div class="preim_sect_item_title">Автономное отопление</div>
                       <div class="preim_sect_item_description">Низкие платежи по&nbsp;ЖКХ</div>
                   </div>
               </div>
               <div class="preim_sect_item">
                   <div class="preim_sect_item_block_img"><img src="/images/main_new/icon_preim_7.svg" alt=""></div>
                   <div class="preim_sect_item_block_descr">
                       <div class="preim_sect_item_title">Многообразие планировочных решений</div>
                       <div class="preim_sect_item_description"></div>
                   </div>
               </div>
           </div>
        </div>
	</div>
	<div class="block_builder">
	<div class="container">
	    <div class="small_builder_title">Основаны в&nbsp;2004 году</div>
		<h2 class="title_h2">За 18 лет ГК «Удача» построила 41&nbsp;дом, это более 8900 квартир</h2>
		<div class="builder_block_items">
		    <div class="builder_block_item">
			   <div class="builder_block_title">4-полосная автодорога</div>
			   <div class="builder_block_descr">Солнечный бульвар, по которому запущены 35 и 14 маршруты</div>
			</div>
			<div class="builder_block_item">
			   <div class="builder_block_title">3 остановки общественного транспорта</div>
			   <div class="builder_block_descr">ост.&nbsp;мкр.&nbsp;Солнечный, ост.&nbsp;Зодчего П.&nbsp;Егорова, ост.&nbsp;Тани&nbsp;Юн</div>
			</div>
			<div class="builder_block_item">
			   <div class="builder_block_title">6 торговых центров</div>
			   <div class="builder_block_descr">и магазины федеральных сетей в&nbsp;шаговой доступности, аптеки</div>
			</div>
			<div class="builder_block_item">
			   <div class="builder_block_title">2 действующих детских сада</div>
			   <div class="builder_block_descr">«Лучик» и «Солнечный зайчик»</div>
			</div>
			<div class="builder_block_item">
			   <div class="builder_block_title">Магазины, 2 салона красоты, аптеки</div>
			   <div class="builder_block_descr">рядом ГМ&nbsp;«Лента»</div>
			</div>
			<div class="builder_block_item">
			   <div class="builder_block_title">Состоявшийся район</div>
			   <div class="builder_block_descr">Проживает более 8000&nbsp;человек</div>
			</div>
			<div class="builder_block_item">
			   <div class="builder_block_title">Трехслойные стеновые панели</div>
			   <div class="builder_block_descr">со&nbsp;звуко- и теплоизоляцией</div>
			</div>
		</div>
		<div class="action_news">
		   <div class="action_news_title_butt">
		      <h2 class="title_h2">Акции и новости района</h2>
			  <div class="action_news_butt">
			  <a class="butt_action" href="/akcii/">Все акции</a>
			  <a class="butt_news" href="/news/">Все новости</a>
			  </div>
		   </div>


			<div class="news_action_items">
				<?php
				$actions = $DB->select('SELECT * FROM ?_map WHERE s_close=? AND parent_id=? AND menuname=? ORDER BY datepost DESC LIMIT 3', 0, 22439, '');
				$news = $DB->select('SELECT * FROM ?_map WHERE s_close=? AND parent_id=? AND menuname=? ORDER BY datepost DESC LIMIT 3', 0, 22413, '');

				if($actions || $news){
					$arr = array_merge($actions, $news);

					$date = array();
					foreach ($arr as $key => $row)
					{
						$date[$key] = $row['datepost'];
					}
					array_multisort($date, SORT_DESC, $arr);

					$count = 0;
					foreach($arr as $a){
						if($count < 3) {
							$cat_pics    = glob("upload/Image/catalog/{$a['pics']}-*.jpg");
							$namep       = basename($cat_pics[0],".jpg");
							if($a['parent_id'] == 22439) {
								$type = 'акция';
							} else if ($a['parent_id'] == 22413) {
								$type = 'новость';
							}
							echo "<div class='news_action_item'>";
								echo "<div class='news_action_item_c'>";
									echo "<div class='news_action_item_img'><img src='/upload/Image/catalog/{$namep}.jpg' alt=''></div>";
									echo "<div class='news_action_item_title'><a href='".(empty($a['link']) ? $a['adr'] : $a['link'])."'>{$a['title']}</a></div>";
									echo "<div class='news_action_item_cat'>".$type."</div>";
								echo "</div>";
							echo "</div>";
						}
						$count += 1;
					}
				}
				?>

				<?php /*
				if($actions){
					foreach($actions as $a){
						$cat_pics    = glob("upload/Image/catalog/{$a['pics']}-*.jpg");
						$namep       = basename($cat_pics[0],".jpg");
						echo "<div class='news_action_item'>";
							echo "<div class='news_action_item_c'>";
								echo "<div class='news_action_item_img'><img src='/upload/Image/catalog/{$namep}.jpg' alt=''></div>";
								echo "<div class='news_action_item_title'><a href='".(empty($a['link']) ? $a['adr'] : $a['link'])."'>{$a['title']}</a></div>";
								echo "<div class='news_action_item_cat'>Акция</div>";
							echo "</div>";
						echo "</div>";
					}
				}
				*/?>
				<?php /*
				if($news){
					foreach($news as $n){
						$cat_pics    = glob("upload/Image/catalog/{$n['pics']}-*.jpg");
						$namep       = basename($cat_pics[0],".jpg");
						echo "<div class='news_action_item'>";
							echo "<div class='news_action_item_c'>";
								echo "<div class='news_action_item_img'><img src='/upload/Image/catalog/{$namep}.jpg' alt=''></div>";
								echo "<div class='news_action_item_title'><a href='".(empty($n['link']) ? $n['adr'] : $n['link'])."'>{$n['title']}</a></div>";
								echo "<div class='news_action_item_cat'>Новость</div>";
							echo "</div>";
						echo "</div>";
					}
				}
				*/ ?>
			</div>
		</div>
	</div>
	<div class="district_plan">
	<div class="sheald_district_plan">
	   <div class="container">
	      <div class="sheald_district_block">
		     <div class="sheald_district_inf">
			   <div class="sheald_district_inf_title">План района Солнечный</div>
			   <div class="sheald_district_inf_descr">Уже проживает более 8000&nbsp;человек</div>
			 </div>
			 <div class="sheald_district_items">
			     <div class="sheald_district_item">
				     <div class="sheald_district_item_img"><img src="/images/main_new/icon_d1.svg" alt=""></div>
					 <div class="sheald_district_item_descr">офис продаж</div>
				 </div>
				 <div class="sheald_district_item">
				     <div class="sheald_district_item_img"><img src="/images/main_new/icon_d2.svg" alt=""></div>
					 <div class="sheald_district_item_descr">школа</div>
				 </div>
				 <div class="sheald_district_item">
				     <div class="sheald_district_item_img"><img src="/images/main_new/icon_d3.svg" alt=""></div>
					 <div class="sheald_district_item_descr">аптека</div>
				 </div>
				 <div class="sheald_district_item">
				     <div class="sheald_district_item_img"><img src="/images/main_new/icon_d4.svg" alt=""></div>
					 <div class="sheald_district_item_descr">торговые центры и магазины</div>
				 </div>
				 <div class="sheald_district_item">
				     <div class="sheald_district_item_img"><img src="/images/main_new/icon_d5.svg" alt=""></div>
					 <div class="sheald_district_item_descr">детские сады Лучик и Солнечный зайчик</div>
				 </div>
				 <div class="sheald_district_item">
				     <div class="sheald_district_item_img"><img src="/images/main_new/icon_d6.svg" alt=""></div>
					 <div class="sheald_district_item_descr">подземная парковка под детской площадкой</div>
				 </div>
			 </div>
		  </div>
		</div>
	</div>
	<div class="container sheald_district_map">
	      <div class="district_map">
		     <div class="district_map_img">
			 <img src="/images/main_new/plan_1.jpg" alt="">
			 <a href="/images/main_new/plan_1.jpg" data-fancybox="foto_plan_1" class="podrobnee">Рассмотреть</a>
			 </div>
			 <div class="district_map_descr">
			    <div class="plan_map_district_item">
				    <div class="plan_map_district_item_img"><img src="/images/main_new/plan_item_1.svg" alt=""></div>
					<div class="plan_map_district_title">в плане района</div>
				</div>
				<div class="plan_map_district_item">
				    <div class="plan_map_district_item_img"><img src="/images/main_new/plan_item_2.svg" alt=""></div>
					<div class="plan_map_district_title">строящиеся дома</div>
				</div>
				<div class="plan_map_district_item">
				    <div class="plan_map_district_item_img"><img src="/images/main_new/plan_item_3.svg" alt=""></div>
					<div class="plan_map_district_title">действующие объекты</div>
				</div>
			 </div>
		  </div>
	</div>
	</div>
	<div class="district_plan2">
	<div class="cloud_bg_2"></div>
	<div class="sheald_district_plan">
	   <div class="container">
	      <div class="sheald_district_block">
		     <div class="sheald_district_inf">
			   <div class="sheald_district_inf_title">План района Солнечный комфорт*</div>
			   <!--<div class="sheald_district_inf_descr">Уже проживает более 6000 человек</div>-->
			 </div>
			 <div class="sheald_district_items">
			     <div class="sheald_district_item">
				     <div class="sheald_district_item_img"><img src="/images/main_new/icon_d1.svg" alt=""></div>
					 <div class="sheald_district_item_descr">офис продаж</div>
				 </div>
				 <div class="sheald_district_item">
				     <div class="sheald_district_item_img"><img src="/images/main_new/icon_d2.svg" alt=""></div>
					 <div class="sheald_district_item_descr">школа</div>
				 </div>
				 <div class="sheald_district_item">
				     <div class="sheald_district_item_img"><img src="/images/main_new/icon_d5.svg" alt=""></div>
					 <div class="sheald_district_item_descr">детские сады</div>
				 </div>
				 <div class="sheald_district_item">
				     <div class="sheald_district_item_img"><img src="/images/main_new/icon_d4.svg" alt=""></div>
					 <div class="sheald_district_item_descr">торговые центры и магазины</div>
				 </div>
				 <div class="sheald_district_item">
				     <div class="sheald_district_item_img"><img src="/images/main_new/icon_d7.svg" alt=""></div>
					 <div class="sheald_district_item_descr">физкультурно-оздоровительный комплекс</div>
				 </div>
				 <div class="sheald_district_item">
				     <div class="sheald_district_item_img"><img src="/images/main_new/icon_d8.svg" alt=""></div>
					 <div class="sheald_district_item_descr">многоуровневый паркинг</div>
				 </div>
			 </div>
		  </div>
		</div>
	</div>
	<div class="container sheald_district_map">
	      <div class="district_map">
		     <div class="district_map_img">
			 <a href="/pozicii-v-prodazhe/poziciya-2-new/">
			 	<img src="/images/main_new/plan-15-06-22.jpg" alt="">
			 </a>
			 <a href="/images/main_new/plan_2.jpg" data-fancybox="foto_plan_2" class="podrobnee">Рассмотреть</a>
			 </div>
			 <div class="district_map_descr">
			    <div class="plan_map_district_item">
				    <div class="plan_map_district_item_img"><img src="/images/main_new/plan_item_4.svg" alt=""></div>
					<div class="plan_map_district_title">на&nbsp;стадии строительства</div>
				</div>
				<div class="plan_map_district_item">
				    <div class="plan_map_district_item_img"><img src="/images/main_new/plan_item_5.svg" alt=""></div>
					<div class="plan_map_district_title">в&nbsp;плане района</div>
				</div>
				<div class="plan_map_district_item">
				    <div class="plan_map_district_item_img"><img src="/images/main_new/plan_item_6.svg" alt=""></div>
					<div class="plan_map_district_title">действующие объекты</div>
				</div>
				<div class="plan_map_district_item">
				   <div class="plan_map_district_descr">
				   *План 3&nbsp;этапа строительства района Солнечный комфорт на&nbsp;сентябрь 2021&nbsp;г. В&nbsp;плане возможны изменения
				   </div>
				</div>
			 </div>
		  </div>
	</div>
	</div>
	<div class="preim_block project_plan">
	<div class="container">
	   <h2 class="title_h2">В&nbsp;проекте района Солнечный комфорт</h2>
	   <div class="preim_sect_items">
	       <div class="preim_sect_item">
		       <div class="preim_sect_item_block_img"><img src="/images/main_new/icon_proj_1.svg" alt=""></div>
			   <div class="preim_sect_item_block_descr">
                   <div class="preim_sect_item_title">Медицинский кабинет врача общей практики</div>
				   <div class="preim_sect_item_description"></div>
			   </div>
		   </div>
		   <div class="preim_sect_item">
		       <div class="preim_sect_item_block_img"><img src="/images/main_new/icon_proj_2.svg" alt=""></div>
			   <div class="preim_sect_item_block_descr">
                   <div class="preim_sect_item_title">Физкультурно-оздоровительный комплекс</div>
				   <div class="preim_sect_item_description"></div>
			   </div>
		   </div>
		   <div class="preim_sect_item">
		       <div class="preim_sect_item_block_img"><img src="/images/main_new/icon_proj_3.svg" alt=""></div>
			   <div class="preim_sect_item_block_descr">
                   <div class="preim_sect_item_title">Школа на&nbsp;1100 мест и 2&nbsp;детсада</div>
				   <div class="preim_sect_item_description"></div>
			   </div>
		   </div>
		   <div class="preim_sect_item">
		       <div class="preim_sect_item_block_img"><img src="/images/main_new/icon_proj_4.svg" alt=""></div>
			   <div class="preim_sect_item_block_descr">
                   <div class="preim_sect_item_title">Многоуровневый паркинг</div>
				   <div class="preim_sect_item_description"></div>
			   </div>
		   </div>
		   <div class="preim_sect_item">
		       <div class="preim_sect_item_block_img"><img src="/images/main_new/icon_proj_5.svg" alt=""></div>
			   <div class="preim_sect_item_block_descr">
                   <div class="preim_sect_item_title">Торговые центры</div>
				   <div class="preim_sect_item_description"></div>
			   </div>
		   </div>
		   <div class="preim_sect_item">
		       <div class="preim_sect_item_block_img"><img src="/images/main_new/icon_proj_6.svg" alt=""></div>
			   <div class="preim_sect_item_block_descr">
                   <div class="preim_sect_item_title">4-полосная дорога с&nbsp;остановками общественного транспорта</div>
				   <div class="preim_sect_item_description"></div>
			   </div>
		   </div>
		</div>
	</div>
	</div>
	<div class="office_block pravki">
	<div class="cloud_bg_3"></div>
	    <div class="sheald_white"></div>
        <?php require_once "o/block/sales_points.php"; ?>
	</div>
</div>
