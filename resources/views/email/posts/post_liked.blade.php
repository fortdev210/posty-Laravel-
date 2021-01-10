@component('mail::message')
# Introduction

{{ $liker->name }} liked your post

@component('mail::button', ['url' => route('posts.show', $post)])
View your post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
