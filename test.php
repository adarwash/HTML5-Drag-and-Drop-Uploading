<?php
$age = $_GET['age'];
?>
<!DOCTYPE html>
<html>
	<script type="text/javascript">
	var object1 = {first_name:"ali", last_name:"darwash"}
	var object2 = {first_name:"Rob", last_name:"jones", age:"<?php echo $age; ?>"}

	document.write("Full name is " + object2.first_name +" "+ object2.last_name + " and age is " + object2.age);
	</script>
</html>