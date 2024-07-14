<?php
$data = '[
    {
        "OrderID": "#OR7546",
        "CustomerName": "Harold Hobbs",
        "Price": "$ 123.00",
        "Status": "Paid",
        "Date": "Sep 30/2021",
        "ViewDetails": "View Details"
    },
    {
        "OrderID": "#OR4359",
        "CustomerName": "Shirley Williams",
        "Price": "$ 745.00",
        "Status": "Shipped",
        "Date": "Sep 28/2021",
        "ViewDetails": "View Details"
    },
    {
        "OrderID": "#OR3654",
        "CustomerName": "Timothy Reyes",
        "Price": "$ 1344.00",
        "Status": "Pending",
        "Date": "Sep 27/2021",
        "ViewDetails": "View Details"
    },
    {
        "OrderID": "#OR7451",
        "CustomerName": "Jane Stillman",
        "Price": "$ 230.00",
        "Status": "Canceled",
        "Date": "Sep 24/2021",
        "ViewDetails": "View Details "
    },
    {
        "OrderID": "#OR1324",
        "CustomerName": "Leon Blank",
        "Price": "$ 511.00",
        "Status": "Shipped",
        "Date": "Sep 20/2021",
        "ViewDetails": "View Details"
    },
    {
        "OrderID": "#OR5331",
        "CustomerName": "Cecilia Hendric",
        "Price": "$ 2654.00",
        "Status": "Paid",
        "Date": "Sep 09/2021",
        "ViewDetails": "View Details"
    },
    {
        "OrderID": "#OR1874",
        "CustomerName": "Suzanne Williams",
        "Price": "$ 400.00",
        "Status": "Paid",
        "Date": "Aug 31/2021",
        "ViewDetails": "View Details"
    },
    {
        "OrderID": "#OR4963",
        "CustomerName": "Gerland Falvin",
        "Price": "$ 954.00",
        "Status": "Pending",
        "Date": "Aug 31/2021",
        "ViewDetails": "View Details"
    },
    {
        "OrderID": "#OR9452",
        "CustomerName": "Crystal Reagle",
        "Price": "$ 1365.00",
        "Status": "Canceled",
        "Date": "Aug 25/2021",
        "ViewDetails": "View Details"
    },
    {
        "OrderID": "#OR8563",
        "CustomerName": "John Reeves",
        "Price": "$ 164.00",
        "Status": "Shipped",
        "Date": "July 20/2021",
        "ViewDetails": "View Details"
    }
]';
$dataJson = json_decode($data);

function getColumns($object){
    $columns = [];
    $objectArray = get_object_vars($object);
    foreach ($objectArray as $key => $value) {
        $columns[] = $key;
    }
    return $columns;
}
$columns = getColumns($dataJson[0]);
?>

<!-- start::Table -->
<div class="bg-white rounded-lg px-8 py-6 overflow-x-scroll custom-scrollbar">
    <div class="flex justify-between">
        <h4 class="text-xl font-semibold">Recent transactions</h4>
        <x-searchbard>
        </x-searchbard>
    </div>
    <table class="w-full my-8 whitespace-nowrap">
        <thead class="bg-secondary text-gray-100 font-bold">
            <td>
            </td>
            @foreach ($columns as $columnName)
                <td class="py-2 pl-2">
                    {{$columnName}}
                </td>
            @endforeach
        </thead>
        <tbody class="text-sm">
            @foreach ($dataJson as $object)
                <tr class="bg-gray-100 hover:bg-primary hover:bg-opacity-20 transition duration-200">
                    <td class="py-3 pl-2">
                        <input type="checkbox" class="rounded focus:ring-0 checked:bg-red-500 ml-2">
                    </td>
                    @foreach ($object as $key => $value)
                        @if ($key === 'Status')
                            <td class="py-3 pl-2">
                                <span class="bg-green-500 px-1.5 py-0.5 rounded-lg text-gray-100">{{$value}}</span>
                            </td>
                        @elseif ($key === 'ViewDetails')
                            <td class="py-3 pl-2">
                                <a href="#" class="bg-primary hover:bg-opacity-90 px-2 py-1 mr-2 text-gray-100 rounded-lg">View Details</a>
                            </td>
                        @else
                            <td class="py-3 pl-2">
                                {{$value}}
                            </td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
            <tr class="bg-gray-100 hover:bg-primary hover:bg-opacity-20 transition duration-200">
                <td class="py-3 pl-2">
                    <input type="checkbox" class="rounded focus:ring-0 checked:bg-red-500 ml-2">
                </td>
                <td class="py-3 pl-2">
                    #OR7546
                </td>
                <td class="py-3 pl-2 capitalize">
                    Harold Hobbs
                </td>
                <td class="py-3 pl-2">
                    $ 123.00
                </td>
                <td class="py-3 pl-2">
                    <span class="bg-green-500 px-1.5 py-0.5 rounded-lg text-gray-100">Paid</span>
                </td>
                <td class="py-3 pl-2">
                    Sep 30, 2021
                </td>
                <td class="py-3 pl-2">
                    <a href="#" class="bg-primary hover:bg-opacity-90 px-2 py-1 mr-2 text-gray-100 rounded-lg">View Details</a>
                </td>
            </tr>
            {{-- <tr class="bg-gray-200 hover:bg-primary hover:bg-opacity-20 transition duration-200">
                <td class="py-3 pl-2">
                    <input type="checkbox" class="rounded focus:ring-0 checked:bg-red-500 ml-2">
                </td>
                <td class="py-3 pl-2">
                    #OR4359
                </td>
                <td class="py-3 pl-2 capitalize">
                    Shirley Williams
                </td>
                <td class="py-3 pl-2">
                    $ 745.00
                </td>
                <td class="py-3 pl-2">
                    <span class="bg-indigo-500 px-1.5 py-0.5 rounded-lg text-gray-100">Shipped</span>
                </td>
                <td class="py-3 pl-2">
                    Sep 28, 2021
                </td>
                <td class="py-3 pl-2">
                    <a href="#" class="bg-primary hover:bg-opacity-90 px-2 py-1 mr-2 text-gray-100 rounded-lg">View Details</a>
                </td>
            </tr>
            <tr class="bg-gray-100 hover:bg-primary hover:bg-opacity-20 transition duration-200">
                <td class="py-3 pl-2">
                    <input type="checkbox" class="rounded focus:ring-0 checked:bg-red-500 ml-2">
                </td>
                <td class="py-3 pl-2">
                    #OR3654
                </td>
                <td class="py-3 pl-2 capitalize">
                    Timothy Reyes
                </td>
                <td class="py-3 pl-2">
                    $ 1344.00
                </td>
                <td class="py-3 pl-2">
                    <span class="bg-yellow-500 px-1.5 py-0.5 rounded-lg text-gray-100">Pending</span>
                </td>
                <td class="py-3 pl-2">
                    Sep 27, 2021
                </td>
                <td class="py-3 pl-2">
                    <a href="#" class="bg-primary hover:bg-opacity-90 px-2 py-1 mr-2 text-gray-100 rounded-lg">View Details</a>
                </td>
            </tr>
            <tr class="bg-gray-200 hover:bg-primary hover:bg-opacity-20 transition duration-200">
                <td class="py-3 pl-2">
                    <input type="checkbox" class="rounded focus:ring-0 checked:bg-red-500 ml-2">
                </td>
                <td class="py-3 pl-2">
                    #OR7451
                </td>
                <td class="py-3 pl-2 capitalize">
                    Jane Stillman
                </td>
                <td class="py-3 pl-2">
                    $ 230.00
                </td>
                <td class="py-3 pl-2">
                    <span class="bg-red-500 px-1.5 py-0.5 rounded-lg text-gray-100">Canceled</span>
                </td>
                <td class="py-3 pl-2">
                    Sep 24, 2021
                </td>
                <td class="py-3 pl-2">
                    <a href="#" class="bg-primary hover:bg-opacity-90 px-2 py-1 mr-2 text-gray-100 rounded-lg">View Details</a>
                </td>
            </tr>
            <tr class="bg-gray-100 hover:bg-primary hover:bg-opacity-20 transition duration-200">
                <td class="py-3 pl-2">
                    <input type="checkbox" class="rounded focus:ring-0 checked:bg-red-500 ml-2">
                </td>
                <td class="py-3 pl-2">
                    #OR1324
                </td>
                <td class="py-3 pl-2 capitalize">
                    Leon Blank
                </td>
                <td class="py-3 pl-2">
                    $ 511.00
                </td>
                <td class="py-3 pl-2">
                    <span class="bg-indigo-500 px-1.5 py-0.5 rounded-lg text-gray-100">Shipped</span>
                </td>
                <td class="py-3 pl-2">
                    Sep 20, 2021
                </td>
                <td class="py-3 pl-2">
                    <a href="#" class="bg-primary hover:bg-opacity-90 px-2 py-1 mr-2 text-gray-100 rounded-lg">View Details</a>
                </td>
            </tr>
            <tr class="bg-gray-200 hover:bg-primary hover:bg-opacity-20 transition duration-200">
                <td class="py-3 pl-2">
                    <input type="checkbox" class="rounded focus:ring-0 checked:bg-red-500 ml-2">
                </td>
                <td class="py-3 pl-2">
                    #OR5331
                </td>
                <td class="py-3 pl-2 capitalize">
                    Cecilia Hendric
                </td>
                <td class="py-3 pl-2">
                    $ 2654.00
                </td>
                <td class="py-3 pl-2">
                    <span class="bg-green-500 px-1.5 py-0.5 rounded-lg text-gray-100">Paid</span>
                </td>
                <td class="py-3 pl-2">
                    Sep 09, 2021
                </td>
                <td class="py-3 pl-2">
                    <a href="#" class="bg-primary hover:bg-opacity-90 px-2 py-1 mr-2 text-gray-100 rounded-lg">View Details</a>
                </td>
            </tr>
            <tr class="bg-gray-100 hover:bg-primary hover:bg-opacity-20 transition duration-200">
                <td class="py-3 pl-2">
                    <input type="checkbox" class="rounded focus:ring-0 checked:bg-red-500 ml-2">
                </td>
                <td class="py-3 pl-2">
                    #OR1874
                </td>
                <td class="py-3 pl-2 capitalize">
                    Suzanne Williams
                </td>
                <td class="py-3 pl-2">
                    $ 400.00
                </td>
                <td class="py-3 pl-2">
                    <span class="bg-green-500 px-1.5 py-0.5 rounded-lg text-gray-100">Paid</span>
                </td>
                <td class="py-3 pl-2">
                    Aug 31, 2021
                </td>
                <td class="py-3 pl-2">
                    <a href="#" class="bg-primary hover:bg-opacity-90 px-2 py-1 mr-2 text-gray-100 rounded-lg">View Details</a>
                </td>
            </tr>
            <tr class="bg-gray-200 hover:bg-primary hover:bg-opacity-20 transition duration-200">
                <td class="py-3 pl-2">
                    <input type="checkbox" class="rounded focus:ring-0 checked:bg-red-500 ml-2">
                </td>
                <td class="py-3 pl-2">
                    #OR4963
                </td>
                <td class="py-3 pl-2 capitalize">
                    Gerland Falvin
                </td>
                <td class="py-3 pl-2">
                    $ 954.00
                </td>
                <td class="py-3 pl-2">
                    <span class="bg-yellow-500 px-1.5 py-0.5 rounded-lg text-gray-100">Pending</span>
                </td>
                <td class="py-3 pl-2">
                    Aug 31, 2021
                </td>
                <td class="py-3 pl-2">
                    <a href="#" class="bg-primary hover:bg-opacity-90 px-2 py-1 mr-2 text-gray-100 rounded-lg">View Details</a>
                </td>
            </tr>
            <tr class="bg-gray-100 hover:bg-primary hover:bg-opacity-20 transition duration-200">
                <td class="py-3 pl-2">
                    <input type="checkbox" class="rounded focus:ring-0 checked:bg-red-500 ml-2">
                </td>
                <td class="py-3 pl-2">
                    #OR9452
                </td>
                <td class="py-3 pl-2 capitalize">
                    Crystal Reagle
                </td>
                <td class="py-3 pl-2">
                    $ 1365.00
                </td>
                <td class="py-3 pl-2">
                    <span class="bg-red-500 px-1.5 py-0.5 rounded-lg text-gray-100">Canceled</span>
                </td>
                <td class="py-3 pl-2">
                    Aug 25, 2021
                </td>
                <td class="py-3 pl-2">
                    <a href="#" class="bg-primary hover:bg-opacity-90 px-2 py-1 mr-2 text-gray-100 rounded-lg">View Details</a>
                </td>
            </tr>
            <tr class="bg-gray-200 hover:bg-primary hover:bg-opacity-20 transition duration-200">
                <td class="py-3 pl-2">
                    <input type="checkbox" class="rounded focus:ring-0 checked:bg-red-500 ml-2">
                </td>
                <td class="py-3 pl-2">
                    #OR8563
                </td>
                <td class="py-3 pl-2 capitalize">
                    John Reeves
                </td>
                <td class="py-3 pl-2">
                    $ 164.00
                </td>
                <td class="py-3 pl-2">
                    <span class="bg-indigo-500 px-1.5 py-0.5 rounded-lg text-gray-100">Shipped</span>
                </td>
                <td class="py-3 pl-2">
                    July 20, 2021
                </td>
                <td class="py-3 pl-2">
                    <a href="#" class="bg-primary hover:bg-opacity-90 px-2 py-1 mr-2 text-gray-100 rounded-lg">View Details</a>
                </td>
            </tr> --}}
        </tbody>
    </table>
</div>
<!-- end::Table -->
