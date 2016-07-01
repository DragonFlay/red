	<footer class="main-footer">
	   <div class="pull-right hidden-xs">
	    	 感谢使用ThinkPHP Shop开源系统<b></b>
	   </div>
	   <strong>Copyright &copy; 2015 <a href="http://www.99soubao.com">深圳搜豹公司旗下产品</a>.</strong>保留所有权利。
	</footer>

     <!-- Control Sidebar -->
     <aside class="control-sidebar control-sidebar-dark">
       <!-- Create the tabs -->
       <!--
       <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
         <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-at"></i></a></li>
         <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
       </ul>
       -->
       <!-- Tab panes -->
       <div class="tab-content">
      	<!-- Home tab content -->
         <div class="tab-pane" id="control-sidebar-home-tab">
         </div><!-- /.tab-pane -->
         <!-- Stats tab content -->
         <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
         <!-- Settings tab content -->
         <div class="tab-pane" id="control-sidebar-settings-tab">
         </div>
       </div>
     </aside>
   <div class="control-sidebar-bg"></div>
</div>

<script src="{{asset("/js/jquery-ui.min.js")}}" type="text/javascript"></script>
<script src="{{asset("/bootstrap/js/bootstrap.min.js")}}" type="text/javascript"></script>
<script src="{{asset("/plugins/slimScroll/jquery.slimscroll.min.js")}}" type="text/javascript"></script>
<script src="{{asset("/plugins/fastclick/fastclick.min.js")}}" type="text/javascript"></script>
<script src="{{asset("/css/dist/js/app.js")}}" type="text/javascript"></script>
<script src="{{asset("/css/dist/js/demo.js")}}" type="text/javascript"></script>
 
<script type="text/javascript">
$(document).ready(function(){
	$("#riframe").height($(window).height()-100);//浏览器当前窗口可视区域高度
	$("#rightContent").height($(window).height()-100);
	$('.main-sidebar').height($(window).height()-50);
});

var tmpmenu = 1;
function makecss(obj,mod_id){
	$('#menu_'+tmpmenu).removeClass('active');
	$(obj).addClass('active');
	tmpmenu = mod_id;
}

$('.model-map').click(function(){
    var url = $(this).attr('data-url');
    layer.open({
        type: 2,
        title: '网站地图',
        shadeClose: true,
        shade: 0.8,
        area: ['70%', '60%'],
        content: url, 
    });
});

function callUrl(url){
	layer.closeAll('iframe');
	rightContent.location.href = url;
}
    var now_num = 0; //现在的数量
    var is_close=0;
    function ajaxOrderNotice(){
        var url = '{:U("Order/ajaxOrderNotice")}';
        if(is_close > 0)
            return;
        $.get(url,function(data){
            //有新订单且数量不跟上次相等 弹出提示
            if(data > 0 && data != now_num){
                now_num = data;
                if(document.getElementById('ordfoo').style.display == 'none'){
                    $('#orderAmount').text(data);
                    $('#ordfoo').show();
                }
            }
        })
//        setTimeout('ajaxOrderNotice()',5000);
    }
//setTimeout('ajaxOrderNotice()',5000);
</script>
<!-- 新订单提醒-s -->
<style type="text/css">
.fl{ float:left; margin-left:10px; margin-top:4px}
.fr{ float:right; margin-right:10px; margin-top:3px}
.orderfoods{ width:200px; border:1px solid #dedede; position:absolute; bottom:50px; z-index:999; right:10px; background-color:#00A65A;opacity:0.8;-webkit-opacity:0.8;filter:alpha(opacity=80);-moz-opacity:0.8;  }
.dor_head{ border-bottom:1px solid #dedede; height:28px; color:#FFF; font-size:12px}
.dor_head:after{ content:""; clear:both; display:block}
.dor_foot{ margin-top:6px; color:#FFF}
.dor_foot p{ padding:0 12px}
.te-in{ text-indent:2em;}
.dor_foot p span{ color:red}
.te-al-ce{ text-align:center}
</style>
<div id="ordfoo" class="orderfoods" style="">
	<div class="dor_head">
    	<p class="fl">新订单通知</p>
        <p onClick="closes();" id="close" class="fr" style="cursor:pointer">x</p>
    </div>
    <div class="dor_foot">
    	<p class="te-in">您有<span id="orderAmount">{$order_amount}</span>个订单待处理</p>
        <p class="te-al-ce"><a href="{:U('Order/index')}" target='rightContent'><span>点击查看</span></a></p>
    </div>
</div>
<script type="text/javascript">
	function closes(){
        is_close = 1;
		document.getElementById('ordfoo').style.display = 'none';
	}
</script>
<!-- 新订单提醒-e -->
</body>
</html>