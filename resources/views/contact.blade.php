@extends("layout")
@section('main')
    <div class="container mt-5">
        <form class="row g-3 needs-validation" action="{{ url('/contact') }}" method="POST" novalidate>
            @csrf

            <h4 class="text-lg font-weight-semibold text-red mb-4">Genel Bilgiler</h4>
            <div class="col-md-4">
                <label for="validationServer01" class="form-label">İsim</label>
                <input type="text" class="form-control" id="validationServer01" name="first_name" required>
                <div class="invalid-feedback">Lütfen isminizi giriniz.</div>
            </div>
            <div class="col-md-4">
                <label for="validationServer02" class="form-label">Soyisim</label>
                <input type="text" class="form-control" id="validationServer02" name="last_name" required>
                <div class="invalid-feedback">Lütfen soyisminizi giriniz.</div>
            </div>
            <div class="col-md-3">
                <label for="validationServer03" class="form-label">Cinsiyetiniz</label>
                <select class="form-select" id="validationServer03" name="gender" required>
                    <option>Erkek</option>
                    <option>Kadın</option>
                </select>
                <div class="invalid-feedback">Lütfen cinsiyetinizi seçiniz.</div>
            </div>
            <div class="col-md-6">
                <label for="validationServerDOB" class="form-label">Doğum Tarihiniz</label>
                <input type="date" class="form-control" id="validationServerDOB" name="dob" required>
                <div class="invalid-feedback">Lütfen doğum tarihinizi giriniz.</div>
            </div>
            <div class="col-md-4">
                <label for="validationServer04" class="form-label">Doğum Yeriniz</label>
                <input type="text" class="form-control" id="validationServer04" name="birth_place" required>
                <div class="invalid-feedback">Lütfen doğum yerinizi giriniz.</div>
            </div>

            <h5 class="text-lg font-weight-semibold text-red mb-2 mt-5">İletişim Bilgileri</h5>
            <div class="col-md-6">
                <label for="validationServerEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="validationServerEmail" name="email" required>
                <div class="invalid-feedback">Lütfen email adresinizi giriniz.</div>
            </div>
            <div class="col-md-6">
                <label for="validationServerPhone" class="form-label">Cep Telefonu</label>
                <input type="tel" class="form-control" id="validationServerPhone" name="phone" required>
                <div class="invalid-feedback">Lütfen telefon numaranızı giriniz.</div>
            </div>
            <div class="col-md-3">
                <label for="validationServer05" class="form-label">İl</label>
                <select class="form-select" id="validationServer05" name="city" required>
                    <option selected disabled value="">Seçiniz...</option>
                    <option>Balıkesir</option>
                    <option>Samsun</option>
                    <option>Çanakkale</option>
                </select>
                <div class="invalid-feedback">Lütfen bir şehir seçiniz.</div>
            </div>
            <div class="col-md-4">
                <label for="validationServer06" class="form-label">İlçe</label>
                <input type="text" class="form-control" id="validationServer06" name="district" required>
                <div class="invalid-feedback">Lütfen ilçe giriniz.</div>
            </div>
            <div class="col-md-4">
                <label for="validationServerPostalCode" class="form-label">Posta Kodu</label>
                <input type="text" class="form-control" id="validationServerPostalCode"
                       placeholder="Örneğin: 34000"
                       pattern="^\d{5}$"
                       maxlength="5"
                       name="postal_code"
                       required>
                <div class="invalid-feedback">Lütfen geçerli bir posta kodu giriniz (5 haneli).</div>
            </div>
            <div class="col-md-12">
                <label for="validationServerAddress" class="form-label">Adres</label>
                <textarea class="form-control" id="validationServerAddress" name="address" rows="3" required></textarea>
                <div class="invalid-feedback">Lütfen adresinizi giriniz.</div>
            </div>
            <div class="col-md-12">
                <h5 class="text-lg font-weight-semibold text-red mb-2 mt-3">Diğer Bilgiler</h5>
                <label class="form-label">Başvurmak istediğiniz pozisyon:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="position" id="position1" value="developer" required>
                    <label class="form-check-label" for="position1">Developer</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="position" id="position2" value="designer" required>
                    <label class="form-check-label" for="position2">Designer</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="position" id="position3" value="manager" required>
                    <label class="form-check-label" for="position3">Manager</label>
                </div>
                <div class="invalid-feedback">Bir pozisyon seçmelisiniz.</div>
                <div class="col-md-12">
                    <h6 class="text-lg font-weight-semibold mt-3">Yabancı Dilleriniz</h6>
                </div>
                <div class="col-md-12">
                    <label for="foreignLanguages" class="form-label">Lütfen bildiğiniz yabancı dilleri yazınız (her birini yeni bir satıra yazın):</label>
                    <textarea class="form-control" id="foreignLanguages" name="foreign_languages" rows="4" placeholder="Dil 1&#10;Dil 2&#10;Dil 3" required></textarea>
                    <div class="invalid-feedback">Lütfen en az bir yabancı dil giriniz.</div>
                </div>
            </div>
            <div class="col-md-12">
                <h6 class="text-lg font-weight-semibold mb-2">Tecrübeleriniz</h6>
            </div>
            <div class="col-md-12">
                <label for="experiences" class="form-label">Lütfen tecrübelerinizi yazınız:</label>
                <textarea class="form-control" id="experiences" name="experiences" rows="4" placeholder="Tecrübelerinizi buraya yazın..." required></textarea>
                <div class="invalid-feedback">Lütfen en az bir tecrübe giriniz.</div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Gönder</button>
            </div>

            <script>
                (function () {
                    'use strict'
                    const forms = document.querySelectorAll('.needs-validation')

                    Array.from(forms).forEach(function (form) {
                        form.addEventListener('submit', function (event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()

                                // Hatalı alanlara `is-invalid` sınıfı ekleme
                                const inputs = form.querySelectorAll('input, select, textarea');
                                inputs.forEach(function (input) {
                                    if (!input.checkValidity()) {
                                        input.classList.add('is-invalid');
                                    } else {
                                        input.classList.remove('is-invalid');
                                        input.classList.add('is-valid');
                                    }
                                });
                            }
                            form.classList.add('was-validated')
                        }, false)
                    })
                })()
            </script>

@endsection
