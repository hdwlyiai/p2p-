<!-- 加载css样式 -->
<link rel="stylesheet" href="/assets/css/borrowlist.min.css">
<!-- 内容 -->
<main class="borrowlist container">
    <div class="row">
        <!-- 左 -->
        <div id="accordion" class="col-md-4">
            <!-- 投资项目 -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        投资项目
                    </button>
                    </h5>
                </div>
            </div>
            <!-- 借款项目 -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        借款项目
                    </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
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
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    我的账户
                </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="personal">账户信息</a></li>
                            <li class="list-group-item"><a href="realAuth">实名认证</a></li>
                            <li class="list-group-item"><a href="">银行卡管理</a></li>
                            <!-- <li class="list-group-item"><a href="">登陆记录</a></li> -->
                        </ul>
                    </div>
            </div>
            </div>
            <!-- 资产详情 -->
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        资产详情
                    </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
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
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <a href="borrowlist">信用借款</a>
                    </button>
                    </h5>
                </div>
            </div>
        </div>
        <!-- 右 -->
        <div class="card col-md-8 px-0 right">
            <div class="card mb-3">
                <div class="alert alert-secondary" role="alert">
                    <h3><span id="borrowlist_title">信用</span>借款</h3>
                    <p>
                        <span class="text-info">授信额度：</span><span class="text-danger">2000 </span> &emsp;&emsp;&emsp;
                        <span class="text-info">可借金额：</span><span class="text-danger">2000</span>
                    </p>
                </div>
                <div class="lead pl-3 pb-3">
                    <h4>借款信息<span class="badge badge-primary">信用标</span></h4>
                </div>
                <form class="form-horizontal ml-5 el-borrow-form" novalidate="novalidate" action="<?php echo site_url('personal/borrowcheck'); ?>" method="post">
                    <!-- 借款金额 -->
                    <div class="input-group mb-3">
                        <label class="col-sm-1.5 control-label pt-2">
                            借款金额：
                        </label>
                        <div class="col-sm-3  input-group">
                            <input class="form-control" name="borrowmoney" />
                            <span class="input-group-text">元</span>
                        </div>
                    </div>
                    <!-- 贷款利息 -->
                    <div class="input-group mb-3">
                        <label class="col-sm-1.5 control-label pt-2">
                            贷款利息：
                        </label>
                        <div class="col-sm-3  input-group">
                            <input class="form-control" name="interest" />
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                    <!-- 借款期限 -->
                    <div class="input-group mb-3">
                        <label class="col-sm-1.5 control-label pt-2">
                            借款期限：
                        </label>
                        <div class="col-sm-3 input-group">
                            <select class="form-control" name="borrowtime">
                                <option value="1">1</option>
                                <option value="3">3</option>
                                <option value="6">6</option>
                                <option value="9">9</option>
                                <option value="12">12</option>
                                <option value="24">24</option>
                            </select>
                            <span class="input-group-text">月</span>
                        </div>
                    </div>
                    <!-- 还款方式 -->
                    <div class="input-group mb-3">
                        <label class="col-sm-1.5 control-label pt-2">
                            还款方式：
                        </label>
                        <label class="radio-inline pt-2">
                            <input type="radio" value="按月分期" checked="checked" name="repaytype" />
                            按月分期
                        </label>
                        <label class="radio-inline pt-2">
                            <input type="radio" value="按月到期" name="repaytype" />
                            按月到期
                        </label>
                    </div>
                    <!-- 最小投标 -->
                    <div class="input-group mb-3">
                        <label class="col-sm-1.5 control-label pt-2">
                            最小投标：
                        </label>
                        <div class="col-sm-3  input-group">
                            <input class="form-control" name="minbid" />
                            <span class="input-group-text">元</span>
                        </div>
                    </div>
                    <!-- 最大投标 -->
                    <div class="input-group mb-3">
                        <label class="col-sm-1.5 control-label pt-2">
                            最大投标：
                        </label>
                        <div class="col-sm-3  input-group">
                            <input class="form-control" name="maxbid" />
                            <span class="input-group-text">元</span>
                        </div>
                    </div>
                    <!-- 招标天数 -->
                    <div class="input-group mb-3">
                        <label class="col-sm-1.5 control-label pt-2">
                            招标天数：
                        </label>
                        <div class="col-sm-3 input-group">
                            <select class="form-control" name="days">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <span class="input-group-text">天</span>
                        </div>
                    </div>
                    <!-- 借款标题 -->
                    <div class="input-group mb-3">
                        <label class="col-sm-1.5 control-label pt-2">
                            借款标题
                        </label>
                        <div class="col-sm-6 input-group">
                            <input name="title" class="form-control" />
                        </div>
                    </div>
                    <!-- 借款描述 -->
                    <div class="input-group mb-3">
                        <label class="col-sm-1.5 control-label pt-2">
                            借款描述
                        </label>
                        <div class="col-sm-6  input-group">
                            <textarea name="info" rows="4" class="form-control" style="resize: none;"></textarea>
                        </div>
                    </div>

                    <div class="form-group mb-3 ">
                        <button class="btn btn-primary col-lg-offset-3" type="submit" data-loading-text="提交">
                            提交申请
                        </button>
                    </div>

                    <div class="el-borrow-form-tip">
                        <h4>相关费用</h4>
                        <p>
                            <span class="text-info">利息</span>
                            <span class="el-borrow-cost" id="cost01"><?php echo $data['totalmoney/interest*borrowtime']; ?></span>
                        </p>
                        <p>
                            <span class="text-info">管理费</span>
                            <span class="el-borrow-cost" id="cost03">--</span>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- 加载js -->
<!-- <script>
    $(function(){
        //console.log(location.search.substring(str.indexOf('=')+1));
        switch(location.search.substring(location.search.indexOf('=')+1)){
            case 'xinyong' : $("#borrowlist_title").html("信用");break;
            case 'car' : $("#borrowlist_title").html("汽车抵押");break;
            case 'house' : $("#borrowlist_title").html("房产抵押");break;
        }
    })
</script> -->
