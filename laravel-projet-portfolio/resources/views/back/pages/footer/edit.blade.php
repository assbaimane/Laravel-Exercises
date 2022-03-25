@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">EDITE FOOTER ICI</h1>
    <div class="container">
        <form action="{{ route('footer.update', $footer->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="footerSocial1" class="form-label">Réseau social 1</label>
                <input type="text" class="form-control" id="footerSocial1" name="social1" value="{{ $footer->social1 }}">
            </div>
            <div class="mb-3">
                <label for="footerSocial2" class="form-label">Réseau social 2</label>
                <input type="text" class="form-control" id="footerSocial2" name="social2" value="{{ $footer->social2 }}">
            </div>
            <div class="mb-3">
                <label for="footerSocial3" class="form-label">Réseau social 3</label>
                <input type="text" class="form-control" id="footerSocial3" name="social3" value="{{ $footer->social3 }}">
            </div>


            <div class="mb-3">
                <label for="footerCopyright" class="form-label">Copyright</label>
                <input type="text" class="form-control" id="footerCopyright" name="copyright" value="{{ $footer->copyright }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
