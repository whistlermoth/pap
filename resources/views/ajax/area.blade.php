<option value="">Pilih Salah Satu</option>
@foreach($areas as $area)
    <option value="{{ $area->area }}">{{ $area->area }}</option>
@endforeach