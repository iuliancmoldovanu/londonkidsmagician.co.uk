<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="panel panel-primary">
    <div class="panel-heading">Thanks for contacting RUSSELL'S MAGIC</div>
    <div class="panel-body">
        <div class="container table-responsive">
            <table class="table">
                <tbody>
                <tr class="success">
                    <td>Name:</td>
                    <td>{{ $name }}</td>
                </tr>
                <tr class="info">
                    <td>Email:</td>
                    <td>{{ $email }}</td>
                </tr>
                <tr class="success">
                    <td>Phone:</td>
                    <td>{{ $phone_number }}</td>
                </tr>
                <tr class="info">
                    <td>Postcode of event:</td>
                    <td>{{ $postcodeEvent }}</td>
                </tr>
                <tr class="success">
                    <td>Start Date/Time of the event:</td>
                    <td>{{ $dateTimeEvent }}</td>
                </tr>
                <tr class="info">
                    <td>Event type:</td>
                    <td>{{ $event_type }}</td>
                </tr>
                <tr class="success">
                    <td>Extra services:</td>
                    <td>
                        @if( ! empty($extras))
                            @foreach($extras as $extra)
                                @if ($extra === end($extras))
                                    {{ $extra }}
                                @else
                                    {{ $extra }},
                                @endif
                            @endforeach
                        @else
                            Not required
                        @endif
                    </td>
                </tr>
                <tr class="info">
                    <td>Message:</td>
                    <td>
                        @if( ! empty($enquiry))
                            {{ $enquiry }}
                        @else
                            ---
                        @endif
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>