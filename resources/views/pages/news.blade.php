@extends('app')

@section('content')
<div class="small-10 small-centered columns">
    </br>
    </br>
    </br>
    <h1>News</h1>
    <p>Currently under development</p>
</div>
@stop


@section('footer')
<script>
    $(document).ready(function() {
        $('.news').addClass("active");
    });
</script>
@stop
