<script>
        <?php if($_GET['status']==1) : ?>
        alert ("bạn đã đăng ký thành công, mời đăng nhập");
        <?php endif ?>
        <?php if($_GET['status']==2) : ?>
        alert ("bạn đã đăng ký thất bại, mời đăng ký lại");
        <?php endif ?>
        <?php if($_GET['status']==3) : ?>
        alert ("Tài khoản hoặc mật khẩu không đúng");
        <?php endif ?>
        <?php if($_GET['status']==4) : ?>
        alert ("Đăng nhập thành công");
        <?php endif ?>

    </script>