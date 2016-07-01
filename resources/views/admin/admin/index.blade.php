@include("admin.common.min-header");
<div class="wrapper">
    @include("admin.common.breadcrumb");
	<section class="content">
       <div class="row">
       		<div class="col-xs-12">
	       		<div class="box">
	             <div class="box-header">
	               	<nav class="navbar navbar-default">	     
				        <div class="collapse navbar-collapse">
				          <form class="navbar-form form-inline" action="{:U('Admin/index')}" method="post">
				            <div class="form-group">
				              	<input type="text" name="keywords" class="form-control" placeholder="搜索">
				            </div>
				            <button type="submit" class="btn btn-default">提交</button>
				            <div class="form-group pull-right">
					            <a href="{:U('Admin/admin_info')}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>添加管理员</a>
				            </div>		          
				          </form>		
				      	</div>
	    			</nav>  
	             </div>	             
	             <div class="box-body">	               
	           		<div class="row">
	            	<div class="col-sm-12">
		              <table id="list-table" class="table table-bordered table-striped dataTable">
		                 <thead>
		                   <tr role="row">
			                   <th>ID</th>
			                   <th>用户名</th>
			                   <th>所属角色</th>
			                   <th>Email地址</th>
			                   <th>加入时间</th>
			                   <th>操作</th>
		                   </tr>
		                 </thead>
						<tbody>
						  <foreach name="list" item="vo" key="k" >
						  	<tr role="row" align="center">
		                     <td>{$vo.admin_id}</td>
		                     <td>{$vo.user_name}</td>
		                     <td>{$vo.role}</td>
		                     <td>{$vo.email}</td>
		                     <td>{$vo.add_time}</td>
		                     <td>
		                      <a class="btn btn-primary" href="{:U('Admin/admin_info',array('admin_id'=>$vo['admin_id']))}"><i class="fa fa-pencil"></i></a>
		                      <if condition="$vo['admin_id'] gt 1">
		                      <a class="btn btn-danger" href="javascript:void(0)" data-url="{:U('Admin/adminHandle')}" data-id="{$vo.admin_id}" onclick="delfun(this)"><i class="fa fa-trash-o"></i></a>
							  </if>
							</td>
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
	if(confirm('确认删除')){		
		$.ajax({
			type : 'post',
			url : $(obj).attr('data-url'),
			data : {act:'del',admin_id:$(obj).attr('data-id')},
			dataType : 'json',
			success : function(data){
				if(data==1){
					$(obj).parent().parent().remove();
				}else{
					layer.alert(data, {icon: 2});   //alert('用户名或密码不能为空');// alert(data);
					layer.closeAll();
				}
			}
		})
	}
	return false;
}
</script> 
</body>
</html>