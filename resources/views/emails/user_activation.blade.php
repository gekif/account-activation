{{-- Using Send--}}
{{--<h1>Hi, please click the link to activate your account <a href="{{ route('user.activation', $code) }}">--}}
        {{--{{ route('user.activation', $code) }}--}}
{{--</a></h1>--}}

{{-- Using Queue--}}
<h1>Hi, please click the link to activate your account <a href="{{ $url }}">
        {{ $url }}
</a></h1>