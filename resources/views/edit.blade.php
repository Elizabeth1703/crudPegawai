<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
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
	@endforeach
		
 
</body>
</html>