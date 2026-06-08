New safari enquiry

Name: {{ $enquiry['name'] }}
Email: {{ $enquiry['email'] }}
Telephone: {{ $enquiry['telephone'] }}
Contact preference: {{ $enquiry['contact_preference'] }}
Number of adults: {{ $enquiry['adults'] }}
Number of children: {{ $enquiry['children'] ?? 0 }}
@if (! empty($enquiry['child_ages']))

Ages of children:
@foreach ($enquiry['child_ages'] as $index => $age)
Child {{ $index + 1 }}: {{ $age }}
@endforeach
@endif

Arrival date: {{ $enquiry['arrival_date'] ?? 'Not provided' }}
Departure date: {{ $enquiry['departure_date'] ?? 'Not provided' }}

Message:
{{ $enquiry['message'] ?? 'Not provided' }}
