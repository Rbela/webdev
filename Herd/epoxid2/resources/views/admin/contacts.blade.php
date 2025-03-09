<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epoxy Flooring Services</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body class="bg-gray-100">
    
    @extends('admin.layouts.admin')

    @section('content')
    <div class="container mt-4">
        <h2>Seznam kontaktů</h2>

        @if (session('success'))
            <div class="alert alert-success p-4 bg-green-100 border border-green-400 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if ($contacts->count() > 0)
            <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="p-2">ID</th>
                        <th class="p-2">Jméno</th>
                        <th class="p-2">Email</th>
                        <th class="p-2">Telefon</th>
                        <th class="p-2">Zpráva</th>
                        <th class="p-2">Datum</th>
                        <th class="p-2">Akce</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr class="border-b" id="row-{{ $contact->id }}">
                            <td class="p-2">{{ $contact->id }}</td>
                            <td class="p-2">{{ $contact->name }}</td>
                            <td class="p-2">{{ $contact->email }}</td>
                            <td class="p-2">{{ $contact->phone }}</td>
                            <td class="p-2">{{ $contact->message }}</td>
                            <td class="p-2">{{ $contact->created_at->format('d.m.Y H:i') }}</td>
                            <td class="p-2">
                                <button class="bg-red-500 text-white p-2 rounded" onclick="deleteContact({{ $contact->id }})">Smazat</button>
                                <button class="bg-green-500 text-white p-2 rounded" onclick="markResolved({{ $contact->id }})">Vyřešeno</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-gray-600 mt-4">Žádné kontaktní zprávy zatím nejsou.</p>
        @endif
    </div>
    @endsection

    <script>
        function deleteContact(id) {
            if (confirm("Opravdu chcete smazat tento kontakt?")) {
                axios.delete('/admin/contacts/' + id, {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => {
                    document.getElementById('row-' + id).remove();
                })
                .catch(error => {
                    alert("Chyba při mazání kontaktu");
                    console.error(error);
                });
            }
        }

        function markResolved(id) {
            document.getElementById('row-' + id).classList.add('bg-green-100');
        }
    </script>
</body>
</html>
