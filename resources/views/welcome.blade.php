<form action="{{ route('import-excel') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">Import Excel</button>
</form>