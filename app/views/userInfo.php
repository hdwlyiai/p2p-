<!-- 加载css样式 -->
<link rel="stylesheet" href="/dist/css/userInfo.min.css">
<!-- 内容 -->
<main class="userInfo container">
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
        <div class="card px-0">
            <div class="card-header">
                个人资料
            </div>
            <form id="userInfoForm" class="px-5 py-4" action="" method="post"
                    style="width: 700px;">
                <!-- 用户名 -->
                <div class="form-group row">
                    <label class="col-md-2 control-label">
                        用户名
                    </label>
                    <div class="col-md-10">
                        <p class="form-control-static">xiaoq</p>
                    </div>
                </div>
                <!-- 姓名 -->
                <div class="form-group row">
                    <label class="col-sm-2 control-label">
                        真实姓名
                    </label>
                    <div class="col-sm-10">
                        <p class="form-control-static">
                            小强
                        </p>
                    </div>
                </div>
                <!-- 证件 -->
                <div class="form-group row">
                    <label class="col-sm-2 control-label">
                        证件号码
                    </label>
                    <div class="col-sm-10">
                        <p class="form-control-static">


                            512************4646

                        </p>
                    </div>
                </div>
                <!-- 手机 -->
                <div class="form-group row">
                    <label class="col-sm-2 control-label">
                        手机号码
                    </label>
                    <div class="col-sm-10">
                        <input type="text" name="phone" style="width: 250px;" class="form-control" value=""/>
                    </div>
                </div>
                <!-- 电话 -->
                <div class="form-group row">
                    <label class="col-sm-2 control-label">
                        联系电话
                    </label>
                    <div class="col-sm-10">
                        <input type="text" name="tel" style="width: 250px;" class="form-control" value=""/>
                    </div>
                </div>
                <!-- 学历 -->
                <div class="form-group row">
                    <label class="col-sm-2 control-label">
                        个人学历
                    </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="edu" style="width: 180px">
                            <option value="1">初中</option>
                            <option value="2">中专/高中</option>
                            <option value="3">专科</option>
                            <option value="4">本科</option>
                            <option value="5">硕士研究生</option>
                            <option value="6">博士研究生</option>
                        </select>
                    </div>
                </div>
                <!-- 收入 -->
                <div class="form-group row">
                    <label class="col-sm-2 control-label">
                        个人收入
                    </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="salaryLevel" style="width: 180px">
                            <option value="1">1000元以下</option>
                            <option value="2">1000元-1999元</option>
                            <option value="3">2000元-2999元</option>
                            <option value="4">3000-4999</option>
                            <option value="5">5000-8999</option>
                            <option value="6">10000以上</option>
                        </select>
                    </div>
                </div>
                <!-- 地址 -->
                <div class="form-group row">
                    <label class="col-sm-2 control-label">
                        联系地址
                    </label>
                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" value=""/>
                    </div>
                </div>
                <!-- 保存 -->
                <div class="form-group row">
                    <button id="submitBtn" type="submit" class="btn btn-primary col-sm-offset-5"
                            data-loading-text="数据保存中。。。">
                        保存数据
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
<!-- 加载js -->
<script src="/"></script>
