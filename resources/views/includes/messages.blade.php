<script type='text/javascript' src='public/js/materialize.min.js'></script>

@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <script>
            M.toast({html: "<?php echo "<p style='color:#EE2A2A;'>".$error."</p>";?>", classes: 'rounded'}, 4000)
        </script>
    @endforeach
@endif

@if(session('success'))
    <script>
        M.toast({html: "<?php echo "<p style='color:#0FE216;'>".session('success')."</p>";?>", classes: 'rounded'}, 4000)
    </script>
@endif

@if(session('failed'))
    <script>
        M.toast({html: "<?php echo "<p style='color:#EE2A2A;'>".session('failed')."</p>";?>", classes: 'rounded'}, 4000)
    </script>
@endif