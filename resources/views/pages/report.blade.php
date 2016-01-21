@extends('app')

@section('content')
    <div class="title">
      <div class="small-12 medium-10 small-centered medium-centered columns">
          <h1 class="text-center">Full Report</h1>
      </div>
    </div>

    <div class="row align-middle">
        <div class="small-12 medium-10 small-centered medium-centered columns">
            <section>
                <div class="row">
                    <div class="small-12 medium-3 small-centered medium-centered columns">
                        <div class="button primary"><a href="/Relatório final.pdf" download style="color: white; width: 100%;">Download</a></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@stop
