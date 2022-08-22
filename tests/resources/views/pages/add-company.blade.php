@extends ('main')
@section ('content')
    <section class="pt-4 center">
        <div class="container px-lg 5">
    <h2>Prideti nauja imone</h2>
    <p>cia bus naujos imones pridejimo forma</p>
        </div>
    </section>
    <div class="form-group mb-3 ">
        <input type="text" class="form-control" name="idNumber" placeholder="ID">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="firstName" placeholder="Kompanija">
    </div>
    <div class="form-group mb-3">
        <input type="number" class="form-control" name="personNumber" placeholder="Asmens kodas">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="pvmCode" placeholder="PVM kodas">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="adress" placeholder="Adresas">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="director" placeholder="Direktorius">
    </div>
    <div class="form-group mb-3">
        <textarea name="description" class="form-control" placeholder="Aprasymas"></textarea>
    </div>

@endsection
