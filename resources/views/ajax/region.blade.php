<option value="">Pilih Salah Satu</option>
@foreach($region as $region)
    <option value="{{ $region->region }}">{{ $region->region }}</option>
@endforeach