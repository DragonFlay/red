@include("admin.common.min-header");
<div class="wrapper">
        @include("admin.common.breadcrumb");
     <section class="content">
		<div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-bell"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">待处理订单</span>
                  <span class="info-box-number">{$count.handle_order}</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">商品数量</span>
                  <span class="info-box-number">{$count.goods}</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">文章数量</span>
                  <span class="info-box-number">{$count.article}</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-user-plus"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">会员总数</span>
                  <span class="info-box-number">{$count.users}</span>
                </div>
              </div>
            </div>
         </div>
		
		<div class="row">
			<div class="col-md-12">
		      <div class="box box-info">
		        <div class="box-header">
		          <h3 class="box-title">今日统计</h3>
		        </div>
		        <div class="box-body">
	         		<div class="row">
			  			<div class="col-sm-3 col-xs-6">
			  				新增订单：{$count.new_order}
			  			</div>
			  				<div class="col-sm-3 col-xs-6">
			  				今日访问：{$count.today_login}
			  			</div>
			  				<div class="col-sm-3 col-xs-6">
			  				新增会员：{$count.new_users}
			  			</div>
			  				<div class="col-sm-3 col-xs-6">
			  				待审评论：{$count.comment}
			  			</div>
		  			</div>
		        </div>
		      </div>
		    </div>
		</div>
          <div class="row">
          	     <div class="col-md-12">
			       	 <div class="box  box-primary">
                        <div class="box-body">
                            <div class="info-box">                 
                            	<table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td>服务器操作系统：</td>
                                    <td>{$sys_info.os}</td>
                                    <td>服务器域名/IP：</td>
                                    <td>{$sys_info.domain} [ {$sys_info.ip} ]</td> 
                                    <td>服务器环境：</td> 
                                    <td>{$sys_info.web_server}</td>       
                                </tr> 
                                <tr>
                                    <td>PHP 版本：</td>
                                    <td>{$sys_info.phpv}</td>
                                    <td>Mysql 版本：</td>
                                    <td>{$sys_info.mysql_version}</td> 
                                    <td>GD 版本</td> 
                                    <td>{$sys_info.gdinfo}</td>  
                                </tr>   
                                <tr>
                                    <td>文件上传限制：</td>
                                    <td>{$sys_info.fileupload}</td>
                                    <td>最大占用内存：</td>
                                    <td>{$sys_info.memory_limit}</td> 
                                    <td>最大执行时间：</td> 
                                    <td>{$sys_info.max_ex_time}</td>  
                                </tr>  
                                <tr>
                                    <td>安全模式：</td>
                                    <td>{$sys_info.safe_mode}</td>
                                    <td>Zlib支持：</td>
                                    <td>{$sys_info.zlib}</td> 
                                    <td>Curl支持：</td> 
                                    <td>{$sys_info.curl}</td>  
                                </tr>  
                            	</table>				
                            </div>
                        </div>
                    </div>
			    </div>
          </div>

           <div class="row">
                <div class="col-md-12">
                    <div class="box  box-success">
				        <div class="box-body">
				        	<div class="info-box">
					         	<table class="table table-bordered">
					         		<tr>
					         			<td>程序版本：</td><td>TPshop {$sys_info.version}</td>
					         			<td>更新时间：</td><td>2016-05-01</td>
					         			<td>程序开发：</td><td>深圳搜豹网络有限公司</td>			         			
					         		</tr>
					         		<tr>
					         			<td>版权所有：</td><td>深圳搜豹网络有限公司</td>
					         			<td>官方授权：</td><td><a href="http://www.tp-shop.cn/" target="_blank">商业授权</a></td>
					         			<td>官方论坛：</td><td><a href="http://www.tp-shop.cn/articleList_cat_id_31.html" target="_blank">TPshop交流论坛</a></td>
					         		</tr>
					         	</table>
				         	</div>
				        </div>
                    </div>
                </div>
          </div>
          <div class="callout callout-success">
            <p> <b>TPshop</b>--( Thinkphp shop的简称 ) B2C 开源商城    包含(pc + wap + android + ios + 微商城)多终端 </p>
          </div>
     </section>
 </div>
 </body>
 </html>