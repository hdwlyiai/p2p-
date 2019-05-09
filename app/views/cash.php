<!-- 加载css样式 -->
<link rel="stylesheet" href="/dist/css/cash.min.css">
<!-- 内容 -->
<main class="container cash">
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
                提现记录
            </div>
            <table class="table table-striped">
                <tr class="bold">
                    <td>金额(￥)</td>
                    <td>手续费(￥)</td>
                    <td>提交时间</td>
                    <td>到账时间</td>
                    <td>提现状态</td>
                </tr>
                <tr>
                    <td>1999.00</td>
                    <td>0.00</td>
                    <td>2017-02-28 19:08:29</td>
                    <td>2017-02-28 19:18:52</td>
                    <td>提现成功 ( 快速 )</td>
                </tr>
                <tr>
                    <td>10000.00</td>
                    <td>2.00</td>
                    <td>2017-01-02 11:06:32</td>
                    <td>2017-01-03 06:49:40</td>
                    <td>提现成功 ( 普通 )</td>
                </tr>
            </table>
        </div>
    </div>
</main>
<!-- 加载js -->
<script src="/"></script>
