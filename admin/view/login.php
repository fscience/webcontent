<div class="panel panel-default" style="width: 300px; top: 20%; left: 50%; margin-left: -150px; display: block; position: fixed; ">
  <div class="panel-heading">用户登录</div>
  <div class="panel-body">
	  <form class="form-horizontal form ajax" action="login.php" method="post" role="form">
		  <div class="form-group">
			  <label for="userName" class="col-sm-4 control-label">用户名</label>
			  <div class="col-sm-8"><input type="text" name="userName" class="form-control" id="userName" placeholder="用户名称"></div>
		  </div>
		  <div class="form-group">
			  <label for="password" class="col-sm-4 control-label">用户密码</label>
			  <div class="col-sm-8"><input type="password" name="password" class="form-control" id="password" placeholder="用户密码"></div>
		  </div>
		  <div class="form-footer" style="text-align: right;">
		  	<button type="submit" class="btn btn-primary">确定</button>
		  </div>
	  </form>
  </div>
</div>