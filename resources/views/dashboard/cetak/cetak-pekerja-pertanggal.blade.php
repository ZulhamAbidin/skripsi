<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DINAS KETENAGAKERJAAN KOTA MAKASSAR</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            margin: 0px;
        }

        .table1 {
            font-family: sans-serif;
            color: #232323;
            border-collapse: collapse;
            margin-top: 100px;
            margin-left: 50px;
            margin-rigt: 50px;

        }

        .table1,
        th,
        td {
            border: 1px solid #999;
            padding: 8px 20px;
        }
    </style>
</head>

<body>

    <div class="overflow-x-auto relative sm:rounded-lg">
        <table class="w-fit text-sm text-left mx-16 my-16">

            <thead class="text-xs text-slate-50 uppercase bg-cyan-600 ">
                <tr>
                    <th class="text-center"> No </th>
                    <th class="text-center"> Nama Lengkap </th>
                    <th class="text-center"> Alamat Domisili </th>
                    <th class="text-center"> Jenis Kelamin </th>
                    <th class="w-fit text-center"> Tanggal Pengesahan </th>
                    <th class="w-10 text-center"> pendidikan Terakhir </th>
                    <th class="text-center"> Jurusan </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($cetakPertanggal as $key=>$value)
                <tr class="bg-white">
                    <td>{{ $loop->iteration }}</td>
                    <td class="w-fit">{{ $value->nama_lengkap }}</td>
                    <td class="text-center">{{ $value->alamat_domisili }}</td>
                    <td class="text-center"> {{ $value->jenis_kelamin }}</td>
                    <td class="w-2 text-center"> {{\Carbon\Carbon::parse($value->hari)->format('d.m.Y') }}</td>
                    <td class="w-2 text-center">{{ $value->pendidikan_terakhir }}</td>
                    <td>{{ $value->jurusan }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>


</body>

</html>