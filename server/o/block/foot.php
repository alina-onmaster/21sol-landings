<!--<div class='footern width1200 clearfix'>
	<div>
		<div>
			� 2014-2021 ���������<br>
			<div class="social-icons">
				<a href="https://vk.com/21sol" title="��������������� � ��� VK" class="facebook" target="_blank"><i class="social_icon fa fa-vk"></i></a>
				<a href="https://www.facebook.com/�����-���������-222979891950646/" title="��������������� � ��� Facebok" class="facebook" target="_blank"><i class="social_icon fa fa-facebook"></i></a>
				<a href="https://www.instagram.com/solnechnyi_cheb/" title="��������������� � ��� Instagram" class="twitter" target="_blank"><i class="social_icon fa fa-instagram"></i></a>
				<a href="https://www.youtube.com/channel/UCS5O2lnetH7gphksELjk03w" title="��������������� � ��� Youtube" class="youtube" target="_blank"><i class="social_icon fa fa-youtube"></i></a>
			</div>
		</div>
		<div class='foomenu'>
			<a href="/about/">� ��������</a><br> 
			<a href="/akcii/">�����</a><br> 
			<a href="/planirovki/">����������</a><br>
			<a href='/docs/'>���������</a><br> 
		</div>
		<div class='foomenu'>
			<a href='/pozicii-v-prodazhe/'>������� � �������</a><br>
			<a href='/foto/'>��� �������������</a><br>
			<a href='/contacts/'>��������</a><br>
			<a href='/usloviya/'>������� �������</a><br> 
		</div>
		<div class='foomenu' style='color:#fff;margin-right:0px'>
			<b>���� ������:</b><br>
			�. ���������, ���������� ��������, ��� 25, ������&nbsp;1<br>
			�. ���������, ����� "���������, ��� 12, ������&nbsp;1<br><br>
			<b>����� ������:</b><br>
			<a href='tel:+78352410000'>(8352) 41-00-00 (9.00 � 21.00)</a><br>
			<div id='mailID'></div>
		</div>
	</div>
	<div style='color:#666'>
		<a href=''>����������, �������������� �� �����, �� �������� ��������� �������</a>
	</div>
</div>-->

<div class="footer">
    <div class="container">
	   <div class="footer_items_block">
	       <div class="footer_item_block">
		      <div class="footer_item_block_logo"><img src="/images/main_new/logo_footer.svg" alt=""></div>
			  <div class="footer_item_block_social">
			     <a href="https://vk.com/21sol" target="_blank"><img src="/images/main_new/vk.svg" alt=""></a>
				 <!--<a href="https://www.instagram.com/solnechnyi_cheb/" target="_blank"><img src="/images/main_new/instagram.svg" alt=""></a>-->
				 <a href="https://www.youtube.com/channel/UCS5O2lnetH7gphksELjk03w" target="_blank"><img src="/images/main_new/youtube.svg" alt=""></a>
			  </div>
		   </div>
		   <div class="footer_item_block">
		      <div class="footer_item_block_title">� ��������</div>
			  <div class="footer_item_block_menu_link">
			  <a href="/about/">� ��������</a>
			  <a href="/akcii/">�����</a>
			  <a href="https://21sol.ru/pozicii-v-prodazhe/poziciya-2-new/">����������</a>
			  <a href="/docs/">���������</a>
			  </div>
		   </div>
		   <div class="footer_item_block">
		      <div class="footer_item_block_title">�������</div>
			  <div class="footer_item_block_menu_link">
			  <a href="/pozicii-v-prodazhe/">������� � �������</a>
			  <a href="/foto/">��� �������������</a>
			  <a href="/contacts/">��������</a>
			  <a href="/usloviya/">������� �������</a>
			  </div>
		   </div>
		   <div class="footer_item_block">
		      <div class="first_block_cont">
			     <div class="footer_item_block_title">���� ������</div>
			     <div class="footer_item_block_adress">�. ���������, ���������� ��������, ���&nbsp;25, ������&nbsp;1</div>
			     <div class="footer_item_block_adress">�. ���������, ����� ���������, ���&nbsp;12, ������&nbsp;1</div>
			  </div>
			  <div class="second_block_cont">
			     <div class="footer_item_block_title">����� ������</div>
			     <div class="footer_item_block_phone"><a href="tel: +78352285430">(8352) 28-54-30</a> <span>� 9:00 �� 21:00</span></div>
			     <a href="mailto: 41-00-00@mail.ru"><div class="footer_item_block_mail"></div></a>
			  </div>
		   </div>
	   </div>
	   <div class="privacy_items_block">
	         <div class="privacy_item_copyright">
			 <span>����������, ��������������� �� �����,<br> �� �������� ��������� �������</span><br><br>
			 �2014�2023. ��� ����� ��������
			 </div>
			 <div class="privacy_item_privacy"><a href="">�������� ������������������</a></div>
			 <div class="privacy_item_design">������ ����� � <a href="https://indigoamigo.ru/">Indigo Amigo</a></div>
		</div>
	</div>
</div>

<div class="dm-overlay dm-form" id="win2">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
    			<a href="#close" class="close"></a>
				<?php
					$formTitle = '�������� ������';
					$formType = '';
					if($PAGE['id'] == 23359){
						$formTitle = '������ ���� �� �������� �����������!';
						$formType = 'form_sell';
					} else if($PAGE['id'] == 22695 || $PAGE['id'] == 23390){
						$formTitle = '�������� � ��������. ���������� �� ��������!';
						$formType = 'form_repair';
					} else if($PAGE['id'] == 23021){
						$formTitle = '������ ������ �� ������ ����� ��������!';
						$formType = 'form_tradein';
					}
                	echo '<h3>'.$formTitle.'</h3>';
				?>
    			<p style='text-align:center'>�������� �������� ������ � ��� �������� �������� � ���� � ��������� �����</p>
    			<br>
    			<?php echo "<div class='dm-page ".$formType."' style='text-align: center;height:auto'>"; ?>
                <script data-b24-form="inline/2/ak3ut7" data-skip-moving="true">
                        (function(w,d,u){
                                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
                                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                        })(window,document,'https://cdn-ru.bitrix24.ru/b4347333/crm/form/loader_2.js');
                </script>
				</div>
            </div>
        </div>
    </div>
</div>

<div class="dm-overlay" id="win4">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
    			<a href="#close" class="close"></a>
                <h3>���������� ������<br>30 000 � 50 000 ������ �� ����� ���</h3>
    			<p style='text-align:center'>�������� �������� ������ � ��� �������� �������� � ���� � ��������� �����</p>
    			<br>
    			<div class='dm-page' style='text-align: center;height:150px'>
					<form method='post'>
						<input type="hidden" name="tema" value="��������� �������� ������">
						<input type='text' name='phone' value='' placeholder='��� �������' style='font-size:18px;width:80%;border:1px solid #ddd;padding:10px 20px'>
						<br><br>
						<input type='submit' name='win2submit' value='�������������' style='background-color:red;color:#fff;font-size:18px;margin:0 auto;border:0px;padding:10px 20px'>
					</form>
					<a href='/news/s-1-po-30-aprelya-2020-goda-dejstvuet-skidka-na-pokupku-kvartiry/' style='font-size:13px'>* ������� �����</a>
				</div>
            </div>
        </div>
    </div>
</div>

<div class="dm-overlay" id="win3">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
    			<a href="#close" class="close"></a>
                <h3>������ �� ��������</h3>
    			<p style='text-align:center'>�������� �������� ������ � ��� �������� �������� � ���� � ��������� �����</p>
    			<br>
    			<div class='dm-page' style='text-align: center;height:150px'>
					<form method='post'>
						<input type="hidden" name="tema" value="��������� ������ �� ��������">
						<input type='text' name='phone' value='' placeholder='��� �������' style='font-size:18px;width:80%;border:1px solid #ddd;padding:10px 20px'>
						<br><br>
						<input type='submit' name='win2submit' value='���������' style='background-color:red;color:#fff;font-size:18px;margin:0 auto;border:0px;padding:10px 20px'>
					</form>
				</div>
            </div>
        </div>
    </div>
</div>

<div class="popup_bg"></div>
<div class="popup popup_info">
	<div class="popup_close">X</div>
	<div class="popup_info_title">���� ������ ����������</div>
</div>

<div id='toTop'></div>

<link rel="stylesheet" href="/css/font-awesome.css"/>
<link rel="stylesheet" href="/css/slick.css"/>
<link rel="stylesheet" href="/css/jquery.fancybox.min.css" />
<script src="/js/jquery.fancybox.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/imagesloaded.pkgd.min.js"></script>
<script src="/js/p.js?veris=3.95"></script>
<script src="/js/owl2.carousel.min.js"></script>
<script src="/js/jquery.maskedinput.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/swiper-bundle.min.js"></script>
<script src="/js/script.js"></script>

<?php if($PAGE['id'] == 23387){ ?>
	<script src="/js/pravki_main_test.js"></script>
<?php }  else { ?>
	<script src="/js/pravki_main_test.js"></script>
<?php } 
?>


<!-- calltouch requests --> 
<script type="text/javascript">
var _ctreq_b24 = function(data) {
    var sid = 32776;
    var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();
    var post_data = Object.keys(data).reduce(function(a,k){if(!!data[k]){a.push(k+'='+encodeURIComponent(data[k]));}return a},[]).join('&');
    var url = 'https://api.calltouch.ru/calls-service/RestAPI/'+sid+'/requests/orders/register/';
    request.open("POST", url, true); request.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); request.send(post_data);
};
window.addEventListener('b24:form:submit', function(e){
    var form = event.detail.object;
    if (form.validated){
        var fio = ''; var phone = ''; var email = ''; var comment = '';
        form.getFields().forEach(function(el){
            if(el.name=='LEAD_NAME' || el.name=='CONTACT_NAME'){ fio = el.value(); }
            if(el.name=='LEAD_PHONE' || el.name=='CONTACT_PHONE'){ phone = el.value(); }
            if(el.name=='LEAD_EMAIL' || el.name=='CONTACT_EMAIL'){ email = el.value(); }
            if(el.name=='LEAD_COMMENTS' || el.name=='DEAL_COMMENTS '){ comment = el.value(); }
        });
        var sub = '������ � ����� Bitrix24 ' + location.hostname;
        var ct_data = {fio: fio, phoneNumber: phone, email: email, comment: comment, subject: sub, requestUrl: location.href, sessionId: window.call_value};
        console.log(ct_data);
        if (!!phone || !!email) _ctreq_b24(ct_data);
    }
});
</script>

<script>
window.addEventListener('onBitrixLiveChat', function(event){
    var widget = event.detail.widget;
    widget.subscribe({
        type: BX.LiveChatWidget.SubscriptionType.every, callback: function(ev){
            if (ev.type == BX.LiveChatWidget.SubscriptionType.userMessage){
                if (!window.ct_snd_flag && !!window.ct){ ct('goal','b24chat'); window.ct_snd_flag = 1; }
            }
            if (ev.type == BX.LiveChatWidget.SubscriptionType.userForm){
                var sid = 32776;
                var fio = ''; var phone = ''; var email = '';
                if (!!ev.data && !!ev.data.fields && !!ev.data.fields.name){ fio = ev.data.fields.name; }
                if (!!ev.data && !!ev.data.fields && !!ev.data.fields.phone){ phone = ev.data.fields.phone; }
                if (!!ev.data && !!ev.data.fields && !!ev.data.fields.email){ email = ev.data.fields.email; }
                var ct_data = {}; ct_data.phoneNumber = phone; ct_data.fio = fio; ct_data.email = email; ct_data.requestUrl = location.href; ct_data.sessionId = window.call_value;
                ct_data.subject = '��� Bitrix24 ���������� ������� ��������';
                var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();
                var post_data = Object.keys(ct_data).reduce(function(a,k){if(!!ct_data[k]){a.push(k+'='+encodeURIComponent(ct_data[k]));}return a},[]).join('&');
                var url = 'https://api.calltouch.ru/calls-service/RestAPI/'+sid+'/requests/orders/register/';
                request.open("POST", url, true); request.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); request.send(post_data);
            }
        }
    });
});
</script>

<script type="text/javascript">
jQuery(document).on('click', 'form input[type="submit"]', function() {
	var m = jQuery(this).closest('form');
    var ct_name = m.find('input[name="name"]').val();
    var ct_phone = m.find('input[name="phone"]').val();
    var ct_sub = m.find('input[name="tema"]').val();
    var ct_comment = m.find('textarea[name="message"]').val();
    var ct_site_id = '32776';
	if (!ct_sub){var ct_sub = '������ c ' + location.hostname;}
    var ct_data = {
        fio: ct_name,
        phoneNumber: ct_phone,
		subject: ct_sub,
        comment: ct_comment,
		requestUrl: location.href,
        sessionId: window.call_value
    };
    if (!!ct_phone && !!ct_name){
		console.log(ct_data);
        jQuery.ajax({
            url: 'https://api.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/',  
            dataType: 'json', type: 'POST', data: ct_data, async: false
        });
    }
});
</script>

<script type="text/javascript">
    jQuery(document).on('click', 'form.custom_form button[type="submit"]', function() {
	var m = jQuery(this).closest('form');
    var ct_name = m.find('input[name="name"]').val();
    var ct_phone = m.find('input[name="phone"]').val();
    var ct_sub = '������ c ' + location.hostname;
    var agree = m.find('input[type="checkbox"]').prop('checked');
    var ct_site_id = '32776';
    var ct_data = {
        fio: ct_name,
        phoneNumber: ct_phone,
        subject: ct_sub,
        requestUrl: location.href,
        sessionId: window.call_value
    };
    if (!!ct_phone && !!ct_name && agree){
        console.log(ct_data);
        jQuery.ajax({
            url: 'https://api.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/',
            dataType: 'json', type: 'POST', data: ct_data, async: false
        });
    }
});
</script>
<!-- calltouch requests --> 

</body>
</html>