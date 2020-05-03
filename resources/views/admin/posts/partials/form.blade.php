{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('category_id', 'Categoría') }}
    {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('title', 'Titulo de la Entrada') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'URL Amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
    {{ Form::label('file', 'Imagen') }}
    {{ Form::file('file') }}
</div>
<div class="form-group">
    {{ Form::label('status', 'Estado') }}
    <label>
        {{ Form::radio('status', 'published') }} Publicado
    </label>
    <label>
        {{ Form::radio('status', 'draft') }} Borrador
    </label>
</div>
<div class="form-group">
    {{ Form::label('tags', 'Etiquetas') }}
    <div>
        @foreach ($tags as $tag)
        <label>
            {{ Form::checkbox('tags[]', $tag->id) }} {{$tag->name}}
        </label>
        @endforeach
    </div>
</div>
<div class="form-group">
    {{ Form::label('extract', 'Extracto') }}
    {{ Form::textarea('extract', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Cuerpo del Post') }}
    {{ Form::textarea('body', null, ['class' => 'form-control', 'id' => 'postBody']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/speakingurl/14.0.1/speakingurl.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({selector:'textarea#postBody'});
</script>
<script scr="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
    // $(document).ready(function(){
    //     $("#name, #slug").stringToSlug({
    //         callback: function(text){
    //             $("#slug").val(text);
    //         }
    //     });
    // });
$(document).ready(function(){
    $("#title").keyup(function(){
        var cadena = $(this).val();
        string_to_slug(cadena);
    });
});


function string_to_slug (str) {
         str = str.replace(/^\s+|\s+$/g, '');
         str = str.toLowerCase(); 
        
          //quita acentos, cambia la ñ por n, etc
          var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
          var to   = "aaaaeeeeiiiioooouuuunc------";
          
          for (var i=0, l=from.length ; i<l ; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
           }

           str = str.replace(/[^a-z0-9 -]/g, '') // quita caracteres invalidos
                 .replace(/\s+/g, '-') // reemplaza los espacios por -
                 .replace(/-+/g, '-'); // quita las plecas

           return $("#slug").val(str);
}
</script>
@endsection