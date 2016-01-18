@extends('app')

@section('content')
    <div class="title" id="news">
        <div class="small-12 medium-10 small-centered medium-centered columns">
            <h1 class="text-center">News</h1>
        </div>
    </div>
    <div class="row align-middle">
        <div class="small-12 medium-10 small-centered columns">
            <section>
                <p>Currently under development</p>
            </section>
        </div>
    </div>
@stop


@section('footer')
<script>
    $(document).ready(function() {
        $('#news').addClass("active");
    });
</script>
@stop
