<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>tpshop管理后台</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    
    <link href="{{asset("/css/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
     
 	<link href="{{asset("/css/bootstrap/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 --
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{asset("/css/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
    	folder instead of downloading all of them to reduce the load. -->
    
    <link href="{{asset("/css/dist/css/skins/_all-skins.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{asset("/plugins/iCheck/flat/blue.css")}}" rel="stylesheet" type="text/css" />   
    <!-- jQuery 2.1.4 -->
    <script src="{{asset("/plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>
	<script src="{{asset("/js/global.js")}}"></script>
    <script src=" {{asset("/js/myFormValidate.js")}}"></script>  

     
    <script src="{{asset("/bootstrap/js/bootstrap.min.js")}}" type="text/javascript"></script>
    <script src="{{asset("/js/layer/layer-min.js")}}"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->
    <script src="{{asset("/js/myAjax.js")}}"></script>
    <script type="text/javascript">
    function delfunc(obj){
    	layer.confirm('确认删除？', {
    		  btn: ['确定','取消'] //按钮
    		}, function(){
    		    // 确定
   				$.ajax({
   					type : 'post',
   					url : $(obj).attr('data-url'),
   					data : {act:'del',del_id:$(obj).attr('data-id')},
   					dataType : 'json',
   					success : function(data){
   						if(data==1){
   							layer.msg('操作成功', {icon: 1});
   							$(obj).parent().parent().remove();
   						}else{
   							layer.msg(data, {icon: 2,time: 2000});
   						}
   						layer.closeAll();
   					}
   				})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);
    }
    
    function selectAll(name,obj){
    	$('input[name*='+name+']').prop('checked', $(obj).checked);
    }    
    </script>        
  </head>
  <body style="background-color:#ecf0f5;">
 