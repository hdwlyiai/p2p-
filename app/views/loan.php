<div class="container">
<form action="<?php echo site_url('loan/check'); ?>" method="post">
  <div class="form-group row">
    <label for="loan" class="col-sm-2 col-form-label">投资金额</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="loan" id="loan" placeholder="请输入要投资的金额">
    </div>
  </div>
  <input type="hidden" name="bid" value="<?php echo $data['bid']; ?>">
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">投资</button>
    </div>
  </div>
</form>

</div>
