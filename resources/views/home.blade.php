<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1 class="text-3xl font-bold underline">
        Domains for client #293785
    </h1>

    <table class="mt-16 table-auto">
        <thead>
            <tr>
                <th>#</th>
                <th>Client ID</th>
                <th>Domain</th>
                <th>State</th>
                <th>API</th>
                <th>Locked</th>
                <th>Private</th>
                <th>Pending</th>
                <th>Registrant</th>
                <th>Date Registered</th>
                <th>Client Name</th>
                <th>Admin Name</th>
                <th>Tech Support</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($domains as $domain)
                <tr>
                    <td>{{ $domain['domain_id'] }}</td>
                    <td>{{ $domain['client_id'] }}</td>
                    <td>{{ $domain['domain'] }}</td>
                    <td>{{ $domain['state'] }}</td>
                    <td>{{ $domain['api'] }}</td>
                    <td>{{ $domain['locked'] }}</td>
                    <td>{{ $domain['private'] }}</td>
                    <td>{{ $domain['pending'] }}</td>
                    <td>{{ $domain['registrant_name'] }}</td>
                    <td>{{ $domain['dateregistered'] }}</td>
                    <td>{{ $domain['client_name'] }}</td>
                    <td>{{ $domain['adm_name'] }}</td>
                    <td>{{ $domain['tec_name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
