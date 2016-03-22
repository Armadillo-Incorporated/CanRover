@if ($errors->any())
  <div class="alert callout">
    <h5><i class="fi-alert"> There are some errors in your form.</h5>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
                <div class="row">
                  <div class="small-12 columns">
                    <label>Album Name
                      {!! Form::text('name', null, ['placeholder' => 'Ex: Parachute Construction', 'required']) !!}
                    </label>
                  </div>
                  <div class="small-12 columns">
                    <label>Description
                      {!! Form::textarea('description', null, ['placeholder' => 'Use me, or don\'t']) !!}
                    </label>
                    <p class="help-text" id="exampleHelpTex">Field not required</p>
                  </div>
                  <div class="small-12 columns">
                    <label>Created At
                      {!! Form::input('date', 'created_at', date('Y-m-d'), ['required']) !!}
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="small-12 columns">
                    {!! Form::submit($submitButtonText, ['class' => 'button button-primary expanded']) !!}
                  </div>
                </div>