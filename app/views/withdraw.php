<div class="container recharge">
    <div class="alert alert-info my-2">
        <h4>账户提现</h4>
        <p class="mb-1">1. 本平台工作日会处理当天 17:00 之前的提款申请。</p>
        <p class="mb-1">2. 为了确保银行转账成功，请您确认银行账号信息的 正确性。</p>
        <p class="mb-1">3. 单笔提现范围-普通用户500.00 元 ~ 500000.00 元。</p>
        <p class="mb-1">4. 单笔提现范围-VIP用户500.00 元 ~ 500000.00 元。</p>
        <p class="mb-1">5. 目前提现服务费：1万元(含) 之内：2.00 元/笔；1万元（以上） ：5.00 元/笔。</p>
        <p class="mb-1">6. 为避免信用卡套现，故充值15日内未投资提现按提现金额的0.4%收取提现费用。</p>
        <p class="mb-0">7. 本次可提现 = 可用余额 - 净值保证金 - 不可提现金额 + 投标冻结 - 最高服务费 - 返还体验金</p>
    </div>
    <div class="row">
        <div class="col-4"><h5 class="mb-0">总金额：<?php echo $data['totalmoney']; ?>元</h5></div>
        <div class="col-4"><h5 class="mb-0">可提现金额：<?php echo $data['usablemoney']; ?>元</h5></div>
        <div class="col-4"><h5 class="mb-0">冻结金额：<?php echo $data['blockedmoney']; ?>元</h5></div>
    </div>
    <div class="col-lg-6">
    <form class="mt-4"  action="<?php echo site_url('withdraw/check'); ?>" method="post">
            <div class="form-group">
                <label for="pwd"><h6 class="mb-0">银行</h6></label>
                <select class="form-control" id="sel1">
                    <option>工商银行</option>
                    <option>农业银行</option>
                    <option>招商银行</option>
                    <option>建设银行</option>
                    <option>中国银行</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pwd"><h6 class="mb-0">开户行</h6></label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="pwd"><h6 class="mb-0">银行卡号</h6></label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="pwd"><h6 class="mb-0">户主姓名</h6></label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="pwd"><h6 class="mb-0">提现金额</h6></label>
                <input type="text" class="form-control" name="withdraw">
            </div>
            <div class="form-group">
                <label for="pwd"><h6 class="mb-0">通知电话</h6></label>
                <input type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">确认提交</button>
        </form>
    </div>
</div>
