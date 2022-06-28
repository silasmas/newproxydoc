<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Notification du paiement</title>
    <link rel="shortcut icon" type="image/rdp-icon" href="{{ asset('assets/logo/logoan.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>

<body class="antialiased">


    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 col-sm-12" style="margin-top:80px">
                <div class="card  mb-3 
                 {{ $data['data']['status'] == 'ACCEPTED' ? 'border-success' : 'border-danger' }}"
                    style="max-width: 50rem;">
                    <div
                        class="card-header bg-transparent {{ $data['data']['status'] == 'ACCEPTED' ? 'border-success' : 'border-danger' }}">
                        Etat de votre paiement
                    </div>
                    <div
                        class="card-body {{ $data['data']['status'] == 'ACCEPTED' ? 'text-success' : 'text-danger' }}">
                        <h2 class="card-title">{{ $message['message'] }}</h2>
                        <h5>Etat : {{ $message['status'] }}</h5>
                        {{-- <p class="card-text">{{ $data['data']['status'] }}</p> --}}
                        <p class="card-text">Montant : {{ $data['data']['amount'] . $data['data']['currency'] }}</p>
                        {{-- <p>Opérateur : {{ isset($operateur)?$operateur:"absent"}}</p> --}}
                        <p class="card-text">
                            Description : <br>
                            <b> {{ $ab->nom }}</b>
                            @forelse ($ab->service as $s)
                              <ul>
                                <li>{{ $s->nom }}</li>
                              </ul>
                            @empty
                                
                            @endforelse 
                        </p>

                        <p class="card-text">
                            Date :{{ \Carbon\Carbon::parse($data['data']['payment_date'])->isoFormat('LLL') }}

                        </p>
                    </div>
                    <div
                        class="card-footer bg-transparent  {{ $data['data']['status'] == 'ACCEPTED' ? 'border-success' : 'border-danger' }}">
                        @if ($data['data']['status'] == 'ACCEPTED')
                            <button type="button" id="mesAbonnements" onclick="retour(this)"
                                class="btn btn-outline-success" style="cursor: pointer">Voir la page
                                d'abonnement</button>
                            {{-- <a href="{{ route('mesAbonnements') }}" type="button"
                                class="btn btn-outline-successs "></a> --}}
                        @else
                            {{-- <a href="{{ route('abonnement') }}" type="button" class="btn btn-outline-danger ">Retour
                            </a> --}}
                            <button type="button" id="abonnement" onclick="retour(this)"
                            class="btn btn-outline-danger" style="cursor: pointer">Retour</button>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script>
        function retour(val) {
            // alert(val.id)
            document.location.href = val.id
        }
    </script>
</body>

</html>
