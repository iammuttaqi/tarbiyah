<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">
{{-- {{ config('app.name') }} --}}
<div style="background-color: black; border-radius: 50px;">
<img src="{{ Vite::asset('resources/images/logo-small.png') }}" class="logo" alt="Laravel Logo" style="height: 25px; width: auto; margin: 10px;">
</div>
</x-mail::header>
</x-slot:header>

{{-- Body --}}
{!! $slot !!}

{{-- Subcopy --}}
@isset($subcopy)
<x-slot:subcopy>
<x-mail::subcopy>
{!! $subcopy !!}
</x-mail::subcopy>
</x-slot:subcopy>
@endisset

{{-- Footer --}}
<x-slot:footer>
<x-mail::footer>
<p>© {{ date('Y') }} {{ config('app.name') }}. {{ __('All rights reserved.') }}</p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" style="margin: 0 auto;"><tr>
<td style="padding: 0 4px;"><a aria-label="Facebook" href="https://www.facebook.com/tarbiya.me" rel="noopener noreferrer" target="_blank" style="color: gray; text-decoration: none;">
<img src="{{ Vite::asset('resources/images/mail-facebook.png') }}" alt="" style="width: 20px; height: 20px;">
</a></td>
<td style="padding: 0 4px;"><a aria-label="Instagram" href="https://www.instagram.com/tarbiya.me" rel="noopener noreferrer" target="_blank" style="color: gray; text-decoration: none;">
<img src="{{ Vite::asset('resources/images/mail-instagram.png') }}" alt="" style="width: 20px; height: 20px;">
</a></td>
<td style="padding: 0 4px;"><a aria-label="TikTok" href="https://www.tiktok.com/@tarbiya.me" rel="noopener noreferrer" target="_blank" style="color: gray; text-decoration: none;">
<img src="{{ Vite::asset('resources/images/mail-tiktok.png') }}" alt="" style="width: 20px; height: 20px;">
</a></td>
</tr></table>
</x-mail::footer>
</x-slot:footer>
</x-mail::layout>
