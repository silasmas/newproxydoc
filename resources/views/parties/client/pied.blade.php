

<script src="{{ asset('assets/client/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery-migrate-1.4.1.min.js') }}"></script>
<script src="{{ asset('assets/client/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/client/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.typeahead.min.js') }}"></script>
<script src="{{ asset('assets/client/js/datatables.min.js') }}"></script>
<script src="{{ asset('assets/client/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('assets/client/js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/client/js/raphael-min.js') }}"></script>
<script src="{{ asset('assets/client/js/morris.min.j') }}s"></script>
<script src="{{ asset('assets/client/js/echarts.min.js') }}"></script>
<script src="{{ asset('assets/client/js/echarts-gl.min.js') }}"></script>

<script src="{{ asset('assets/client/js/main.js') }}"></script>
<script src="{{ asset('js/sweetalert/sweetalert.min.js') }}"></script>
@livewireScripts()
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script>
     window.addEventListener('swal:modal',event=>{
            swal({
                title: event.detail.titre,
                text: event.detail.text+event.detail.from,
                icon: event.detail.type,
            });
            switch (event.detail.from) {
                case "Monpanier":
               // window.livewire.emit('updateMonPanier');
                    break;
                case "Detail":
              //  window.livewire.emit('updateDetail');
                    break;
            
                default:
                    break;
            }
        });
    window.addEventListener('swal:confirm',event=>{
            swal({
                title: event.detail.titre,
                text: event.detail.text,
                icon: event.detail.type,
            dangerMode: true,
            buttons: {
                cancel: 'Non',
                delete: 'OUI'
            }
        }).then(function(willDelete) {
            if (willDelete) {
               switch (event.detail.from) {
                case 'Monpanier':
                window.livewire.emit('removeCardeMonPanier',event.detail.id);
                    break;
                case 'panier':
                    
                    window.livewire.emit('removeCarde',event.detail.id);
                    break;
                case 'Detail':
                    
                    window.livewire.emit('ajoutCardsDetail',event.detail.id);
                    break;
               
                default:
                    break;
               }
            }

        });
        });
</script>
</body>
</html>
