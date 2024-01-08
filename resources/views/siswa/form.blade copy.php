<!DOCTYPE html>
<html>

<head>
		<title>DataTables Example</title>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
</head>

<body>

		<div class="container mt-5">
				<table id="data-table" class="table table-bordered">
						<thead>
								<tr>
										<th>ID</th>
										<th>Nama</th>
								</tr>
						</thead>
						<tbody>
								@foreach ($data as $row)
										@if ($row['id'] % 2 == 0)
												<tr>
														<td>{{ $row['id'] }}</td>
														<td>{{ $row['nama'] }}</td>
												</tr>
										@endif
								@endforeach
						</tbody>
				</table>
		</div>

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

		<script>
				$(document).ready(function() {
						$('#data-table').DataTable();
				});
		</script>

</body>

</html>
