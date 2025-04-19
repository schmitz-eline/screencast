@component('layouts.app', ['title' => 'Authentifiez-vous !'])
    <h1>Authentifiez-vous&nbsp;!</h1>
<form action="/login"
      method="post">
    @csrfToken()
    <fieldset>
        <div class="fields">
            @component('components.form.fields.input_text', [
                'type' => 'email',
                'field_name' => 'email',
                'placeholder' => 'jean@valjean.fr'
                ])
                <abbr title="requis">*</abbr> Email
            @endcomponent
        </div>
        <div class="fields">
            @component('components.form.fields.input_text', [
                'type' => 'password',
                'field_name' => 'password',
                'placeholder' => ''
                ])
                <abbr title="requis">*</abbr> Mot de passe
            @endcomponent
        </div>
    </fieldset>
    <button type="submit">Authentifiez-moi&nbsp;!</button>
</form>
@endcomponent