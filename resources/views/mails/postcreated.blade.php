@component('mail::message')
# Nuovo Post
 
Congratulazioni...!!!Hai creato un Nuovo Post nel tuo Blog!
 
@component('mail::button', ['url' => route('admin.posts.show',$post)])
{{$post->title}}
@endcomponent
 
Grazie,<br>
{{ config('app.name') }}
@endcomponent

