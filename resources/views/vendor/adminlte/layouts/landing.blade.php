{{-- The hidden CSRF field for secure authentication --}}
{{ csrf_field() }}
{{-- Add a hidden SAML Request field for SAML authentication --}}
@if(isset($_GET['SAMLRequest']))
    <input type="hidden" id="SAMLRequest" name="SAMLRequest" value="{{ $_GET['SAMLRequest'] }}">
@endif


{{ $attributes = ["hoal","asdfads","sadfasf"] }}
