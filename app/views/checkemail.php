<div class="container mt-2">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card border-daek">
                <h6 class="card-header border-daek bg-dark text-light">请输入邮箱验证码</h6>
                <div class="card-body p-1">
                    <form class="p-4" action="<?php echo site_url('account/checkemail'); ?>" method="post">
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email']; ?>" placeholder="请输入邮箱">
                                </div>
                            </div>
                            <div class="col-3">
                                <button id="send_email" type="button" class="btn btn-dark" >发送验证码</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="text">验证码</label>
                            <input type="text" class="form-control" id="text" name="code" placeholder="请输入验证码">
                        </div>
                        <button type="submit" class="btn btn-dark btn-block mt-4">验证</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#send_email').click(function () {
        $.ajax({
            type: 'get',
            data: {
                email: $('#email').val()
            },
            url: 'http://p2p.io/index.php/account/sendemail',
            success: function (result) {
                alert('发送成功');
            }
        });
    });
</script>
