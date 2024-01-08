<option value="">Pilih Salah Satu</option>
@foreach($units as $unit)
    <option value="{{ $unit->cabang }}">{{ $unit->cabang }}</option>
@endforeach