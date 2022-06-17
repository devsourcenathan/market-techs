 	

			    <script type="text/javascript">
			      $(document).ready(function() {
			        $('.<?= $_SESSION['msg_type']; ?>').removeClass("hide");
					$('.<?= $_SESSION['msg_type']; ?>').addClass("show");
					setTimeout(function(){
						$('.<?= $_SESSION['msg_type']; ?>').addClass("hide");
						$('.<?= $_SESSION['msg_type']; ?>').removeClass("show");
					},5000);
					$('.fa-times').click(function(){
						$('.<?= $_SESSION['msg_type']; ?>').addClass("hide");
						$('.<?= $_SESSION['msg_type']; ?>').removeClass("show");
					});
				});
			    </script>

