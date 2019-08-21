<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<body>
<?php include 'dashboard_navbar.php'; ?>
<h3>Recent Project Allocations</h3>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover project_table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Siswa</th>
				<th>Mama Project</th>
				<th>Case Study</th>
				<th>Level</th>
				<th>Department</th>
				<th>Matric. NO</th>
			</tr>
		</thead>
		<tbody>
			<?php
             $query = $db->query("SELECT * FROM student");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $name = $row->name;
               $matric = $row->matric;
               $level = $row->level;
               $department = $row->department;
               $project_id = $row->project_id;
               $date = $row->date;
               $id = $row->id;
               $run = $db->query("SELECT project_name,project_case FROM project WHERE id = '$project_id'");
               $run_rows = $run->fetchAll(PDO::FETCH_OBJ);
               foreach($run_rows as $runrow){
                  $case = $runrow->project_case;
                  $title = $runrow->project_name;
               ?>
               <tr>
               	<td><?php echo $id; ?></td>
               	<td><?php echo $name; ?></td>
               	<td class="text-bold"><?php echo $title; ?></td>
               	<td class="text-bold"><?php echo $case; ?></td>
               	<td><?php echo $level; ?></td>
               	<td><?php echo $department; ?></td>
               	<td><?php echo $matric; ?></td>
               </tr>
               <?php
               }
             }
			?>
		</tbody>
	</table>
</div>

<?php include 'footer.php'; ?>