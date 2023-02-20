<?php
if (isset($_SESSION['message'])) {
    ?>
    <div class="alert alert-warning alert-dismissible fade show" id="alert-message" role="alert">
        <strong style="font-size: 0.9em;">
            <?php echo $_SESSION['message']; ?>
        </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <script>
        setTimeout(function () {
            document.getElementById('alert-message').style.display = 'none';
        }, 3000);
    </script>

    <?php
    unset($_SESSION['message']);
}
?>