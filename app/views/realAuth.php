<!-- 加载css样式 -->
<link rel="stylesheet" href="/dist/css/realAuth.min.css">
<!-- 内容 -->
<main class="realAuth container">
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
                实名认证
            </div>
            <form class="px-5" id="realAuthForm" method="post" action="realAuth_save.html" novalidate="novalidate">
                <fieldset>
                    <div class="form-group">
                        <p class="text-center text-danger">为保护您账户安全，实名认证成功之后不能修改信息，请认真填写！</p>
                    </div>
                    <!-- 用户名 -->
                    <div class="form-group row">
                        <label class="col-sm-2 control-label ">用户名</label>
                        <div class="col-sm-10">
                            <p class="form-control-static">小强</p>
                        </div>
                    </div>
                    <!-- 姓名 -->
                    <div class="form-group row">
                        <label class="col-sm-2 pt-2 control-label" for="realName">姓名</label>
                        <div class="col-sm-10">
                            <input id="realName" name="realName" class="form-control" type="text" value="">
                        </div>
                    </div>
                    <!-- 性别 -->
                    <div class="form-group row">
                        <label class="col-sm-2 pt-2 control-label" for="sex">性别</label>
                        <div class="col-sm-10">
                            <select id="sex" class="form-control" name="sex" size="1">
                                <option value="0">男</option>
                                <option value="1">女</option>
                            </select>
                        </div>
                    </div>
                    <!-- 证件类型 -->
                    <div class="form-group row">
                        <label class="col-sm-2 pt-2  control-label" for="idtype">证件类型</label>
                        <div class="col-sm-10">
                            <select id="idType" class="form-control" name="idtype" class="select_common" size="1">
                                <option value="0">身份证</option>
                                <option value="1">驾驶证</option>
                                <option value="2">军官证</option>
                            </select>
                        </div>
                    </div>
                    <!-- 证件号码 -->
                    <div class="form-group row">
                        <label class="col-sm-2 pt-2  control-label" for="idnumber">证件号码</label>
                        <div class="col-sm-10">
                            <input id="idNumber" class="form-control" name="idnumber"  type="text" value="">
                        </div>
                    </div>
                    <!-- 出生日期 -->
                    <div class="form-group row">
                        <label class="col-sm-2 pt-2  control-label" for="birthdate">出生日期</label>
                        <div class="col-sm-10">
                            <input id="birthDate"  class="form-control" name="birthdate" type="text">
                        </div>
                    </div>
                    <!-- 证件地址 -->
                    <div class="form-group row">
                        <label class="col-sm-2 pt-2 control-label" for="address">证件地址</label>
                        <div class="col-sm-10">
                            <input id="address" class="form-control" name="address"  type="text" style="max-width: 100%;width:500px;">
                        </div>
                    </div>
                    <!-- 身份证照片 -->
                    <div class="form-group row">
                        <label class="col-sm-2 control-label" for="address">身份证照片</label>
                        <div class="col-sm-10">
                            <p class="text-help text-primary">请点击“选择图片”,选择证件的正反两面照片。</p>
                            <a href="javascript:;" id="viewExample">查看样板</a>
                            <!-- 正面 -->
                            <div class="idCardItem">
                                <div>
                                    <a href="javascript:;" id="uploadBtn1" >上传正面</a>
                                </div>
                                <img alt="" src="" class="uploadImg" id="uploadImg1" />
                                <input type="hidden" value="" name="papersimg01" />
                            </div>
                            <!-- 反面 -->
                            <div class="idCardItem">
                                <div>
                                    <a href="javascript:;" id="uploadBtn2" >上传反面</a>
                                </div>
                                <img alt="" src="" class="uploadImg" id="uploadImg2"/>
                                <input type="hidden" value="" name="papersimg02" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- 提交 -->
                    <div class="form-group">
                        <button type="submit" id="asubmit" class="btn btn-primary col-sm-offset-4" data-loading-text="正在提交"><i class="icon-ok"></i> 提交认证</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</main>
<!-- 加载js -->
<script src="/"></script>
