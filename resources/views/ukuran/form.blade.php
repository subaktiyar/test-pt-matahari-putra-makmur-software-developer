<!DOCTYPE html>
<html>

<head>
		<title>Select Data</title>
</head>

<body>

		<form method="post" action="{{ route('ukuran.save') }}">
				@csrf
				<label for="ukuran">Pilih Ukuran:</label>
				<select name="ukuran" id="ukuran">
						<option value="kecil" {{ $selectedOption == 'kecil' ? 'selected' : '' }}>Kecil</option>
						<option value="sedang" {{ $selectedOption == 'sedang' ? 'selected' : '' }}>Sedang</option>
						<option value="besar" {{ $selectedOption == 'besar' ? 'selected' : '' }}>Besar</option>
				</select>
				<input type="submit" value="Simpan">
		</form>

		<script>
				document.getElementById('ukuran').value = '{{ $selectedOption }}';
		</script>

</body>

</html>
