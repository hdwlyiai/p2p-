<div class="container recharge">
    <div class="alert alert-info my-2">
        <h4>账户充值</h4>
        <p class="mb-1">1. 由于银行系统的限制，充值功能建议使用 IE 内核（IE8及以上）的浏览器。</p>
        <p class="mb-0">2. 请注意：为打击信用卡套现行为，充值资金必须经过投资回款后方能允许提现。</p>
    </div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">线上充值（第三方平台）</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">线下充值</a>
        </li>
    </ul>
    <div class="tab-content">
    <div class="tab-pane active container" id="home">
        <h5 class="text-center my-2 text-danger">系统暂不支持，请采用线下充值</h5>
    </div>
    <div class="tab-pane container" id="menu1">
        <table class="table mt-2">
            <thead>
            <tr>
                <th>银行名称</th>
                <th>开户人姓名</th>
                <th>银行帐号</th>
                <th>开户行支行名称</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-danger"><h6>中国工商银行</h6></td>
                <td>源代码	</td>
                <td>62170038233428412750</td>
                <td>府城大道支行</td>
            </tr>
            <tr>
                <td class="text-danger"><h6>中国农业银行</h6></td>
                <td>源代码</td>
                <td>6217003834411112750</td>
                <td>成都天府新谷支行</td>
            </tr>
            <tr>
                <td class="text-danger"><h6>招商银行</h6></td>
                <td>源代码</td>
                <td>6212303810028412750</td>
                <td>成都高新天府大道支行</td>
            </tr>
            </tbody>
        </table>
        <h5>第一步:</h5>
        <p>请选择往以上一个账号汇款或转账您所要充值的金额（若您是跨行转账，推荐选择建行）。注：请保存您的交易记录信息。</p>
        <h5>第二步:</h5>
        <p>款或转账成功后，再选择你所汇款或转账的账号，并填写以下完整的信息后，提交您的线下充值申请。我们将会在下个工作日核对您的申请。</p>
        <div class="col-lg-6">
        <form class="mt-4" action="<?php echo site_url('recharge/check'); ?>" method="post">
            <div class="form-group">
                <label for="pwd"><h6 class="mb-0">银行</h6></label>
                <select class="form-control" id="sel1">
                    <option>工商银行62170038233428412750(府城大道支行)</option>
                    <option>农业银行6217003834411112750(成都天府新谷支行)</option>
                    <option>招商银行6212303810028412750(成都高新天府大道支行)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pwd"><h6 class="mb-0">充值金额</h6></label>
                <input type="text" class="form-control" name="recharge">
            </div>
            <button type="submit" class="btn btn-primary">确认提交</button>
        </form>
        </div>
    </div>
    </div>
</div>
