<div class="container mt-2 invest">
    <h5>投资列表</h5>
    <div class="mb-3">
    标的状态
    <div class="btn-group ml-2">
        <button type="button" class="btn btn-light btn-sm">全部</button>
        <button type="button" class="btn btn-light btn-sm">招标中</button>
        <button type="button" class="btn btn-light btn-sm">还款中</button>
    </div></div>
    <table class="table mb-0">
            <thead>
            <tr>
                <th>借款人</th>
                <th>借款标题</th>
                <th>年利率</th>
                <th>金额</th>
                <th>还款方式</th>
                <th>进度</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
<?php foreach ($data as $key => $value) { ?>
            <tr>
                <td><?php echo $value['username']; ?></td>
                <td><?php echo $value['title']; ?></td>
                <td><?php echo $value['interest'] * 100; ?>%</td>
                <td><?php echo $value['borrowmoney']; ?></td>
                <td><?php echo $value['repaytype']; ?></td>
                <td><?php echo $value['loan']/$value['borrowmoney'] * 100; ?>%</td>
                <td><a href="<?php echo site_url('loan/info/' . $value['bid']); ?>" class="btn btn-danger btn-sm">投资</a></td>
            </tr>
<?php } ?>
            </tbody>
        </table>
</div>
</div>
