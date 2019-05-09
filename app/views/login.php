<div class="pt-5 login">
    <div class="row">
        <div class="col-lg-4 offset-lg-2 pt-5">
            <form class="p-4" action="<?php echo site_url('account/logincheck'); ?>" method="post">
                <div class="form-group">
                    <label for="username">用户名</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="请输入用户名">
                </div>
                <div class="form-group">
                    <label for="password">密码</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="请输入密码">
                </div>
                <button type="submit" class="btn btn-dark btn-block mt-4">登录</button>
            </form>
        </div>
    </div>
</div>
