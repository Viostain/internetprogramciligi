@extends("layout")
@section('main')
    İletişim İçeriği<br/>
    <br/>
    @if($errors->any())
        Lütfen İsim ve Mesaj Alanlarını Doldurunuz.
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif
    <h5>İletişim Formu</h5>
    <form action="" method="POST">
        @csrf
        İsminiz:
        <br/>
        <input type="text" name="isim" value="{{ old('isim') }}"/>
        <br/><br/>
        Konu:
        <select name="konu">
            <option value="ogrenci-isleri" {{ old('konu') == 'ogrenci-isleri' ? 'selected' : '' }}>Öğrenci İşleri</option>
            <option value="sosyal-olanaklar" {{ old('konu') == 'sosyal-olanaklar' ? 'selected' : '' }}>Sosyal Olanaklar</option>
            <option value="diger" {{ old('konu') == 'diger' ? 'selected' : '' }}>Diğer</option>
        </select>
        <br/><br/>
        Mesajınız:
        <br/>
        <textarea name="mesaj">{{ old('mesaj') }}</textarea>
        <br/><br/>
        <input type="submit" value="Mesajı Gönder"/>
    </form>
@endsection
