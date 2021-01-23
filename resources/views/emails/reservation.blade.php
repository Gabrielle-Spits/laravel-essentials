@component('mail::message')
# Introduction

reservation for {{ $name }} at {{config ('app.name')}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
