<div class="container mt-2">
    <div class="row">
        <div class="col-6 offset-lg-3">
            <div class="card border-daek">
                <h6 class="card-header border-daek bg-dark text-light">资料修改</h6>
                <div class="card-body p-1">
                    <form class="p-4" action="<?php echo site_url('account/editcheck'); ?>" method="post">
                        <div class="form-group">
                            <label for="username">用户名</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $data['username']; ?>" placeholder="请输入用户名">
                        </div>
                        <div class="form-group">
                            <label for="nickname">昵称</label>
                            <input type="text" class="form-control" id="nickname" name="nickname" value="<?php echo $data['nickname']; ?>" placeholder="请输入昵称">
                        </div>
                        <div class="form-group">
                            <label for="email">邮箱</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email']; ?>" placeholder="请输入邮箱">
                        </div>
                        <div class="form-group">
                            <label for="phone">手机号</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $data['phone']; ?>" placeholder="请输入手机号">
                        </div>
                        <div class="form-group">
                            <label for="income">收入</label>
                            <input type="text" class="form-control" id="income" name="income" value="<?php echo $data['income']; ?>" placeholder="请输入收入">
                        </div>
                        <div class="form-group">
                            <label for="education"><h6 class="mb-0">学历</h6></label>
                            <select class="form-control" name="education" id="education">
                                <option <?php echo $data['education'] === '高中' ? 'selected' : ''; ?> value="高中">高中</option>
                                <option <?php echo $data['education'] === '大专' ? 'selected' : ''; ?> value="大专">大专</option>
                                <option <?php echo $data['education'] === '本科' ? 'selected' : ''; ?> value="本科">本科</option>
                                <option <?php echo $data['education'] === '博士' ? 'selected' : ''; ?> value="博士">博士</option>
                            </select>
                        </div>
                        <input type="hidden" name="uid" value="<?php echo $data['uid']; ?>">
                        <button type="submit" class="btn btn-dark btn-block mt-4">修改</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
