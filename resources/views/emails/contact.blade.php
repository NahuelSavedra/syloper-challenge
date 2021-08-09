@component('mail::message')
    Mensaje recibido 

    Estimado/a {{ $nombre }}, email: {{ $email }} su comentario:
    
    {{ $comentario }}
    
    ya fue recibido. Muchas gracias por el aporte!

    

@component('mail::button', ['url' => $url])
    Ir al sitio.
@endcomponent

    Atentamente,
    {{ config('app.name') }}
@endcomponent
