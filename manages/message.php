
          

		<?php if(isset($_SESSION['message']))
            { 
                
        ?>
            <div class="<?= $_SESSION['message_type']; ?> hide">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg"><?= $_SESSION['message']; ?></span>
                <span class="close_btn">
                    <span class="fa fa-times"></span>
                </span>
            </div>
                    
        <?php 
             unset($_SESSION['message']);
            }
       
        ?>  
