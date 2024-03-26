
<x-mail::message>
# New Contact Message

**Name:** {{ $formData['name'] }}

**Email:** {{ $formData['email'] }}

**Phone:** {{ $formData['phone'] }}

@if($formData['note'])
**Note:** {{ $formData['note'] }}
@endif




</x-mail::message>

