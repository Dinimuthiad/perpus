<form action="{{route('store_kali')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Angka 1</label>
        <input type="text" name="angka1">
    </div>
    <div class="form-group">
        <label for="">Angka 2</label>
        <input type="text" name="angka2">
    </div>
    <div class="form-group">
        <button type="submit">Kali</button>
    </div>
</form>

<h1>Jumlah Adalah : {{$jumlah}} </h1>