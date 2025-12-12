<div class="mb-3">
    <label>NIM</label>
    <input type="text" name="nim" class="form-control" value="{{ old('nim', $mahasiswa->nim ?? '') }}">
</div>

<div class="mb-3">
    <label>Nama Lengkap</label>
    <input type="text" name="nama_lengkap" class="form-control" value="{{ old('nama_lengkap', $mahasiswa->nama_lengkap ?? '') }}">
</div>

<div class="mb-3">
    <label>Jurusan</label>
    <input type="text" name="jurusan" class="form-control" value="{{ old('jurusan', $mahasiswa->jurusan ?? '') }}">
</div>

<div class="mb-3">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir', $mahasiswa->tempat_lahir ?? '') }}">
</div>

<div class="mb-3">
    <label>Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', $mahasiswa->tanggal_lahir ?? '') }}">
</div>

<div class="mb-3">
    <label>Nomer Telepon</label>
    <input type="text" name="nomer_telepon" class="form-control" value="{{ old('nomer_telepon', $mahasiswa->nomer_telepon ?? '') }}">
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $mahasiswa->email ?? '') }}">
</div>

<div class="mb-3">
    <label>Alamat Tinggal</label>
    <textarea name="alamat_tinggal" class="form-control">{{ old('alamat_tinggal', $mahasiswa->alamat_tinggal ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Foto</label>
    <input type="file" name="foto" class="form-control">

    @if(isset($mahasiswa) && $mahasiswa->foto)
    <img src="{{ asset('storage/' . $mahasiswa->foto) }}" width="80" class="mt-2">
    @endif
</div>
