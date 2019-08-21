<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<body>
<?php include 'dashboard_navbar.php'; ?>
<h3>Add User</h3>
<div class="row">
	<div class="col-md-4">
		<form method="post">
			<div class="form-group">
				<label class="control-label">Username:</label>
				<input type="text" name="username" class="form-control" required>
			</div>

			<div class="form-group">
				<label class="control-label">Password:</label>
				<input type="text" name="password" class="form-control" required>
			</div>

			<button name="submit" class="btn btn-xs btn-default">Submit</button>
		</form>
    </div>
    <?php
      if(isset($_POST['submit'])){
      	$username = $_POST['username'];
      	$password = $_POST['password'];
        
        $query = $db->query("INSERT INTO auth(username,password)VALUES('$username','$password') ");

        if($query){ ?>
         <script>
         	alert("User added !");
         	window.location = 'user.php';
         </script>
        <?php

        }

      }
    ?> 
    <div class="col-md-8">
    	<table class="table table-bordered table-hover project_table">
	<thead>
		<tr>
			<th>S/N</th>
			<th>Username</th>
			<th>Password</th>
		</tr>
	</thead>
	<tbody>
		<?php
           $query = $db->query("SELECT * FROM auth");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $name = $row->username;
               $id = $row->id;
               $passkey = $row->password;
        ?>
             <tr>
             	<td><?php echo $id; ?></td>
             	<td><?php echo $name; ?></td>
             	<td><?php echo $passkey; ?></td>
             </tr>
        <?php
           }
		?>
	</tbody>
</table>
    </div>
</div>
<?php include 'footer.php'; ?>