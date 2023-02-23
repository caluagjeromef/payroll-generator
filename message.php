<?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-success alert-dismissible fade show text-center" id="alert-message" role="alert">
        <strong style="font-size: 0.9em;">
            <?php echo $_SESSION['message']; ?>
        </strong>
    </div>
    <script>
         setTimeout(function () { 
            document.getElementById('alert-message').style.display = 'none';
          }, 3000);
    </script>
    
    <?php
    unset($_SESSION['message']);
}


if (isset($_SESSION['errmessage'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show text-center" id="alert-message" role="alert">
        <strong style="font-size: 0.9em;">
            <?php echo $_SESSION['errmessage']; ?>
        </strong>
    </div>
    <script>
         setTimeout(function () { 
            document.getElementById('alert-message').style.display = 'none';
          }, 3000);
    </script>
    
    <?php
    unset($_SESSION['errmessage']);
}
?>