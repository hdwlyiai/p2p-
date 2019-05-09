<div class="container mt-3 info">
    <div class="row">
        <div class="col-lg-3">
            <div class="card mb-3">
                <div class="card-header">借款人</div>
                <div class="card-body">
                    <p>籍贯：四川 - 成都</p>
                    <p>专职客服：<a href="">码妹妹</a></p>
                    <p class="mb-0 infoicon">认证信息：<i class="fa fa-user-circle"></i></p>
                </div>
            </div>
            <a class="btn btn-primary btn-sm btn-block" href="<?php echo site_url('account/editinfo'); ?>">修改资料</a>
        </div>
        <div class="col-lg-9 row">
            <div class="col-6">
                <h4>zs借款<span class="badge badge-secondary ml-2">信</span></h4>
                <p>借款金额	2,000.00</p>
                <p>年化利率	10.00%</p>
                <p>借款期限	3月</p>
                <p>投标奖励	0.00</p>
                <p>还款方式	按月分期还款</p>
                <p>最小投标	20.00</p>
                <p>剩余时间</p>
            </div>
            <div class="col-6">
                <p>投标总数	2</p>
                <p>还需金额	0.00元</p>
                <p>投标进度</p>
                <div class="progress mb-3">
                    <div class="progress-bar" style="width:70%"></div>
                </div>
                <p>还款中</p>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">借款人信息</div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3">注册时间	<?php echo date("Y/m/d", $data['regtime']); ?></div>
                <div class="col-lg-3">借款额度	2000</div>
                <div class="col-lg-3">文化程度	<?php echo $data['education']; ?></div>
                <div class="col-lg-3">每月收入	<?php echo $data['income']; ?></div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">审核认证信息</div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3">认证时态度	优</div>
                <div class="col-lg-3">信贷知识掌握情况	优</div>
                <div class="col-lg-3">借款感言	给我2000度过难关</div>
                <div class="col-lg-3">审核员认证意见    啊啊啊啊啊</div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">审核认证信息</div>
        <div class="card-body">
        <table class="table table-bordered mb-0">
            <thead>
            <tr>
                <th>材料类型</th>
                <th>材料数量</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>本人身份证</td>
                <td>2</td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">还款情况</div>
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <thead>
                <tr>
                    <th>还款状态</th>
                    <th>最近一周</th>
                    <th>最近1月</th>
                    <th>最近6月</th>
                    <th>6个月前</th>
                    <th>总计[?]</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>提前还款</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>准时还款</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>逾期已还</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>逾期未还</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">投标记录</div>
        <div class="card-body">
        <table class="table table-bordered mb-0">
            <thead>
            <tr>
                <th>投标人</th>
                <th>年利率</th>
                <th>有效金额(¥)</th>
                <th>投标时间</th>
                <th>类型</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>si*****</td>
                <td>10%</td>
                <td>1,000.00</td>
                <td>2016-05-11 06:42:11</td>
                <td>手动投标</td>
            </tr>
            <tr>
                <td>si*****</td>
                <td>10%</td>
                <td>1,000.00</td>
                <td>2016-05-11 06:42:11</td>
                <td>手动投标</td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
