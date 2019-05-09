<!-- 加载css样式 -->
<link rel="stylesheet" href="/dist/css/running.min.css">
<!-- 内容 -->
<main class="running container">
    <div class="row">
        <!-- 左 -->
        <div id="accordion" class="col-lg-3">
            <!-- 投资项目 -->
            <div class="card">
                <div class="card-header py-1" id="headingOne">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        投资项目
                    </button>
                    </h5>
                </div>
            </div>
            <!-- 借款项目 -->
            <div class="card">
                <div class="card-header py-1" id="headingTwo">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        借款项目
                    </button>
                    </h5>
                </div>
                <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="loanitem">借款项目</a></li>
                            <li class="list-group-item"><a href="repayment">还款明细</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- 我的账户 -->
            <div class="card">
            <div class="card-header py-1" id="headingThree">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    我的账户
                </button>
                </h5>
            </div>
            <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="personal">账户信息</a></li>
                        <li class="list-group-item"><a href="realAuth">实名认证</a></li>
                        <!-- <li class="list-group-item"><a href="">银行卡管理</a></li>
                        <li class="list-group-item"><a href="">登陆记录</a></li> -->
                    </ul>
                </div>
            </div>
            </div>
            <!-- 资产详情 -->
            <div class="card">
                <div class="card-header py-1" id="headingFour">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        资产详情
                    </button>
                    </h5>
                </div>
                <div id="collapseFour" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="running">账户流水</a></li>
                            <li class="list-group-item"><a href="rechargelist">充值明细</a></li>
                            <li class="list-group-item"><a href="cash">提现记录</a></li>
                            <!-- <li class="list-group-item"><a href="">收款明细</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- 个人资料 -->
            <div class="card">
                <div class="card-header py-1" id="headingFive">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <a href="borrowlist">信用借款</a>
                    </button>
                    </h5>
                </div>
            </div>
        </div>
        <!-- 右 -->
        <div class="card col-md-8 px-0">
            <div class="card-header">
                账户流水
            </div>
            <table class="table table-striped">
                <tr class="bold">
                    <td>发生额</td>
                    <td>账户余额</td>
                    <td>可用余额</td>
                    <td>冻结金额</td>
                    <td>发生时间</td>
                    <td>类型</td>
                </tr>
                <tr>
                    <td>8.53</td>
                    <td>2,451.43</td>
                    <td>881.43</td>
                    <td>1,570.00</td>
                    <td>2017-05-20 16:02:34</td>
                    <td>收款</td>
                </tr>
                <tr>
                    <td>-0.05</td>
                    <td>2,442.90</td>
                    <td>872.90</td>
                    <td>1,570.00</td>
                    <td>2017-05-31 06:02:21</td>
                    <td>利息管理费</td>
                </tr>
            </table>
        </div>
    </div>
</main>
<!-- 加载js -->
<script src="/"></script>
