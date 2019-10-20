@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <script>
            window.Materialize.toast('error', 4000)
        </script>
    @endforeach
@endif