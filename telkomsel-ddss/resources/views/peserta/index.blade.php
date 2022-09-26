@extends('layouts.app')
@section('body')
<div class="flex items-center justify-center py-4 mb-4 shadow-2xl bg-sekunder">
    <span class="text-3xl font-bold text-white font-batik">Peserta DDSS 2022</span>
</div>
<div class="flex mx-auto overflow-hidden rounded-full shadow-xl w-fit">
    <a href="#" class="flex items-center justify-center px-4 py-2 text-xs font-semibold text-center text-white align-middle border-r border-gray-300 sm:text-base bg-premier tab" id="the-stage">The Stage</a>
    <a href="#" class="flex items-center justify-center px-4 py-2 text-xs font-semibold text-center align-middle transition-all border-gray-300 sm:text-base text-premier border-x hover:bg-premier hover:text-white tab" id="ambassador">Ambassador Digital</a>
    <a href="#" class="flex items-center justify-center px-4 py-2 text-xs font-semibold text-center align-middle transition-all border-gray-300 sm:text-base text-premier border-x hover:bg-premier hover:text-white tab" id="offer">Special Offer Orbit</a>
    <a href="#" class="flex items-center justify-center px-4 py-2 text-xs font-semibold text-center align-middle transition-all border-l border-gray-300 sm:text-base text-premier hover:bg-premier hover:text-white tab" id="esport">ESport</a>
</div>
<div class="px-2 my-12 sm:px-8" id="the-stage-container">
    <span class="inline-block w-full text-4xl text-center text-premier font-batik">The Stage</span>
    <div class="max-w-full mx-auto my-8 overflow-x-auto bg-white rounded-md shadow w-fit">
        <table class="overflow-auto text-left border-collapse w-fit">
            <thead class="border-b">
                <tr>
                    <th class="p-2 text-sm font-bold text-center text-gray-100 uppercase bg-premier">No.</th>
                    <th class="p-2 text-sm font-bold text-center text-gray-100 uppercase bg-premier">Sekolah</th>
                    <th class="p-2 text-sm font-bold text-center text-gray-100 uppercase bg-premier">Nama</th>
                    <th class="p-2 text-sm font-bold text-center text-gray-100 uppercase bg-premier">Tim</th>
                    <th class="p-2 text-sm font-bold text-center text-gray-100 uppercase bg-premier">Lolos</th>
                </tr>
            </thead>
            <tbody class="max-h-screen overflow-y-auto">
                @foreach ($stage as $key=>$data)
                <tr class="hover:bg-gray-200">
                    <td class="p-2 font-bold text-gray-700 border-b">{{ $key+1 }}</td>
                    <td class="p-2 text-gray-700 border-b sekolah">{!! $data->NAMA_SEKOLAH??'<i class="text-sm text-slate-500">Data Sekolah Tidak Ditemukan</i>' !!}</td>
                    <td class="p-2 text-gray-700 border-b nama">{{ ucwords($data->nama) }}</td>
                    <td class="p-2 text-gray-700 border-b tim">{{ $data->nama_tim }}</td>
                    <td class="p-2 text-gray-700 border-b lulus">
                        @if($data->layak=='1')
                        <span class="font-semibold text-green-600 whitespace-nowrap">Lulus</span>
                        @else($data->layak=='0')
                        <span class="font-semibold text-red-600 whitespace-nowrap">Tidak Lulus</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="px-2 my-12 sm:px-8" id="ambassador-container" style="display: none">
    <span class="inline-block w-full text-4xl text-center text-premier font-batik">Ambassador Digital</span>
    <div class="max-w-full mx-auto my-8 overflow-x-auto bg-white rounded-md shadow w-fit">
        <table class="overflow-auto text-left border-collapse w-fit">
            <thead class="border-b">
                <tr>
                    <th class="p-2 text-sm font-bold text-center text-gray-100 uppercase bg-premier">No.</th>
                    <th class="p-2 text-sm font-bold text-center text-gray-100 uppercase bg-premier">Sekolah</th>
                    <th class="p-2 text-sm font-bold text-center text-gray-100 uppercase bg-premier">Nama</th>
                    <th class="p-2 text-sm font-bold text-center text-gray-100 uppercase bg-premier">Instagram</th>
                </tr>
            </thead>
            <tbody class="max-h-screen overflow-y-auto">
                @foreach ($ambassador as $key=>$data)
                <tr class="hover:bg-gray-200">
                    <td class="p-2 font-bold text-gray-700 border-b">{{ $key+1 }}</td>
                    <td class="p-2 text-gray-700 border-b sekolah">{!! $data->NAMA_SEKOLAH??'<i class="text-sm text-slate-500">Data Sekolah Tidak Ditemukan</i>' !!}</td>
                    <td class="p-2 text-gray-700 border-b nama">{{ ucwords($data->nama) }}</td>
                    <td class="p-2 text-gray-700 border-b instagram">{{ $data->instagram }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="px-2 my-12 sm:px-8" id="offer-container" style="display: none">
    <span class="inline-block w-full text-4xl text-center text-premier font-batik">Special Offer Orbit</span>
    <div class="max-w-full mx-auto my-8 overflow-x-auto bg-white rounded-md shadow w-fit">
        <table class="overflow-auto text-left border-collapse w-fit">
            <thead class="border-b">
                <tr>
                    <th class="p-2 text-sm font-bold text-center text-gray-100 uppercase bg-premier">No.</th>
                    <th class="p-2 text-sm font-bold text-center text-gray-100 uppercase bg-premier">Sekolah/Instansi</th>
                    <th class="p-2 text-sm font-bold text-center text-gray-100 uppercase bg-premier">Nama</th>
                </tr>
            </thead>
            <tbody class="max-h-screen overflow-y-auto">
                @foreach ($offer as $key=>$data)
                <tr class="hover:bg-gray-200">
                    <td class="p-2 font-bold text-gray-700 border-b">{{ $key+1 }}</td>
                    <td class="p-2 text-gray-700 border-b sekolah">
                        @if ($data->npsn)
                        {!! $data->NAMA_SEKOLAH??'<i class="text-sm text-slate-500">Data Sekolah Tidak Ditemukan</i>' !!}
                        @else
                        {{ ucwords($data->nama_instansi) }}
                        @endif
                    </td>
                    <td class="p-2 text-gray-700 border-b nama">{{ ucwords($data->nama) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $(".tab").on("click", function() {
            $(".tab").removeClass("bg-premier text-white").addClass("text-premier hover:bg-premier hover:text-white");
            $(this).addClass("bg-premier text-white").removeClass("text-premier hover:bg-premier hover:text-white");

            switch ($(this).attr('id')) {
                case 'the-stage':
                    $("#the-stage-container").show();
                    $("#ambassador-container").hide();
                    $("#offer-container").hide();
                    break;
                case 'ambassador':
                    $("#the-stage-container").hide();
                    $("#ambassador-container").show();
                    $("#offer-container").hide();
                    break;
                case 'offer':
                    $("#the-stage-container").hide();
                    $("#ambassador-container").hide();
                    $("#offer-container").show();
                    break;

                default:
                    break;
            }
        })
    })

</script>
@endsection
