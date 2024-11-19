# Contact Form Submission

<p>
    Name: {{ $data['name'] }}<br />
    Email: {{ $data['email'] }}<br />
    Phone: {{ $data['phone'] }}<br />
    Subject: {{ $data['subject'] }}<br />
    Message: {{ $data['message'] }}
</p>

Thanks,<br />
{{ config('app.name') }}