<div class="container home">
    <div class="row">
        <div class="col-lg-3 d-none d-lg-block">
            <ul class="nav nav-tabs my-2">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#manage">理财</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#fund">基金</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active container p-0" id="manage">
                    <ul class="list-group">
                        <li class="list-group-item">零钱理财 <span class="float-right">2.4%</span></li>
                        <li class="list-group-item">3个月以内 <span class="float-right">4.2%-6.5%</span></li>
                        <li class="list-group-item">3 ~ 6个月 <span class="float-right">4.3%-7%</span></li>
                        <li class="list-group-item">6 ~ 12个月 <span class="float-right">5.7%-8.5%</span></li>
                        <li class="list-group-item">12个月以上 <span class="float-right">7%起</span></li>
                    </ul>
                </div>
                <div class="tab-pane container" id="fund">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="search" placeholder="国泰成长优选">
                    </div>
                    <button class="btn btn-dark btn-block">搜索</button>
                    <p>
                        <a class="p-2 text-dark" href="#">国企改革白马</a>
                        <a class="p-2 text-dark" href="#">白酒</a>
                        <a class="p-2 text-dark" href="#">成长组合</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 px-0">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- 指示符 -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                </ul>
                <!-- 轮播图片 -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/assets/img/slider1.jpg" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/img/slider2.jpg" width="100%">
                    </div>
                </div>

                <!-- 左右切换按钮 -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
        </div>
        <div class="col-lg-3 d-none d-lg-block mt-2 p-4">
            <div class="row border-bottom pb-3">
                <div class="col-6 statistics">
                    <p>已注册用户</p>
                    <p><span>4193</span>万</p>
                </div>
                <div class="col-6 statistics">
                    <p>为用户赚取</p>
                    <p><span>763.5</span>亿</p>
                </div>
<?php if(!isset($_SESSION['user'])) {?>
                <a href="<?php echo site_url('account/login'); ?>" class=" btn btn-warning btn-block">立即登录</a>
                <a href="<?php echo site_url('account/register'); ?>" class="btn btn-light btn-block">立即注册</a>
<?php } ?>
            </div>
            <div class="py-1 clearfix">
                <div class="float-left">公告</div>
                <div class="float-right"><a class="text-dark" href="#">更多></a></div>
            </div>
            <ul class="p-0">
                <li class="py-2"><a class="text-dark" href="#">关于陆金所VIP体系及权益内容调整的公告</a></li>
            </ul>
        </div>
    </div>
    <div>
        <h5 class="mt-4">本周特推</h5>
        <div class="row">
            <div class="col-lg-9 border">
                <div class="row">
                    <div class="col-4 text-center border-right">
                        <p class="title pt-4 mb-2">金色人生</p>
                        <span class="badge badge-secondary">灵活赎回</span>
                        <p class="interest p-0">3.72%</p>
                        <small>七日年化收益率</small>
                        <div class="row border-top mt-4">
                            <div class="col-6 py-2">1元起</div>
                            <div class="col-6 py-2">灵活赎回</div>
                        </div>
                    </div>
                    <div class="col-4 text-center border-right">
                        <p class="title pt-4 mb-2">金色人生</p>
                        <span class="badge badge-secondary">灵活赎回</span>
                        <p class="interest p-0">3.72%</p>
                        <small>七日年化收益率</small>
                        <div class="row border-top mt-4">
                            <div class="col-6 py-2">1元起</div>
                            <div class="col-6 py-2">灵活赎回</div>
                        </div>
                    </div>
                    <div class="text-center col-4">
                        <p class="title pt-4 mb-2">金色人生</p>
                        <span class="badge badge-secondary">灵活赎回</span>
                        <p class="interest p-0">3.72%</p>
                        <small>七日年化收益率</small>
                        <div class="row border-top mt-4">
                            <div class="col-6 py-2">1元起</div>
                            <div class="col-6 py-2">灵活赎回</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stock col-lg-3 d-none d-lg-block p-2">
                <div class="clearfix">
                    <div class="float-left title">上证指数</div>
                    <div class="float-right text-muted info">2019-04-29 收盘</div>
                </div>
                <p><span class="num">3062.5<i class="fa fa-caret-down fa-fw"></i></span> -23.9(0.77%)</p>
                <p>根据近期指数，为你推荐<a href="#">基金产品></a></p>
            </div>
        </div>
    </div>
    <div>
        <h5 class="mt-4">基金</h5>
        <div class="row fund">
            <div class="col-lg-9 p-0">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-light py-0 pr-0">
                        <div class="row">
                            <div class="col-5">
                                <p class="m-1">易方达中小盘</p>
                                <p class="m-1">穿越牛熊，五年正收益</p>
                            </div>
                            <div class="col-4">
                                <p class="mb-0"><span class="num">37.64%</span><small> 今年以来</small></p>
                            </div>
                            <div class="col-3 p-2">
                                <button class="btn btn-warning">投资</button>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-light py-0 pr-0">
                        <div class="row">
                            <div class="col-5">
                                <p class="m-1">易方达中小盘</p>
                                <p class="m-1">穿越牛熊，五年正收益</p>
                            </div>
                            <div class="col-4">
                                <p class="mb-0"><span class="num">37.64%</span><small> 今年以来</small></p>
                            </div>
                            <div class="col-3 p-2">
                                <button class="btn btn-warning">投资</button>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-light py-0 pr-0">
                        <div class="row">
                            <div class="col-5">
                                <p class="m-1">易方达中小盘</p>
                                <p class="m-1">穿越牛熊，五年正收益</p>
                            </div>
                            <div class="col-4">
                                <p class="mb-0"><span class="num">37.64%</span><small> 今年以来</small></p>
                            </div>
                            <div class="col-3 p-2">
                                <button class="btn btn-warning">投资</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="sift col-lg-3 d-none d-lg-block">
                <div class="item border p-2 mb-2">
                    <p class="title mb-1">精选绩优基金<small> 牛 "基" 看这里</small></p>
                    <p class="mb-0"><span class="pr-2">50%</span>今年以来涨幅</p>
                </div>
                <div class="item border p-2 mb-2">
                    <p class="title mb-1">精选绩优基金<small> 牛 "基" 看这里</small></p>
                    <p class="mb-0"><span class="pr-2">50%</span>今年以来涨幅</p>
                </div>
            </div>
        </div>
    </div>
</div>
