<table>
    <thead>
        @if($datalog->nama_table == 'about_me')
        <tr>
            <th>
                Nomer
            </th>
            <th>
                Nomer
            </th>
            <th>
                Nomer
            </th>
            <th>
                Nomer
            </th>
        </tr>
        @endif
    </thead>
    <tbody>
        @if($datalog->nama_table == 'about_me')
            <tr>
                <td>
                    {{ $datalog->items->id }}
                </td>
                <td>
                    {{ $datalog->id }}
                </td>
                <td>
                    {{ $datalog->id }}
                </td>
                <td>
                    {{ $datalog->id }}
                </td>
            </tr>
        @endif

    </tbody>
</table>
