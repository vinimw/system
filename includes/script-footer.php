<!-- jquery Table -->
<script type="text/javascript" async language="javascript" src="js/jquery.dataTables.min.js"></script>

<script type="text/javascript" async language="javascript" src="js/table-managed.min.js"></script>




<?php if(isset($_SESSION['mensagem'])){
	
 ?>
<script type="text/javascript">



$(document).ready(function(e) {




	var tempoModal = 2000;
	$(".form-aviso").html("<?php echo $_SESSION['mensagem']; ?>");
	$(".form-aviso").animate({top: 0}, 500 );
	tempo = setTimeout ("someModal()", tempoModal);


});

</script>



<?php unset($_SESSION['mensagem']); } ?>