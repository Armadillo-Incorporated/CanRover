@extends('app')

@section('content')
<div class="title">
    <div class="small-12 medium-10 small-centered medium-centered columns">
        <h1 class="text-center">Create Album</h1>
    </div>
</div>
<div class="row align-middle">
    <div class="small-12 medium-10 small-centered columns">
        <section>
            <form data-abide novalidate enctype="">
                <div data-abide-error class="alert callout" style="display: none;">
                  <p><i class="fi-alert"></i> There are some errors in your form.</p>
                </div>
                <div class="row">
                  <div class="small-12 columns">
                    <label>Album Name
                      <input type="text" placeholder="Ex: Parachute Construction" aria-describedby="exampleHelpText" required>
                      <span class="form-error">
                        Yo, you had better fill this out, it's required.
                      </span>
                    </label>
                  </div>
                  <div class="small-12 columns">
                    <label>Description
                      <textarea placeholder="Use me, or don't" aria-describedby="exampleHelpTex" data-abide-ignore></textarea>
                    </label>
                    <p class="help-text" id="exampleHelpTex">Field not required</p>
                  </div>
                  <div class="small-12 columns">
                    <label>Created on
                      <input type="text" placeholder="dd/mm/yyyy" aria-describedby="exampleHelpTex" required>
                      <span class="form-error">
                        This field is required!
                      </span>
                    </label>
                  </div>
                </div>
                <div class="row">
                  <fieldset class="large-6 columns">
                    <button class="button" type="submit" value="Submit">Create Album</button>
                  </fieldset>
                </div>
              </form>
        </section>
    </div>
</div>
@stop