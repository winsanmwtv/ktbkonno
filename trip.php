<?php error_reporting(0); ?>
<form id="myForm" action="req.php" method="post">
<?php
        echo '<input type="hidden" name="select-dep" value="'.$_GET['a'].'">';
        echo '<input type="hidden" name="select-dest" value="'.$_GET['b'].'">';

        //Background IMG
        echo '<input type="hidden" name="bgimg" value="bgimg/'.rand(1,22).'.png">';
?>
</form>
<script type="text/javascript">
    document.getElementById('myForm').submit();
</script>