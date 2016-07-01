@include("admin.common.min-header");
<div class="wrapper">
   @include("admin.common.breadcrumb");
	<section class="content">
       <div class="row">
       		<div class="col-xs-12">
	       		<div class="box">
	             <div class="box-header">
	               <h3 class="box-title">日志列表</h3>
	             </div>
	             <div class="box-body">
	             <div class="row">
	            	<div class="col-sm-12">
		              <table id="list-table" class="table table-bordered table-striped dataTable">
		                 <thead>
		                   <tr role="row">
			                   <th>ID</th>
			                   <th>角色名称</th>
			                   <th>描述</th>
			                   <th>IP</th>
			                   <th>操作时间</th>
			                 <!--  <th>操作</th>-->
		                   </tr>
		                 </thead>
						<tbody>
						  <foreach name="list" item="vo" key="k" >
							  	<tr role="row" align="center">
				                     <td>{$vo.log_id}</td>
				                     <td>{$vo.user_name}</td>
				                     <td>{$vo.log_info}</td>
				                     <th>{$vo.log_ip}</th>
				                     <td>{$vo.log_time|date="Y-m-d H:i:s",###}</td>
                                     <!--
				                     <td>
				                      	<a class="btn btn-danger" href="javascript:void(0)" data-url="{:U('Admin/logDel')}" data-id="{$vo.log_id}" onclick="delfun(this)"><i class="fa fa-trash-o"></i></a>
									 </td>
                                     -->
			                    </tr>
		                  </foreach>
		                   </tbody>
		                 <tfoot>
		                 
		                 </tfoot>
		               </table>	 
	               </div>
	          </div>
              <div class="row">
              	    <div class="col-sm-6 text-left"></div>
                    <div class="col-sm-6 text-right">{$page}</div>		
              </div>
	          </div>
	        </div>
       	</div>
       </div>
   </section>
</div>
<script>
function delfun(obj){
	
	
	//询问框
layer.confirm('确认删除？', {
  btn: ['确定','取消'] //按钮
}, function(){
    // 确定
		$.ajax({
			type : 'post',
			url : $(obj).attr('data-url'),
			data : {act:'del',log_id:$(obj).attr('data-id')},
			dataType : 'json',
			success : function(data){
				if(data==1){
					$(obj).parent().parent().remove();
				}else{
					layer.msg(data, {icon: 2,time: 2000});   //alert(data);
				}
			}
		})
	
 
	
}, function(){
	// 取消
});
	
	
	 
	 
	return false;
}
</script>  
</body>
</html>