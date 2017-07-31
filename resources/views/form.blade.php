{!! Form::open(['url' => '/solution', 'method' => 'POST', 'id' => 'contact']) !!}
    <h3>¿Probabilidad Gripe?</h3>
    <h4>By Héctor Chumpitaz y María Fernanda Segovia</h4>
    <fieldset>
      <h3>Tipo de Gripe</h3>
      <label class="radio-inline">
      {{ Form::radio('gripe', 'GripeComun', false, ['required']) }} 
      Gripe Común 
      </label>
      <label class="radio-inline">
      {{ Form::radio('gripe', 'GripeAH1N1', false, ['required']) }}
      Gripe H1N1
      </label>
    </fieldset>
    <fieldset>
      <h3>Dolor de Cabeza</h3>
      <label class="radio-inline">
      {{ Form::radio('dcabeza', 'si', false, ['required']) }} 
      Si 
      </label>
      <label class="radio-inline">
      {{ Form::radio('dcabeza', 'no', false, ['required']) }}
      No
      </label>
    </fieldset>
    <fieldset>
      <h3>Fiebre</h3>
      <label class="radio-inline">
      {{ Form::radio('fiebre', 'menor_a_39', false, ['required']) }} 
      Menor a 39
      </label>
      <label class="radio-inline">
      {{ Form::radio('fiebre', 'mayor_a_39', false, ['required']) }}
      Mayor a 39
      </label>
    </fieldset>
    <fieldset>
      <h3>Dolor Muscular</h3>
      <label class="radio-inline">
      {{ Form::radio('dmuscular', 'moderado', false, ['required']) }} 
      Moderado
      </label>
      <label class="radio-inline">
      {{ Form::radio('dmuscular', 'intenso', false, ['required']) }}
      Intenso
      </label>
    </fieldset>
    <fieldset>
      <h3>Ardor de Ojos</h3>
      <label class="radio-inline">
      {{ Form::radio('aojos', 'leve', false, ['required']) }} 
      Leve
      </label>
      <label class="radio-inline">
      {{ Form::radio('aojos', 'intenso', false, ['required']) }}
      Intenso
      </label>
    </fieldset>
    <fieldset>
      <h3>Escalofríos</h3>
      <label class="radio-inline">
      {{ Form::radio('escalofrios', 'esporadicos', false, ['required']) }} 
      Esporádicos
      </label>
      <label class="radio-inline">
      {{ Form::radio('escalofrios', 'frecuentes', false, ['required']) }}
      Frecuentes
      </label>
    </fieldset>
    <fieldset>
      <h3>Problemas Respiratorios</h3>
      <label class="radio-inline">
      {{ Form::radio('prespiratorios', 'Alta', false, ['required']) }} 
      Alta
      </label>
      <label class="radio-inline">
      {{ Form::radio('prespiratorios', 'Moderada', false, ['required']) }}
      Moderada
      </label>
    </fieldset>
    <fieldset>
      <h3>Dolor de Garganta</h3>
      <label class="radio-inline">
      {{ Form::radio('dgarganta', 'pronunciado', false, ['required']) }} 
      Pronunciado
      </label>
      <label class="radio-inline">
      {{ Form::radio('dgarganta', 'leve', false, ['required']) }}
      Leve
      </label>
    </fieldset>
    <fieldset>
      <h3>Tos</h3>
      {{ Form::radio('tos', 'esporadica', false, ['required']) }} 
      Esporádica
      </label>
      <label class="radio-inline">
      {{ Form::radio('tos', 'continua', false, ['required']) }}
      Continua
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p class="copyright">Trabajo Académico UPC</p>
{!! Form::close() !!}