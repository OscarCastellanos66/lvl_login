<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Menú
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <h2>
                        Bienvenido!<br>
                        Sus credenciales son las siguientes:
                    </h2>
                    <br>
                    <div>
                        <table class="border-collapse border border-slate-500 ... nowrap" cellspacing="0" width="100%">
                            <thead>
                                <th class="border border-slate-600 ...">Nombre</th>
                                <th class="border border-slate-600 ...">Correo electronico</th>
                                <th class="border border-slate-600 ...">Direccion</th>
                                <th class="border border-slate-600 ...">Telefono</th>
                                <th class="border border-slate-600 ...">Fotografia</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-slate-700 ...">{{ Auth::user()->name }}</td>
                                    <td class="border border-slate-700 ...">{{ Auth::user()->email }}</td>
                                    <td class="border border-slate-700 ...">{{ Auth::user()->direccion }}</td>
                                    <td class="border border-slate-700 ...">{{ Auth::user()->telefono }}</td>
                                    <td class="border border-slate-700 ...">
                                        <img src="{{asset('storage').'/'.Auth::user()->fotografia}}" width="50px">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
