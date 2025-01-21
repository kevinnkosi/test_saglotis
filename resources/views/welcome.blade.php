<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile distribution Application</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="py-10 px-32">
        <h1 class="mb-5">Liste commande client</h1>

        <div id="hs-datatable-multiple-controls" class="flex flex-col">
            <div class="overflow-x-auto min-h-[521px] ">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table id="example" class="min-w-full display" style="width:100%">
                            <thead class="border-y border-gray-200 bg-gray-200 text-gray-500">
                                <tr>
                                    <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                                        <div
                                            class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm  rounded-md hover:border-gray-200">
                                            Num Commande
                                            <svg class="size-3.5 ms-1 -me-0.5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path class="hs-datatable-ordering-desc:text-blue-600"
                                                    d="m7 15 5 5 5-5">
                                                </path>
                                                <path class="hs-datatable-ordering-asc:text-blue-600" d="m7 9 5-5 5 5">
                                                </path>
                                            </svg>
                                        </div>
                                    </th>

                                    <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                                        <div
                                            class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm rounded-md hover:border-gray-200">
                                            Nom client
                                            <svg class="size-3.5 ms-1 -me-0.5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path class="hs-datatable-ordering-desc:text-blue-600"
                                                    d="m7 15 5 5 5-5">
                                                </path>
                                                <path class="hs-datatable-ordering-asc:text-blue-600" d="m7 9 5-5 5 5">
                                                </path>
                                            </svg>
                                        </div>
                                    </th>

                                    <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                                        <div
                                            class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm  rounded-md hover:border-gray-200">
                                            Addresse
                                            <svg class="size-3.5 ms-1 -me-0.5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path class="hs-datatable-ordering-desc:text-blue-600"
                                                    d="m7 15 5 5 5-5">
                                                </path>
                                                <path class="hs-datatable-ordering-asc:text-blue-600" d="m7 9 5-5 5 5">
                                                </path>
                                            </svg>
                                        </div>
                                    </th>

                                    <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                                        <div
                                            class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm  rounded-md hover:border-gray-200">
                                            Produits
                                            <svg class="size-3.5 ms-1 -me-0.5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path class="hs-datatable-ordering-desc:text-blue-600"
                                                    d="m7 15 5 5 5-5">
                                                </path>
                                                <path class="hs-datatable-ordering-asc:text-blue-600" d="m7 9 5-5 5 5">
                                                </path>
                                            </svg>
                                        </div>
                                    </th>

                                    <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                                        <div
                                            class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm  rounded-md hover:border-gray-200">
                                            Qte commandées
                                            <svg class="size-3.5 ms-1 -me-0.5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path class="hs-datatable-ordering-desc:text-blue-600"
                                                    d="m7 15 5 5 5-5">
                                                </path>
                                                <path class="hs-datatable-ordering-asc:text-blue-600" d="m7 9 5-5 5 5">
                                                </path>
                                            </svg>
                                        </div>
                                    </th>

                                    <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                                        <div
                                            class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm  rounded-md hover:border-gray-200">
                                            Actions
                                            <svg class="size-3.5 ms-1 -me-0.5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path class="hs-datatable-ordering-desc:text-blue-600"
                                                    d="m7 15 5 5 5-5">
                                                </path>
                                                <path class="hs-datatable-ordering-asc:text-blue-600" d="m7 9 5-5 5 5">
                                                </path>
                                            </svg>
                                        </div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 ">
                                @foreach ($listComande as $commande)
                                    <tr class="even:bg-gray-50">
                                        <td class="p-3 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $commande->id }}
                                        </td>
                                        <td class="p-3 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $commande->nomClient }}
                                        </td>
                                        <td class="p-3 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $commande->adresseClient }}
                                        </td>
                                        <td class="p-3 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $commande->nomProduit }}
                                        </td>
                                        <td class="p-3 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $commande->qteProduit }}
                                        </td>
                                        <td class="p-3 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <a href="{{ route('commande.edit', $commande->id) }}"
                                                class="text-blue-500 mr-5">Modifier</a>

                                            <a href="{{ route('commande.delete', $commande->id) }}"
                                                class="text-red-500">Supprimer</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
