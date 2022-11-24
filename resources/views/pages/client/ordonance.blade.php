@extends('templates.templateCl')
@section('title', 'dashboard')
@section('autreStyle')
    <link href="{{ asset('js/sweetalert/sweetalert.css') }}" rel="stylesheet">
@endsection

@section('content')
<main class="main-content">
    @livewire("cl-ordonance")
</main>
@endsection

@section('autreScript')
    <script>
        const nvFichier = document.getElementById('input-file');
        const filename = document.querySelector('.list-file .name-file-upload')
        console.log(filename);

        nvFichier.addEventListener('change', function() {
            const fichier = this.files[0];
            if (fichier) {
                let namefile = fichier.name;
                if (namefile.length >= 12) {

                    let splitName = namefile.split('.');

                    namefile = splitName[0].substring(0, 12) + "... ." + splitName[1];

                }
                const analyseur = new FileReader();
                analyseur.readAsDataURL(fichier);
                analyseur.addEventListener('load', function() {
                    $('.col-file').removeClass('d-none')
                    filename.innerHTML = namefile;
                })
            }
        })
        $('.block-remove .btn-remove').click(function(e){
            e.preventDefault()
            $(this).parent().parent().parent().parent().addClass('d-none')
            $('.col-file').addClass('d-none')
            $(nvFichier).val('');
        })
    </script>
@endsection
