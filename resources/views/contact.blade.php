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
        <input type="text" name="isim"/>
        <br/><br/>
        Konu:
        <select name="konu">
            <option>Öğrenci İşleri</option>
            <option>Sosyal Olanaklar</option>
            <option>Diğer</option>
        </select>
        <br/><br/>
        Mesajınız:
        <br/>
        <textarea name="mesaj"></textarea>
        <br/><br/>
        <input type="submit" value="Mesajı Gönder"/>
    </form>
@endsection
