<div class="pt-5 login">
    <div class="row">
        <div class="col-lg-4 offset-lg-2 pt-5">
            <form class="p-4" action="<?php echo site_url('account/registercheck'); ?>" method="post">
                <div class="form-group">
                    <label for="username">用户名</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名">
                </div>
                <div class="form-group">
                    <label for="password">密码</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="请输入密码">
                </div>
                <div class="form-group">
                    <label for="password">确认密码</label>
                    <input type="password" class="form-control" id="password" placeholder="请输入密码">
                </div>
                <button class="btn btn-dark btn-block mt-4">注册</button>
            </form>
        </div>
    </div>
</div>
