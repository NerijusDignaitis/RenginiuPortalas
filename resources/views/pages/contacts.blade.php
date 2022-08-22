@extends('main')
@section('content')
    <div class="container px-5 my-5">
        <h2 class="text-center mb-5">Susisiekite!</h2>
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="mb-3">
                <label class="form-label" for="vardas">Vardas</label>
                <input class="form-control" id="vardas" type="text" placeholder="Iveskite vardą" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="vardas:required">Vardas yra privalomas.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="elPastoAdresas">El pašto adresas</label>
                <input class="form-control" id="elPastoAdresas" type="email" placeholder="Įveskite el.pašto adresą" data-sb-validations="required,email" />
                <div class="invalid-feedback" data-sb-feedback="elPastoAdresas:required">El.paštas yra privalomas.</div>
                <div class="invalid-feedback" data-sb-feedback="elPastoAdresas:email">El pašto adresas netinkamas.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="aprasymas">Aprašymas</label>
                <textarea class="form-control" id="aprasymas" type="text" placeholder="Jūsų žinutė" style="height: 10rem;" data-sb-validations="required"></textarea>
            </div>
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    <p>To activate this form, sign up at</p>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Nepavyko išsiūsti žinutės</div>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Siūsti užklausą</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection
