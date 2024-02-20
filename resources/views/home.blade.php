<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<div class="container mx-auto">
    <h1 class="text-3xl font-bold underline">
        Domains for client #293785
    </h1>
<div class="relative overflow-x-auto mt-16">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
    <table class="table-auto w-full text-sm text-left rtl:text-right text-gray-500">
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
        <tbody class="gap-y-4">
            @foreach ($domains as $domain)
                <tr>
                    <td>{{ $domain['domain_id'] }}</td>
                    <td>{{ $domain['client_id'] }}</td>
                    <td>{{ $domain['domain'] }}</td>
                    <td>{{ $domain['state'] }}</td>
                    <td>{{ $domain['api'] }}</td>
                    <td>{{ $domain['locked']==0 ? 'No' : 'Yes' }}</td>
                    <td>{{ $domain['private']==1 ? 'Yes' : 'No' }}</td>
                    <td>{{ $domain['pending']==1 ? 'Yes' : 'No' }}</td>
                    <td>{{ $domain['registrant_name'] }}</td>
                    <td>{{ $domain['dateregistered'] }}</td>
                    <td>{{ $domain['client_name'] }}</td>
                    <td>{{ $domain['adm_name'] }}</td>
                    <td>{{ $domain['tec_name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
</body>

</html>
