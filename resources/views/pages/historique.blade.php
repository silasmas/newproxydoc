@extends('templates.template')
@section('title', 'Mes achats')
@section('page', 'historique')

@section('autreStyle')
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.css') }}">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('js/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @include('parties.banner')
     <!-- Doctors Detail Start Here -->
     <section class="team-details-wrap-layout1 bg-light-accent100">
        
            <div class="row" style="margin: 10px;">
                <div class=" col-lg-12 col-md-12">
                    <div class="team-detail-box-layout1">
                        <div class="single-item">
                            <div class="table-responsive">
                                <h3 class="section-title title-bar-primary2">Historiques d'achats :</h3>
                                <p class="hide-on-desktop-menu" style="margin-bottom: 20px">
faites glisser le tableau pour voir la suite
                                </p>
                                <table class="table table-striped table-bordered table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Moyen de paiement</th>
                                            <th>Montant</th>
                                            <th>Etat</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($historique as $h)
                                        <tr class="gradeX">
                                            <td >{{ $loop->iteration }}</td>
                                            <td>{{ \Carbon\Carbon::parse($h->updated_at)->isoFormat('LLL') }}</td>
                                            <td>{{ $h->description }}</td>
                                            <td>{{ $h->operateur }}</td>
                                            <td>MBBS, M.D</td>
                                            <td>
                                                <label  class=" @switch($h->reference)
                                                    @case("ACCEPTED")
                                                    {{ "text-success"  }}
                                                        @break
                                                    @case("REFUSED")
                                                    {{ "text-danger" }}
                                                        @break
                                                    @case("")
                                                        {{ "text-warning" }}
                                                        @break
                                                
                                                @endswitch">

                                                    @switch($h->reference)
                                                        @case("ACCEPTED")
                                                       {{ "REUSSI" }}
                                                            @break
                                                        @case("REFUSED")
                                                            {{ "ECHEC" }}
                                                            @break
                                                        @case("")
                                                            {{ "En attente" }}
                                                            @break
                                                    
                                                    @endswitch
                                                    {{-- {{ $h->reference=="ACCEPETED"?:"" }} --}}
                                                </label>
                                            </td>
                                            <td class="schedule-btn">
                                                <a href="{{ route('detailHistorique', ['id'=>$h->id]) }}" class="btn btn-primary">voir en detail</a>
                                            </td>
                                        </tr>                                            
                                        @empty
                                            <p class=" text-center text-danger">Aucun historique</p>
                                        @endforelse
                                        
                                    </tbody>

                                </table>
                               
                              
                            </div>
                        </div>
                        <div class="col-12 form-group text-center">
                            {{ $historique->links() }}
                        </div>
                    </div>
                   
                </div>
            </div>
    </section>
    <!-- Doctors Detail End Here -->
@endsection
@section('autreScript')
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables/datatables.min.js') }}"></script>
    <script type="text/javascript">
     $(document).ready(function() {

$('.dataTables-example').DataTable({
    language: {
        processing: "Traitement en cours...",
        search: "Rechercher&nbsp;:",
        lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
        info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
        infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix: "",
        loadingRecords: "Chargement en cours...",
        zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
        emptyTable: "Aucune donnée disponible dans le tableau",
        paginate: {
            first: "Premier",
            previous: "Pr&eacute;c&eacute;dent",
            next: "Suivant",
            last: "Dernier"
        },
        aria: {
            sortAscending: ": activer pour trier la colonne par ordre croissant",
            sortDescending: ": activer pour trier la colonne par ordre décroissant"
        }
    },
    pageLength: 5,
    responsive: true,
    dom: '<"html5buttons"B>lTfgitp',
    buttons: [
        {
            customize: function(win) {
                $(win.document.body).addClass('white-bg');
                $(win.document.body).css('font-size', '10px');

                $(win.document.body).find('table')
                    .addClass('compact')
                    .css('font-size', 'inherit');
            }
        }
    ]

});

$(document).on("click", "#ouvrir", function(e) {
    e.preventDefault();
    var id = $(this).attr("href");
    // var idv = $(this).attr("title");
    //alert(id);
    modifier(id, '../ouverture');
});
$(document).on("click", "#cloturer", function(e) {
    e.preventDefault();
    var id = $(this).attr("href");
    // var idv = $(this).attr("title");
    //alert(id);
    modifier(id, '../cloturer');
});
$(document).on("click", "#suspendre", function(e) {
    e.preventDefault();
    var id = $(this).attr("href");
    // var idv = $(this).attr("title");
    //alert(id);
    modifier(id, '../suspendre');
});

});

        function editProfil(val) {
            event.preventDefault()
            edite(val, "../editprofil")
        }
        function editPassword(val) {
            event.preventDefault()
            edite(val, "../editPassword")
        }

        function edite(form, url) {

            $.ajax({
                url: url,
                method: "POST",
                data: $(form).serialize(),
                success: function(data) {
                    if (!data.reponse) {
                        swal({
                            title: data.msg,
                            icon: 'error'
                        })
                    } else {
                        swal({
                            title: data.msg,
                            icon: 'success'
                        })
                       actualiser()
                    }

                },
            });

        }
        
    function actualiser() {
        location.reload();
    }

    </script>
@endsection
