<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h3>Data Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" class="@error('nama') is-invalid @enderror"> <br/>
			@error('nama')
			<div class="invalid-feedback">{{ $message }}</div>
        	@enderror
		  
		Jabatan <input type="text" name="jabatan" class="@error('jabatan') is-invalid @enderror"> <br/>
			@error('jabatan')
			<div class="invalid-feedback">{{ $message }}</div>
        	@enderror
		  
		Umur <input type="text" name="umur" class="@error('umur') is-invalid @enderror"> <br/>
			@error('umur')
			<div class="invalid-feedback">{{ $message }}</div>
        	@enderror
		 
		Alamat <textarea name="alamat" class="@error('alamat') is-invalid @enderror"></textarea> <br/>
			@error('alamat')
			<div class="invalid-feedback">{{ $message }}</div>
        	@enderror
		 
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>