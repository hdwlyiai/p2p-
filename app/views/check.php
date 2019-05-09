<div class="container mt-2">
    <div class="alert alert-danger" role="alert">
        <?php echo $data['message']; ?>
    </div>
</div>
<script>
    setTimeout(() => {
        location.href = '<?php echo $data['url']; ?>';
    }, 2000);
</script>